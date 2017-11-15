<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECharts">
    <meta name="author" content="kener.linfeng@gmail.com">
    <title>ECharts · Example</title>
    <link href="../asset/css/echartsHome.css" rel="stylesheet">
    <script src="./www/js/echarts.js"></script>
    <script src="../asset/js/codemirror.js"></script>
    <script src="../asset/js/javascript.js"></script>
<style>
.fivdiv2{ 
	width:100%; 
	height:200px; 
	float:top; 
	margin:0px; 
	border:0px #000 solid; 
	background:#04564A
}
</style>
</head>

<body>  
<div id="main" class="fivdiv2">
<textarea id="code" name="code">
	 var Ut=new Array(0,0.036,0.072,0.108,0.144,0.18,0.216,0.252,0.288,0.324,0.36,0.396,0.432,0.468,0.504,0.54,0.576,0.612,0.648,0.684,0.72,0.756,0.792,0.85);
     var Ut2=new Array(0,0.05,0.06,0.061,0.0638,0.0679,0.075,0.0851,0.0982,0.1143,0.1334,0.1555,0.1806,0.2087,0.2398,0.2739,0.311,0.3511,0.3942,0.4403,0.4894,0.5415,0.5966,0.7);
     var Ut3=new Array(0,0.18,0.2545,0.3204,0.3827,0.4414,0.4965,0.548,0.5959,0.6402,0.6809,0.718,0.7515,0.7814,0.8077,0.8304,0.8495,0.865,0.8769,0.8852,0.8899,0.891,0.8885,0.9);
var ttimee=0;
 option = {
    backgroundColor: '#FFFFFF',
    tooltip : { 
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: false},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    series : [
        {
            name:'总体输出功率标幺值',
            type:'gauge',
			 center : ['50%', '60%'],    // 默认全局居中
			   radius : '95%',
            min:0,
            max:1,
            splitNumber:5,
            startAngle:225,
            endAngle:-45,
          
            axisLine: {            // 坐标轴线
                lineStyle: {       // 属性lineStyle控制线条样式
                    color: [[0.2, '#2EC7C9'],[0.8, '#5AB1EF'],[1, '#ff4500']],
                    width: 6,
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            axisLabel: {            // 坐标轴小标记
                textStyle: {       // 属性lineStyle控制线条样式
                    fontWeight: 'bolder',
                    color: 'auto',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            axisTick: {            // 坐标轴小标记
                length :12,        // 属性length控制线长
                lineStyle: {       // 属性lineStyle控制线条样式
                    color: 'auto',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            splitLine: {           // 分隔线
                length :20,         // 属性length控制线长
                lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                    width:2,
                    color:  'auto',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            pointer: {           // 分隔线
                width:2,
                shadowColor : '#fff', //默认透明
                shadowBlur: 10
            },
            title : {
                 offsetCenter: ['0%', '-110%'],    
                 textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                 //   fontWeight: 'bolder',
                    fontSize: 18,
                   // fontStyle: 'italic',
                    color: '#04564A',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            detail : {

                offsetCenter: [0, '50%'],       // x, y，单位px
                textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
               //     fontWeight: 'bolder',
                    fontSize: 25,
                    color: 'auto'
                }
            },
            data:[{value: 4, name: '总体输出功率标幺值'}]
        },
		
		
        {
            name:'风电输出功率标幺值',
            type:'gauge',
            center : ['17%', '65%'],    // 默认全局居中
            radius : '80%',
            min:0,
            max:1,
	      //  startAngle:250,
         //   endAngle:60,
            splitNumber:5,
            axisLine: {            // 坐标轴线
                lineStyle: {       // 属性lineStyle控制线条样式
                  color: [[0.2, '#2EC7C9'],[0.8, '#5AB1EF'],[1, '#ff4500']],
                    width: 5,
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            axisLabel: {            // 坐标轴小标记
                textStyle: {       // 属性lineStyle控制线条样式
                    fontWeight: 'bolder',
                    color: 'auto',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            axisTick: {            // 坐标轴小标记
                length :12,        // 属性length控制线长
                lineStyle: {       // 属性lineStyle控制线条样式
                    color: 'auto',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            splitLine: {           // 分隔线
                length :20,         // 属性length控制线长
                lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                    width:1,
                    color: 'auto',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            pointer: {
                width:1,
                shadowColor : '#fff', //默认透明
                shadowBlur: 10
            },
            title : {
                offsetCenter: ['0%', '-115%'],       // x, y，单位px
                textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                 fontSize: 18,
                   color: '#04564A',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            detail : {
           //   show: true,
             offsetCenter: ['0%', '40%'],       // x, y，单位px
				textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
             //       fontWeight: 'bolder',
                    fontSize: 10,
                    color: 'auto'
                }
            },
            data:[{value: 4, name: '风电输出功率标幺值'}]
        },
		
	{
            name:'水电输出功率标幺值',
            type:'gauge',
            center : ['83%', '65%'],    // 默认全局居中
            radius : '80%',
            min: 0,
            max:1,
         //   startAngle:120,
         //   endAngle:-70,
           splitNumber:5,
            axisLine: {            // 坐标轴线
                lineStyle: {       // 属性lineStyle控制线条样式
                  color: [[0.2, '#2EC7C9'],[0.8, '#5AB1EF'],[1, '#ff4500']],
                    width: 5,
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            axisLabel: {            // 坐标轴小标记
                textStyle: {       // 属性lineStyle控制线条样式
                    fontWeight: 'bolder',
                    color: 'auto',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            axisTick: {            // 坐标轴小标记
                length :12,        // 属性length控制线长
                lineStyle: {       // 属性lineStyle控制线条样式
                    color: 'auto',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            splitLine: {           // 分隔线
                length :20,         // 属性length控制线长
                lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                    width:1,
                    color: 'auto',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            pointer: {
                width:1,
              //  length:'10',
                shadowColor : '#fff', //默认透明
                shadowBlur: 0
            },
            title : {
                offsetCenter: ['0%', '-115%'],       // x, y，单位px
                textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                 fontSize: 18,
                   color: '#04564A',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 10
                }
            },
            detail : {
           //   show: true,
             offsetCenter: ['0%', '40%'],       // x, y，单位px
				textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
             //       fontWeight: 'bolder',
                    fontSize: 10,
                    color: 'auto'
                }
            },
            data:[{value:4, name: '水电输出功率标幺值'}]
        },	
    ]
};



clearInterval(timeTicket);
timeTicket = setInterval(function (){
    option.series[0].data[0].value = Ut[ttimee].toFixed(3) - 0;
    option.series[1].data[0].value = Ut2[ttimee].toFixed(3) - 0;
    option.series[2].data[0].value = Ut3[ttimee].toFixed(3) - 0;
    ttimee=ttimee+1;
    if(ttimee==20) ttimee=1; 
    myChart.setOption(option,true);
},1000)
 </textarea> </div>
 <select id="theme-select" hidden="true"></select>
 <span id='wrong-message' style=""></span>
 <script src="../asset/js/jquery.min.js"></script>
 <script type="text/javascript">var timeTicket;</script>
 <script src="../asset/js/echartsExample.js"></script>
</body>
</html>
