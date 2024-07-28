$(function(e){
  'use strict'
    /*-----MorriesBarChart-----*/
    var ctx = document.getElementById("lineChart5");
	  ctx.height = 300;
	    var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['jan', 'feb', 'Mar', 'Apr', 'May', 'Jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'],
				datasets: [{
					label: "Price",
					borderColor: "#ff685c",
					borderWidth: "4",
					backgroundColor: "rgba(255, 104, 92)",
					pointHighlightStroke: "rgba(255, 104, 92,0.5)",
					data: [18, 23, 21, 24, 26, 20, 25, 24, 21, 27, 24, 28,30]
				}, {
					label: "MarketCap",
					borderColor: "#32cafe",
					borderWidth: "4",
					backgroundColor: "rgba(	50, 202, 254,0.9)",
					pointHighlightStroke: "rgba(50, 202, 254,0.5)",
					data: [21, 25, 18, 27, 25, 23, 30, 25, 31, 24, 27, 24,30]
				}]
			},
			options: {
				scales: {
					xAxes: [{
						ticks: {
							fontColor: "#6b6f80",
						 },
						display: true,
						gridLines: {
							color: 'rgba(0,0,0,0.061)'
						}
					}],
					yAxes: [{
						ticks: {
							fontColor: "rgba(0,0,0,0.5)",
						 },
						display: true,
						gridLines: {
							display: false,
						},
						scaleLabel: {
							display: true,
							labelString: 'Price',
							fontColor: '#6b6f80'
						}
					}]
				},
				legend: {
					labels: {
						fontColor: "#6b6f80"
					},
				},
				responsive: true,
				maintainAspectRatio: false,
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				tooltips: {},
				hover: {
					mode: 'nearest',
					intersect: true
				}
			}
		});
	
    /*-----AreaChart1-----*/	
    var ctx = document.getElementById( "AreaChart1" );
	ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            type: 'line',
            datasets: [ {
                data: [65, 59, 84, 84, 51, 55, 40],
                label: 'Market value',
                backgroundColor: 'rgba(255, 104, 92, 0.1)',
                borderColor: 'rgba(255, 104, 92, 0.9)',
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
                titleFontColor: '#6b6f80',
                bodyFontColor: '#6b6f80',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    } );

	/*-----AreaChart2-----*/
    var ctx = document.getElementById( "AreaChart2" );
	 ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            type: 'line',
            datasets: [ {
                data: [1, 18, 9, 17, 34, 22, 11],
                label: 'Market value',
                backgroundColor: 'rgba(50, 202, 254, 0.1)',
                borderColor: 'rgba(50, 202, 254, 0.9)',
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
                titleFontColor: '#6b6f80',
                bodyFontColor: '#6b6f80',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    } );
	
	/*-----AreaChart3-----*/
    var ctx = document.getElementById( "AreaChart3" );
	ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            type: 'line',
            datasets: [ {
                data: [20, 25, 10, 9, 29, 19, 25, 9, 12, 7, 19 ],
                label: 'Market value',
                backgroundColor: 'rgba(253, 185, 1, 0.1)',
                borderColor: 'rgba(253, 185, 1, 0.55)',
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
                titleFontColor: '#6b6f80',
                bodyFontColor: '#6b6f80',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });
	
	/*----ApexCharts----*/
	var options = {
		chart: {
			type: "area",
			height: 300,
			foreColor: "#6b6f80",
			scroller: {
				enabled: false,
				track: {
					height: 7,
					background: '#838ab6'
				},
				thumb: {
					height: 10,
					background: '#838ab6'
				},
				scrollButtons: {
					enabled: false,
					size: 9,
					borderWidth: 1,
					borderColor: '#838ab6',
					fillColor: '#838ab6'
				},
				padding: {
					left: 30,
					right: 20
				}
			},
			stacked: true,
			dropShadow: {
				enabled: false,
				enabledSeries: [0],
				top: -2,
				left: 2,
				blur: 5,
				opacity: 0.06
			}
		},
		colors: ['#ff685c' ],
		stroke: {
			curve: "smooth",
			width: 2
		},
		dataLabels: {
			enabled: false
		},
		series: [{
			name: 'Maximum',
			data: generateDayWiseTimeSeries(0, 18)
		}],
		markers: {
			size: 0,
			strokeColor: "#6b6f80",
			strokeWidth: 3,
			strokeOpacity: 1,
			fillOpacity: 1,
			hover: {
				size: 6
			}
		},
		xaxis: {
			type: "datetime",
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false
			}
		},
		yaxis: {
			tickAmount: 4,
			min: 0,
			labels: {
				offsetX: 24,
				offsetY: -5
			},
			tooltip: {
				enabled: false
			}
		},
		grid: {
			padding: {
				left: -5,
				right: 5
			}
		},
		tooltip: {
			x: {
				format: "dd MMM yyyy"
			},
		},
		legend: {
			position: 'top',
			horizontalAlign: 'left'
		},
		fill: {
			type: "solid",
			fillOpacity: 0.2
		}
	};
	
	
	var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);
	chart.render();

	function generateDayWiseTimeSeries(s, count) {
		var values = [
			[
				4, 3, 10, 9, 29, 19, 25, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5
			]
			
		];
		var i = 0;
		var series = [];
		var x = new Date("20 Oct 2018").getTime();
		while (i < count) {
			series.push([x, values[s][i]]);
			x += 86400000;
			i++;
		}
		return series;
	}
	
});


 

  
	


