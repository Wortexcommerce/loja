/**
 * Theme: Abstack - Bootstrap 4 Web App kit
 * Author: Coderthemes
 * Module/App: Flot-Chart
 */

! function($) {
	"use strict";

	var FlotChart = function() {
		this.$body = $("body")
		this.$realData = []
	};

	
	
	//creates Donut Chart
	FlotChart.prototype.createDonutGraph = function(selector, labels, datas, colors) {
		var data = [{
			label : labels[0],
			data : datas[0]
		}, {
			label : labels[1],
			data : datas[1]
		}, {
			label : labels[2],
			data : datas[2]
		}, {
			label : labels[3],
			data : datas[3]
		}];
		var options = {
			series : {
				pie : {
					show : true,
					innerRadius : 0.7
				}
			},
			legend : {
				show : true,
				labelFormatter : function(label, series) {
					return '<div style="font-size:14px;">&nbsp;' + label + '</div>'
				},
				labelBoxBorderColor : null,
				margin : 50,
				width : 20
			},
			grid : {
				hoverable : true,
				clickable : true
			},
			colors : colors,
			tooltip : true,
			tooltipOpts : {
				content : "%s, %p.0%"
			}
		};

		$.plot($(selector), data, options);
	},
	

	//initializing various charts and components
	FlotChart.prototype.init = function() {
		

		//Donut pie graph data
		var donutlabels = ["Mobile Phones", "iPhone 7", "iMac", "Macbook"];
		var donutdatas = [35, 20, 10, 20];
		var donutcolors = ['#9368f3','#3c86d8','#3ec396','#4fbde9'];
		this.createDonutGraph("#donut-chart #donut-chart-container", donutlabels, donutdatas, donutcolors);

		

		
		
	},

	//init flotchart
	$.FlotChart = new FlotChart, $.FlotChart.Constructor =
	FlotChart

}(window.jQuery),

//initializing flotchart
function($) {
	"use strict";
	$.FlotChart.init()
}(window.jQuery);