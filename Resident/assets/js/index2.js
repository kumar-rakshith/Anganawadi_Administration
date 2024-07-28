$(function(e) {
	'use strict'
	/*-----MorriesChart-----*/
	new Morris.Line({
		element: 'morrisBar2',
		symbolSize: 18,
		data: [{
			x: '2010 Q4',
			y: 0,
			z: 5
		}, {
			x: '2011 Q1',
			y: 4,
			z: 7
		}, {
			x: '2011 Q2',
			y: 6,
			z: 2
		}, {
			x: '2011 Q3',
			y: 8,
			z: 6
		}, {
			x: '2011 Q4',
			y: 4,
			z: 8
		}, {
			x: '2012 Q1',
			y: 7,
			z: 5
		}],
		xkey: 'x',
		ykeys: ['y', 'z'],
		lineColors: ['#32cafe', '#ff685c '],
		labels: ['Y', 'Z']
	}).on('click', function(i, row) {
		console.log(i, row);
	});
	
	/*-----DoughutChart-----*/
	var ctx = document.getElementById("doughutChart");
	ctx.height = 257;
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [45, 25, 20, 10],
				backgroundColor: ["rgba(255, 104, 92,0.9)", "rgba(50, 202, 254,0.9)", "rgba(253, 185, 1,0.9)", "rgba(94, 216, 79,0.9)", ],
				hoverBackgroundColor: ["rgba(255, 104, 92,0.9)", "rgba(50, 202, 254,0.9)", "rgba(253, 185, 1,0.9)", "rgba(94, 216, 79,0.9)", ]
			}],
			labels: ["Very Satisfied", "satisfied", "Neutral", "Unsatisfied"]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
		}
	});
	
	/*----AreaChart----*/
	var Area = new Morris.Area({
		element: 'Area-chart',
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
		ykeys: ['item1', 'item2'],
		lineColors: ['#ff685c ', '#32cafe'],
		lineWidth: 2,
		labelcolor: '#aba7a7',
		gridTextSize: 11,
		gridLineColor: '#aba7a7',
		hideHover: 'auto',
		resize: true
	});
	
	/*----PeityBar----*/
	$(".bar").peity("bar", {
		width: '43%',
		height: '43'
	})
});