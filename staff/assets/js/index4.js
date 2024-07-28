$(function(e) {
	'use strict'
	/*----BarChartEchart----*/
	var echartBar = echarts.init(document.getElementById('index'), {
		color: ['#ff685c', '#32cafe'],
		categoryAxis: {
			axisLine: {
				lineStyle: {
					color: '#888180'
				}
			},
			splitLine: {
				lineStyle: {
					color: ['#eee']
				}
			}
		},
		grid: {
			x: 40,
			y: 20,
			x2: 40,
			y2: 20
		},
		valueAxis: {
			axisLine: {
				lineStyle: {
					color: '#888180'
				}
			},
			splitArea: {
				show: true,
				areaStyle: {
					color: ['rgba(255,255,255,0.1)']
				}
			},
			splitLine: {
				lineStyle: {
					color: ['#eee']
				}
			}
		},
	});
	echartBar.setOption({
		tooltip: {
			trigger: 'axis'
		},
		legend: {
			data: ['New Account', 'Expansion Account']
		},
		toolbox: {
			show: false
		},
		calculable: false,
		xAxis: [{
			type: 'category',
			data: ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		}],
		yAxis: [{
			type: 'value'
		}],
		series: [{
			name: 'View Price',
			type: 'bar',
			data: [30.0, 42.3, 60.2, 70.3, 60.8, 19.8, 27.8, 85.63, 52.63, 14.25, 63.25, 12.32],
			markPoint: {
				data: [{
					type: 'max',
					name: ''
				}, {
					type: 'min',
					name: ''
				}]
			},
			markLine: {
				data: [{
					type: 'average',
					name: ''
				}]
			}
		}, {
			name: ' Purchased Price',
			type: 'bar',
			data: [16.6, 40.9, 50.0, 16.4, 28.7, 80.7, 178.6, 188.2, 48.7, 18.8, 6.0, 2.3],
			markPoint: {
				data: [{
					name: 'Purchased Price',
					value: 182.2,
					xAxis: 7,
					yAxis: 183,
				}, {
					name: 'Purchased Price',
					value: 2.3,
					xAxis: 11,
					yAxis: 3
				}]
			},
			markLine: {
				data: [{
					type: 'average',
					name: ''
				}]
			}
		}]
	});
	/*----MorrisLineChart----*/
	var line = new Morris.Line({
		element: 'line-chart',
		resize: true,
		data: [{
			y: '2011 Q1',
			item1: 2666,
			item2: 2666
		}, {
			y: '2011 Q2',
			item1: 2778,
			item2: 2294
		}, {
			y: '2011 Q3',
			item1: 4912,
			item2: 1969
		}, {
			y: '2011 Q4',
			item1: 3767,
			item2: 13597
		}, {
			y: '2012 Q1',
			item1: 6810,
			item2: 1914
		}, {
			y: '2012 Q2',
			item1: 15670,
			item2: 4293
		}, {
			y: '2012 Q3',
			item1: 4820,
			item2: 3795
		}, {
			y: '2012 Q4',
			item1: 15073,
			item2: 5967
		}, {
			y: '2013 Q1',
			item1: 10687,
			item2: 4460
		}, {
			y: '2013 Q2',
			item1: 8432,
			item2: 5713
		}],
		xkey: 'y',
		ykeys: ['item1', 'item2', 'item3'],
		labels: ['Item 1', 'Item 2', 'Item 3'],
		lineColors: ['#ff685c', '#32cafe'],
		pointRadius: 0,
		hideHover: 'auto'
	});
	/*---- morrisBarChart----*/
	var bar = new Morris.Bar({
		element: 'bar-chart',
		resize: true,
		data: [{
			y: 'Jan',
			a: 50,
			b: 90
		}, {
			y: 'Feb',
			a: 95,
			b: 65
		}, {
			y: 'Mar',
			a: 50,
			b: 40
		}, {
			y: 'Apr',
			a: 75,
			b: 65
		}, {
			y: 'May',
			a: 50,
			b: 40
		}, {
			y: 'Jun',
			a: 75,
			b: 65
		}, {
			y: 'Jul',
			a: 100,
			b: 90
		}],
		barColors: ['#ff685c', '#32cafe'],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Front end projects', 'Backend projects'],
		hideHover: 'auto'
	});
	/*---- MorrisDonutChart----*/
	new Morris.Donut({
		element: 'morrisBar8',
		data: [{
			value: 50,
			label: 'data1'
		}, {
			value: 25,
			label: 'data2'
		}, {
			value: 15,
			label: 'data3'
		}],
		colors: ['#ff685c ', '#32cafe', '#fdb901'],
		formatter: function(x) {
			return x + "%"
		}
	}).on('click', function(i, row) {
		console.log(i, row);
	});
	var chartdata = [{
		name: 'sales',
		type: 'bar',
		data: [10, 15, 9, 18, 10, 15]
	}, {
		name: 'profit',
		type: 'line',
		smooth: true,
		data: [8, 5, 25, 10, 10]
	}, {
		name: 'growth',
		type: 'bar',
		data: [10, 14, 10, 15, 9, 25]
	}];
});