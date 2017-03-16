var accelOri = [[0,0],[10,0.55],[20,0.95],[30,1.55],[40,2.05],[50,2.45],[60,2.95],[70,3.58],[80,4.05],[90,4.44],[100,5]];
			var accelOpti  = [[0,0],[10,1],[20,1.75],[30,2.75],[40,3.5],[50,4],[60,4.2],[70,4.4],[80,4.6],[90,4.8],[100,5]];
			
			var chart;
			
			setTimeout(function() {
			var $ = jQuery;
			chart = $.jqplot('pedalGraphDiv',  [ accelOri, accelOpti ], {
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
						drawMajorGridlines: true,
						drawMinorGridlines: true,
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
						label: '% d\'accélérateur',
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
							alignTicks: false,
						},
						min:0,
						max:5,
						label: 'Volts',
						labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
						labelOptions: {
							fontFamily: 'Open Sans',
							fontSize: '9pt',
							textColor: "#00bcdf"
						}
					},
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
						color: "#00bcdf",
						yaxis: 'yaxis',
						rendererOptions: {
							smooth: true
						}
					}
				]
			});
			
			
			},1000);
