/*----------------------折线图-----------------------*/
//折线图堆叠
(function(){
	
	var myChart = echarts.init(document.getElementById("Stack"));
	
	option = {
    title: {
        text: '均值分析'
    },
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['均值','最大值','最小值','中位数']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    toolbox: {
        feature: {
            saveAsImage: {}
        }
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: ['1', '2', '3', '4', '5', '6', '9', '10', '11', '12']
    },
    yAxis: {
        type: 'value'
    },
    series: [
        {
            name:'均值',
            type:'line',
            stack: '总量',
            data:[3.875,4.375,4.125,3.5,3.125,3.4375,3.5,3.125,3.6875,2.8125]
        },
        {
            name:'最大值',
            type:'line',
            stack: '总量',
            data:[5,5,5,5,5,5,5,4,5,4]
        },
        {
            name:'最小值',
            type:'line',
            stack: '总量',
            data:[2,1,2,1,2,2,1,2,2,2]
        },
        {
            name:'中位数',
            type:'line',
            stack: '总量',
            data:[4,5,4,4,3,3,4,3,4,3]
        }
    ]
};

myChart.setOption(option);
})();


//堆叠区域图
(function(){
	
	var area = echarts.init(document.getElementById("area"));
	
	option = {
    title: {
        text: '系数分析'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['标准差','变异系数','满分频率']
    },
    toolbox: {
        feature: {
            saveAsImage: {}
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : ['1', '2', '3', '4', '5', '6', '9', '10', '11', '12']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'标准差',
            type:'line',
            stack: '总量',
            areaStyle: {normal: {}},
            data:[0.9574,1.2042,0.9574,1.0954,1.0247,0.8921,1.0954,0.6191,1.0782,0.7500]
        },
        {
            name:'变异系数',
            type:'line',
            stack: '总量',
            areaStyle: {normal: {}},
            data:[0.2471,0.2752,0.2321,0.3130,0.3279,0.2595,0.3130,0.1981,0.2924,0.2667]
        },
        {
            name:'满分频率',
            type:'line',
            stack: '总量',
            areaStyle: {normal: {}},
            data:[0.25,0.6875,0.4375,0.1875,0.125,0.125,0.1875,0,0.3125,0]
        }
    ]
};

area.setOption(option);
})();


//对数轴
(function(){
	
	var step = echarts.init(document.getElementById("step"));
	
	option = {
    title: {
        text: 'ABS离差和'
    },
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['abs']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    toolbox: {
        feature: {
            saveAsImage: {}
        }
    },
    xAxis: {
        type: 'category',
        data: ['140814102','140814104','140814105','140814117','140814122','140814132','140814202','140814203','140814209','140814210','140814216','140814218','140814220','140814222','140814224','140814226']
    },
    yAxis: {
        type: 'value'
    },
    series: [
        {
            name:'Step Start',
            type:'line',
            step: 'start',
            data:[7.6875,5.1875,6.5625,5.4375,9.4375,6.6875,10.9375,7.6875,4.0625,3.1875,5.4375,12.0625,8.5625,3.1875,8.9375,15.5625]
        }
    ]
};

step.setOption(option);
})();


//大数据量面积图
(function(){
	var shuju = echarts.init(document.getElementById("shuju"));
	
	var base = +new Date(1968, 9, 3);
var oneDay = 24 * 3600 * 1000;
var date = [];

var data = [Math.random() * 300];

for (var i = 1; i < 20000; i++) {
    var now = new Date(base += oneDay);
    date.push([now.getFullYear(), now.getMonth() + 1, now.getDate()].join('/'));
    data.push(Math.round((Math.random() - 0.5) * 20 + data[i - 1]));
}

option = {
    tooltip: {
        trigger: 'axis',
        position: function (pt) {
            return [pt[0], '10%'];
        }
    },
    title: {
        left: 'center',
        text: '大数据量面积图',
    },
    legend: {
        top: 'bottom',
        data:['意向']
    },
    toolbox: {
        feature: {
            dataZoom: {
                yAxisIndex: 'none'
            },
            restore: {},
            saveAsImage: {}
        }
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: date
    },
    yAxis: {
        type: 'value',
        boundaryGap: [0, '100%']
    },
    dataZoom: [{
        type: 'inside',
        start: 0,
        end: 10
    }, {
        start: 0,
        end: 10,
        handleIcon: 'M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z',
        handleSize: '80%',
        handleStyle: {
            color: '#fff',
            shadowBlur: 3,
            shadowColor: 'rgba(0, 0, 0, 0.6)',
            shadowOffsetX: 2,
            shadowOffsetY: 2
        }
    }],
    series: [
        {
            name:'模拟数据',
            type:'line',
            smooth:true,
            symbol: 'none',
            sampling: 'average',
            itemStyle: {
                normal: {
                    color: 'rgb(255, 70, 131)'
                }
            },
            areaStyle: {
                normal: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: 'rgb(255, 158, 68)'
                    }, {
                        offset: 1,
                        color: 'rgb(255, 70, 131)'
                    }])
                }
            },
            data: data
        }
    ]
};
	
	shuju.setOption(option);
})();



