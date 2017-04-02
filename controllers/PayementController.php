<?php
include(PATH_MODELS .'ServicePayement.php');

class PayementController {
    private $paypal_email = 'testePau@gmail.com';
    private $return_url ;
    private $cancel_url ;
    private $notify_url;

    private $txnId;
    private $txnType;
    private $articleInfo;

    public function __construct() {

        $db = Db::getInstance();

        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->notify_url=$actual_link;
        $this->return_url=$actual_link.'&result=successful';
        $this->cancel_url=$actual_link.'&result=cancel';

        $this->txnId=!empty($_POST["txn_id"]) ? $_POST["txn_id"] : null;
        $this->txnType=!empty($_POST["txn_type"]) ? $_POST["txn_type"] : null;
        if(!$_POST["item_number"]){
            throw exception ('article not found');
        }

        $artDescription = $db->getProductDescFromProductID($_POST["item_number"])->productDesc;
        $this->articleInfo = new VehicleModel($artDescription);

        if(empty($this->txnId) && empty($this->txnType)){
            $this->paypalRequest();
        }
        else {
            $this->reponsePayPal();
        }
    }

    /**
     * payapl request
     */
    public function paypalRequest(){

        $querystring = '';

        // Firstly Append paypal account to querystring
        $querystring .= "?business=".urlencode($this->paypal_email)."&";

        // Append amount& currency (£) to quersytring so it cannot be edited in html

        //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
        $querystring .= "item_name=".urlencode($this->articleInfo->getProductDesc())."&";
        $querystring .= "amount=".urlencode($this->articleInfo->getPowerBoxPrice())."&";

        //loop for posted values and append to querystring
        foreach($_POST as $key => $value){
            $value = urlencode(stripslashes($value));
            $querystring .= "$key=$value&";
        }

        // Append paypal return addresses
        $querystring .= "return=".urlencode(stripslashes($this->return_url))."&";
        $querystring .= "cancel_return=".urlencode(stripslashes($this->cancel_url))."&";
        $querystring .= "notify_url=".urlencode($this->notify_url);

        // Append querystring with custom field
        //$querystring .= "&custom=".USERID;

        // Redirect to paypal IPN
        header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
        exit();

    }

    /**
     * reponse from payapl
     */
    private function reponsePayPal(){
        // Response from Paypal

        // read the post from PayPal system and add 'cmd'
        $req = 'cmd=_notify-validate';
        foreach ($_POST as $key => $value) {
            $value = urlencode(stripslashes($value));
            $value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
            $req .= "&$key=$value";
        }

        // assign posted variables to local variables
        $data['item_name']			= $_POST['item_name'];
        $data['item_number'] 		= $_POST['item_number'];
        $data['payment_status'] 	= $_POST['payment_status'];
        $data['payment_amount'] 	= $_POST['mc_gross'];
        $data['payment_currency']	= $_POST['mc_currency'];
        $data['txn_id']				= $_POST['txn_id'];
        $data['receiver_email'] 	= $_POST['receiver_email'];
        $data['payer_email'] 		= $_POST['payer_email'];
        $data['custom'] 			= $_POST['custom'];

        // post back to PayPal system to validate
        $header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
        $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

        $fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);

        if (!$fp) {
            // HTTP ERROR

        } else {
            fputs($fp, $header . $req);
            while (!feof($fp)) {
                $res = fgets ($fp, 1024);
                if (strcmp($res, "VERIFIED") == 0) {

                    // Used for debugging
                    // mail('user@domain.com', 'PAYPAL POST - VERIFIED RESPONSE', print_r($post, true));

                    // Validate payment (Check unique txnid & correct price)
                    $valid_txnid = check_txnid($data['txn_id']);
                    $valid_price = check_price($data['payment_amount'], $data['item_number']);
                    // PAYMENT VALIDATED & VERIFIED!
                    if ($valid_txnid && $valid_price) {

                        $orderid = updatePayments($data);

                        if ($orderid) {
                            // Payment has been made & successfully inserted into the Database
                        } else {
                            // Error inserting into DB
                            // E-mail admin or alert user
                            // mail('user@domain.com', 'PAYPAL POST - INSERT INTO DB WENT WRONG', print_r($data, true));
                        }
                    } else {
                        // Payment made but data has been changed
                        // E-mail admin or alert user
                    }

                } else if (strcmp ($res, "INVALID") == 0) {

                    // PAYMENT INVALID & INVESTIGATE MANUALY!
                    // E-mail admin or alert user

                    // Used for debugging
                    //@mail("user@domain.com", "PAYPAL DEBUGGING", "Invalid Response<br />data = <pre>".print_r($post, true)."</pre>");
                }
            }
            fclose ($fp);
        }
    }

}
?>