	jQuery(document).ready(function($) {
		$('.my-slider').unslider({
			arrows: false
		});
	});
	
	
	
	var oemHpValues = [[0,0],[1000,23],[2000,78],[3000,129],[4000,174],[5000,219],[6000,270],[7000,300],[8000,0]];
	var oemNmValues  = [[0,0],[1000,175],[2000,300],[3000,346],[4000,346],[5000,361],[6000,380],[7000,342],[8000,0]];
	var stageHpValues  = [[0,0],[1000,27],[2000,94],[3000,155],[4000,209],[5000,263],[6000,324],[7000,360],[8000,0]];
	var stageNmValues  = [[0,0],[1000,221],[2000,379],[3000,437],[4000,437],[5000,456],[6000,480],[7000,432],[8000,0]];
	
	var chart;
	var $ = jQuery;
	chart = $.jqplot('chartdiv',  [ oemHpValues, oemNmValues, stageHpValues, stageNmValues  ], {
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
				max:462,
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
					alignTicks: true,
					forceTickAt0: false
				},
				min:0,
				max:502,
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