//动态数据+时间坐标轴
(function(){
	
	var trends = echarts.init(document.getElementById("trends"));
	
	function randomData() {
    now = new Date(+now + oneDay);
    value = value + Math.random() * 21 - 10;
    return {
        name: now.toString(),
        value: [
            [now.getFullYear(), now.getMonth() + 1, now.getDate()].join('/'),
            Math.round(value)
        ]
    }
}

var data = [];
var now = +new Date(1997, 9, 3);
var oneDay = 24 * 3600 * 1000;
var value = Math.random() * 1000;
for (var i = 0; i < 1000; i++) {
    data.push(randomData());
}

option = {
    title: {
        text: '动态数据 + 时间坐标轴'
    },
    tooltip: {
        trigger: 'axis',
        formatter: function (params) {
            params = params[0];
            var date = new Date(params.name);
            return date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear() + ' : ' + params.value[1];
        },
        axisPointer: {
            animation: false
        }
    },
    xAxis: {
        type: 'time',
        splitLine: {
            show: false
        }
    },
    yAxis: {
        type: 'value',
        boundaryGap: [0, '100%'],
        splitLine: {
            show: false
        }
    },
    series: [{
        name: '模拟数据',
        type: 'line',
        showSymbol: false,
        hoverAnimation: false,
        data: data
    }]
};

	timeTicket = setInterval(function () {
	
	    for (var i = 0; i < 5; i++) {
	        data.shift();
	        data.push(randomData());
	    }
	
	    trends.setOption({
	        series: [{
	            data: data
	        }]
	    });
	}, 1000);

trends.setOption(option);
})();




/*----------------------柱状图-----------------------*/
//坐标轴刻度与标签对齐




















