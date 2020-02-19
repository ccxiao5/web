/**
 * Grid theme for Highcharts JS
 * @author Torstein Hønsi
 */

Highcharts.theme = {
	colors: ['#FF6347', '#008B8B','rgb(145,83,157)', 'rgb(238,133,147)', 'rgb(250,219,217)','rgb(198,191,223)','rgb(234,85,41)','rgb(30,40,126)',
	'rgb(199,225,245)','rgb(82,134,197)','rgb(221,209,231)','rgb(98,94,168)','rgb(235,110,149)','rgb(234,85,41)'],
	chart: {
		backgroundColor: {
			linearGradient: [0, 0, 500, 500],
			stops: [
				[0, 'rgb(255, 255, 255)'],
				[1, 'rgb(240, 240, 255)']
			]
		}
,
		borderWidth: 2,
		plotBackgroundColor: 'rgba(255, 255, 255, .9)',
		plotShadow: true,
		plotBorderWidth: 1
	},
	title: {
		style: { 
			color: '#000',
			font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
		}
	},
	subtitle: {
		style: { 
			color: '#666666',
			font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
		}
	},
	xAxis: {
		gridLineWidth: 1,
		lineColor: '#000',
		tickColor: '#000',
		labels: {
			style: {
				color: '#000',
				font: '11px Trebuchet MS, Verdana, sans-serif'
			}
		},
		title: {
			style: {
				color: '#333',
				fontWeight: 'bold',
				fontSize: '12px',
				fontFamily: 'Trebuchet MS, Verdana, sans-serif'

			}				
		}
	},
	yAxis: {
		minorTickInterval: 'auto',
		lineColor: '#000',
		lineWidth: 1,
		tickWidth: 1,
		tickColor: '#000',
		labels: {
			style: {
				color: '#000',
				font: '11px Trebuchet MS, Verdana, sans-serif'
			}
		},
		title: {
			style: {
				color: '#333',
				fontWeight: 'bold',
				fontSize: '12px',
				fontFamily: 'Trebuchet MS, Verdana, sans-serif'
			}				
		}
	},
	legend: {
		itemStyle: {			
			font: '9pt Trebuchet MS, Verdana, sans-serif',
			color: 'black'

		},
		itemHoverStyle: {
			color: '#039'
		},
		itemHiddenStyle: {
			color: 'gray'
		}
	},
	labels: {
		style: {
			color: '#99b'
		}
	}
};

// Apply the theme
var highchartsOptions = Highcharts.setOptions(Highcharts.theme);
	
