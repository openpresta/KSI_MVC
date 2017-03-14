var chart;
var scaleHp = parseInt(hpTun) + parseInt(hpTun)/5;
var scaleNm = parseInt(nmTun) + parseInt(nmTun)/7;

var $ = jQuery;
setTimeout(function() {
	chart = $.jqplot('dynoDiv',  [ hpOriTab, nmOriTab, hpTunTab, nmTunTab ], {
		animate: true,
		animateReplot: false,
		seriesDefaults: {
			showMarker: false,
		},
		axesDefaults: {
			showTicks: true,
			showTickMarks: false
		},
		grid:{
			borderColor:'transparent',
			background: 'transparent',
			shadow:false,
			drawBorder:false,
			shadowColor:'transparent'
		},
		axes : {
			xaxis: {
				tickInterval: 0,
				drawMajorGridlines: false,
				drawMinorGridlines: false,
				drawMajorTickMarks: false,
				rendererOptions: {
					tickInset: 0,
					minorTicks: 0
				},
				tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
				tickOptions: {
					fontSize: '10pt',
					textColor: "#999"
				},
				pad: 0,
				label: 'tr/min',
				labelOptions: {
					fontFamily: 'Open Sans',
					fontSize: '9pt',
					textColor: "#999"
				}
	
			},
			yaxis: {
				tickOptions: {
					formatString: "%'d",
					fontSize: '10pt',
					textColor: "gray"
				},
				rendererOptions: {
					forceTickAt0: false,
					alignTicks: true,
				},
				min:0,
				max:scaleHp,
				pad: 0,
				label: 'Puissance (CV)',
				labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
				labelOptions: {
					fontFamily: 'Open Sans',
					fontSize: '9pt',
					textColor: "#00bcdf"
				}
			},
			y2axis: {
				tickOptions: {
					formatString: "%'d",
					fontSize: '10pt',
					textColor: "gray"
				},
				rendererOptions: {
					// align the ticks on the y2 axis with the y axis.
					alignTicks: true,
					forceTickAt0: false
				},
				min:0,
				max:scaleNm,
				pad: 0,
				label: 'Couple (Nm)',
				labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
				labelOptions: {
					fontFamily: 'Open Sans',
					fontSize: '9pt',
					textColor: "#00bcdf"
				}
			}
		},
		series: [
			{
				color: "gray",
				yaxis: 'yaxis',
				rendererOptions: {
					smooth: true,
				}
			},
			{
				color:'gray',
				yaxis: 'y2axis',
				rendererOptions: {
					smooth: true
				}
			},
			{
				color: "#00bcdf",
				yaxis: 'yaxis',
				rendererOptions: {
					smooth: true
				}
			},
			{
				color:"#00bcdf",
				yaxis: 'y2axis',
				rendererOptions: {
					smooth: true
				}
			}
		]
	});
}, 800);