////柱状图
//(function(){
//	
//var myChart = echarts.init(document.getElementById("histogram"));
//
//option = {
//	
//	title: {
//		text: "柱状图",
//		x:'center'
//	},
//	
//  color: ['#3398DB'],
//  tooltip : {
//      trigger: 'axis',
//      axisPointer : {            // 坐标轴指示器，坐标轴触发有效
//          type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
//      }
//  },
//  toolbox: {
//      feature: {
//          saveAsImage: {}
//      }
//  },
//  grid: {
//      left: '3%',
//      right: '4%',
//      bottom: '3%',
//      containLabel: true
//  },
//  xAxis : [
//      {
//          type : 'category',
//          data : ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
//          axisTick: {
//              alignWithLabel: true
//          }
//      }
//  ],
//  yAxis : [
//      {
//          type : 'value'
//      }
//  ],
//  series : [
//      {
//          name:'直接访问',
//          type:'bar',
//          barWidth: '60%',
//          data:[10, 52, 200, 334, 390, 330, 220]
//      }
//  ]
//};
//
//myChart.setOption(option);
//})();
//
//
////折线图
//(function(){
//	
//	var line = echarts.init(document.getElementById("line"));
//	
//	option = {
//  title: {
//      text: '堆叠区域图',
//      x:'center'
//  },
//  tooltip : {
//      trigger: 'axis'
//  },
//  
//  toolbox: {
//      feature: {
//          saveAsImage: {}
//      }
//  },
//  grid: {
//      left: '3%',
//      right: '4%',
//      bottom: '3%',
//      containLabel: true
//  },
//  xAxis : [
//      {
//          type : 'category',
//          boundaryGap : false,
//          data : ['周一','周二','周三','周四','周五','周六','周日']
//      }
//  ],
//  yAxis : [
//      {
//          type : 'value'
//      }
//  ],
//  series : [
//      
//      {
//          name:'联盟广告',
//          type:'line',
//          stack: '总量',
//          areaStyle: {normal: {}},
//          data:[220, 182, 191, 234, 290, 330, 310]
//      },
//      {
//          name:'视频广告',
//          type:'line',
//          stack: '总量',
//          areaStyle: {normal: {}},
//          data:[150, 232, 201, 154, 190, 330, 410]
//      },
//      {
//          name:'直接访问',
//          type:'line',
//          stack: '总量',
//          areaStyle: {normal: {}},
//          data:[320, 332, 301, 334, 390, 330, 320]
//      },
//      {
//          name:'搜索引擎',
//          type:'line',
//          stack: '总量',
//          label: {
//              normal: {
//                  show: true,
//                  position: 'top'
//              }
//          },
//          areaStyle: {normal: {}},
//          data:[820, 932, 901, 934, 1290, 1330, 1320]
//      }
//  ]
//};
//
//line.setOption(option);
//})();
//
//
////饼状图
//(function(){
//
//	var pie = echarts.init(document.getElementById("pie"));
//	
//	option = {
//  title : {
//      text: '饼状图',
//      subtext: '纯属虚构',
//      x:'center'
//  },
//  tooltip : {
//      trigger: 'item',
//      formatter: "{a} <br/>{b} : {c} ({d}%)"
//  },
//  toolbox: {
//      feature: {
//          saveAsImage: {}
//      }
//  },
//  legend: {
//      orient: 'vertical',
//      left: 'left',
//      data: ['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
//  },
//  series : [
//      {
//          name: '访问来源',
//          type: 'pie',
//          radius : '55%',
//          center: ['50%', '60%'],
//          data:[
//              {value:335, name:'直接访问'},
//              {value:310, name:'邮件营销'},
//              {value:234, name:'联盟广告'},
//              {value:135, name:'视频广告'},
//              {value:1548, name:'搜索引擎'}
//          ],
//          itemStyle: {
//              emphasis: {
//                  shadowBlur: 10,
//                  shadowOffsetX: 0,
//                  shadowColor: 'rgba(0, 0, 0, 0.5)'
//              }
//          }
//      }
//  ]
//};
//
//
//pie.setOption(option);
//})();
//
//
////环形图
//(function(){
//	
//	var annular = echarts.init(document.getElementById("annular"));
//	
//
//	option = {
//		
//		title: {
//			text: "环状图",
//			x:'center'
//		},
//		
//	    tooltip: {
//	        trigger: 'item',
//	        formatter: "{a} <br/>{b}: {c} ({d}%)"
//	    },
//	    toolbox: {
//	        feature: {
//	            saveAsImage: {}
//	        }
//	    },
//	    legend: {
//	        orient: 'vertical',
//	        x: 'left',
//	        data:['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
//	    },
//	    series: [
//	        {
//	            name:'访问来源',
//	            type:'pie',
//	            radius: ['50%', '70%'],
//	            avoidLabelOverlap: false,
//	            label: {
//	                normal: {
//	                    show: false,
//	                    position: 'center'
//	                },
//	                emphasis: {
//	                    show: true,
//	                    textStyle: {
//	                        fontSize: '30',
//	                        fontWeight: 'bold'
//	                    }
//	                }
//	            },
//	            labelLine: {
//	                normal: {
//	                    show: false
//	                }
//	            },
//	            data:[
//	                {value:335, name:'直接访问'},
//	                {value:310, name:'邮件营销'},
//	                {value:234, name:'联盟广告'},
//	                {value:135, name:'视频广告'},
//	                {value:1548, name:'搜索引擎'}
//	            ]
//	        }
//	    ]
//	};
//
//annular.setOption(option);
//})();
//
