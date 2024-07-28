$(function(e) {
	'use strict'
	/*-----echart2-----*/
	var chartdata = [{
		name: 'Install',
		type: 'bar',
		data: [10, 15, 9, 18, 10, 20],
		itemStyle: {
			normal: {
				barBorderRadius: [0, 0, 0, 0],
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#ff685c '
				}, {
					offset: 1,
					color: '#ff4f7a'
				}])
			}
		},
	}, {
		name: 'Impressions',
		type: 'bar',
		smooth: true,
		data: [8, 5, 25, 10, 10, 15],
		itemStyle: {
			normal: {
				barBorderRadius: [0, 0, 0, 0],
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#32cafe'
				}, {
					offset: 1,
					color: '#3582ec'
				}])
			}
		},
	}, {
		name: 'Clicks',
		type: 'line',
		data: [10, 14, 10, 15, 9, 25],
		itemStyle: {
			normal: {
				barBorderRadius: [0, 0, 0, 0],
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#63d457'
				}, {
					offset: 1,
					color: '#3cbf2d'
				}])
			}
		},
	}];
	var chart = document.getElementById('echart1');
	var barChart = echarts.init(chart);
	var option = {
		grid: {
			top: '6',
			right: '0',
			bottom: '17',
			left: '25',
		},
		xAxis: {
			data: ['2014', '2015', '2016', '2017', '2018'],
			axisLine: {
				lineStyle: {
					color: '#eaeaea'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#000'
			}
		},
		tooltip: {
			show: true,
			showContent: true,
			alwaysShowContent: true,
			triggerOn: 'mousemove',
			trigger: 'axis',
			axisPointer: {
				label: {
					show: false,
				}
			}
		},
		yAxis: {
			splitLine: {
				lineStyle: {
					color: '#eaeaea'
				}
			},
			axisLine: {
				lineStyle: {
					color: '#eaeaea'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#000'
			}
		},
		series: chartdata,
		color: ['#ff685c ', '#fa626b', '#32cafe', ]
	};
	barChart.setOption(option);
	/*-----WidgetChart1 CHARTJS-----*/
	var ctx = document.getElementById("widgetChart1");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
			type: 'line',
			datasets: [{
				label: "Active Users",
				backgroundColor: "#ff695c",
				data: [2, 7, 3, 9, 4, 5, 2, 8, 4, 6, 5, 2, 8, 4, 7, 2, 4, 6, 4, 8, 4]
			}, {
				label: "Contribution",
				backgroundColor: "#32cafe",
				data: [5, 3, 9, 6, 5, 9, 7, 3, 5, 2, 5, 3, 9, 6, 5, 9, 7, 3, 5, 2]
			}]
		},
		options: {
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			responsive: true,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 0,
				intersect: false,
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false,
					}
				}]
			},
			title: {
				display: false,
			},
			elements: {
				line: {
					borderWidth: 2
				},
				point: {
					radius: 0,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	});
	/*-----FlotChart-----*/
	$(function() {
		// We use an inline data source in the example, usually data would
		// be fetched from a server
		var data = [],
			totalPoints = 300;

		function getRandomData() {
			if (data.length > 0) data = data.slice(1);
			// Do a random walk
			while (data.length < totalPoints) {
				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;
				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}
				data.push(y);
			}
			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}
			return res;
		}
		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function() {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});
		var plot = $.plot("#placeholder4", [getRandomData()], {
			series: {
				shadowSize: 0 // Drawing is faster without shadows
			},
			grid: {
				borderColor: "#eef0f2",
			},
			colors: ["#ff685c "],
			yaxis: {
				min: 0,
				max: 100,
				tickLength: 0
			},
			xaxis: {
				tickLength: 0,
				show: false
			}
		});

		function update() {
			plot.setData([getRandomData()]);
			plot.draw();
			setTimeout(update, updateInterval);
		}
		update();
	});
});