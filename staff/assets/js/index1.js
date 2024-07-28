$(function(e) {
	'use strict'
	/*-----sparkline-----*/
	$(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
		type: 'line',
		height: '40',
		width: '100',
		lineColor: '#ff685c',
		fillColor: '#ffffff',
		lineWidth: 3,
		spotColor: '#fdb901',
		minSpotColor: '#fdb901'
	});
	/*-----Updating charts-----*/
	$("span.graph").peity("pie")
	var updatingChart = $(".updating-chart1").peity("line", {
		width: "100%",
		height: 140
	})
	setInterval(function() {
		var random = Math.round(Math.random() * 20)
		var values = updatingChart.text().split(",")
		values.shift()
		values.push(random)
		updatingChart.text(values.join(",")).change()
	}, 2500)
	/*-----LineChart echart2-----*/
	var chartdata5 = [{
		name: 'data',
		type: 'line',
		smooth: true,
		data: [20, 20, 36, 18, 15, 20, 25, 20],
		symbolSize: 10,
		lineStyle: {
			normal: {
				width: 4,
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#32cafe '
				}, {
					offset: 1,
					color: '#3582ec'
				}])
			}
		},
	}];
	var option8 = {
		grid: {
			top: '6',
			right: '0',
			bottom: '17',
			left: '25',
		},
		xAxis: {
			data: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
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
		yAxis: {
			splitLine: {
				lineStyle: {
					color: 'none'
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
		series: chartdata5,
		color: ['#32cafe']
	};
	var chart9 = document.getElementById('echart9');
	var lineChart2 = echarts.init(chart9);
	lineChart2.setOption(option8);
	/*-----Barchart-----*/
	var chartdata = [{
		name: 'Total Budget',
		type: 'bar',
		data: [10, 15, 9, 18, 10, 15, 7, 14],
		symbolSize: 10,
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
		name: 'Total Amount',
		type: 'bar',
		data: [10, 14, 10, 15, 9, 25, 15, 18],
		symbolSize: 10,
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
	}];
	var chart = document.getElementById('echart');
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
		color: ['#ff685c', '#32cafe']
	};
	barChart.setOption(option);
	/*-----AreaChart Echart-----*/
	var ctx = document.getElementById("widgetChart1");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
			type: 'line',
			datasets: [{
				data: [24, 30, 20, 28, 39, 22, 40],
				label: '',
				backgroundColor: 'rgba(255, 105, 92,.1)',
				borderColor: '#ff695c',
			}, ]
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
});
/*-----Flotchart-----*/
$(function(e) {
	var d1 = [];
	for (var i = 0; i < 20; ++i) {
		d1.push([i, Math.sin(i)]);
	}
	var data = [{
		data: d1,
		label: "Budget",
		color: "#ff695c"
	}];
	var markings = [{
		color: "transparent",
		yaxis: {
			from: 1
		}
	}, {
		color: "transparent",
		yaxis: {
			to: -1
		}
	}, {
		color: "transparent",
		lineWidth: 1,
		xaxis: {
			from: 2,
			to: 2
		}
	}, {
		color: "#fff",
		lineWidth: 1,
		xaxis: {
			from: 8,
			to: 8
		}
	}];
	var placeholder = $("#placeholder03");
	var plot = $.plot(placeholder, data, {
		bars: {
			show: true,
			barWidth: 0.5,
			fill: 0.9
		},
		xaxis: {
			ticks: [],
			autoscaleMargin: 0.02
		},
		yaxis: {
			min: -2,
			max: 2
		},
		grid: {
			markings: markings
		}
	});
	var o = plot.pointOffset({
		x: 2,
		y: -1.2
	});
	// Append it to the placeholder that Flot already uses for positioning
	placeholder.append("<div style='position:absolute;left:" + (o.left + 4) + "px;top:" + o.top + "px;color:rgba(255,255,255,0.5);font-size:smaller'>Warming up</div>");
	o = plot.pointOffset({
		x: 8,
		y: -1.2
	});
	placeholder.append("<div style='position:absolute;left:" + (o.left + 4) + "px;top:" + o.top + "px;color:rgba(255,255,255,0.5);font-size:smaller'>Actual measurements</div>");
	// Draw a little arrow on top of the last label to demonstrate canvas
	// drawing
	var ctx = plot.getCanvas().getContext("2d");
	ctx.beginPath();
	o.left += 4;
	ctx.moveTo(o.left, o.top);
	ctx.lineTo(o.left, o.top - 10);
	ctx.lineTo(o.left + 10, o.top - 5);
	ctx.lineTo(o.left, o.top);
	ctx.fillStyle = "#fff";
	ctx.fill();
});