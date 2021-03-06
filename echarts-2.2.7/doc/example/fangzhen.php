<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECharts">
    <meta name="author" content="kener.linfeng@gmail.com">
    <title>ECharts · Example</title>
    <script src="./www/js/echarts.js"></script>
    <script src="../asset/js/codemirror.js"></script>
    <script src="../asset/js/javascript.js"></script>
    <style type="text/css">
        .CodeMirror {
            height: 220px;
        }
    </style>
</head>

<body>
  <div id="main" class="main" style="height: 220px; width:100%">
  <textarea id="code" name="code">
option = {
    title : {
         text: '电网稳定曲线',
        x:'center',
		y:'top',
		
		textStyle:{
		fontSize:18,
		color:'#04564A'

		},
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['电源侧','电网整体安全指标','负荷侧'],
		x:'40px',
       
		y:'200px',
        
    },
    
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        },
        orient: 'vertical',
		x:'0px',
		y:'center',
    },
    calculable : true,
    grid: {
        x: 40,
        x2: 10,
        y: 30,
        y2: 45
        
    },
    
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
			show : true,
             data : ['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23']
        
        }
    ],
    yAxis : [
        {
            type : 'value',
            axisLabel : {
                formatter: '{value} '
            },
			scale: true,
			min:0,
			max:1,
        }
    ],
    series : [
        {
            name:'电源侧',
            type:'line',
            data:[0.00340733981699000],
            markPoint : {
               
                data : [
                    //{type : 'max', name: '最大值'},
                    //{type : 'min', name: '最小值'}
                ]
            },
            markLine : {
				show :  false,
                data : [
                    //{type : 'average', name: '平均值'}
                ]
            },
            
         itemStyle: {	
             normal : {
				 color:  '#00BFFF',  //控制点的颜色

             },
         },
          symbol:'circle',   //控制点的形状
          symbolSize:0.2 ,    //控制点的大小
            
        },
        {
            name:'电网整体安全指标',
            type:'line',
            data:[0.00240734408498519],
            markPoint : {
                data : [
                    //{name : '周最低', value : -2, xAxis: 1, yAxis: -1.5}
                ]
            },
            markLine : {
                data : [
                    //{type : 'average', name : '平均值'}
                ]
            },
         itemStyle: {	
             normal : {
				 color:  '#DC143C',
                 lineStyle:{
                     type:'dotted'
                 },
             },
          },
          symbol:'circle',
          symbolSize:0.2 ,
          
          
        },
		        {
            name:'负荷侧',
            type:'line',
            data:[0.255541102026831],
            markPoint : {
                data : [
                    //{name : '周最低', value : -2, xAxis: 1, yAxis: -1.5}
                ]
            },
            markLine : {
                data : [
                    //{type : 'average', name : '平均值'}
                ]
            },
            
          itemStyle: {	
              normal : {
				 color:  '#7CFC00',
                 lineStyle:{
                     type:'dotted'
                 },
              },
           },
         
          symbol:'circle',
          symbolSize:0.2 ,   
         
            
        }
		
		
    ]
};
ttimee=1;


	 var Index01=new Array(0,0.036,0.072,0.108,0.144,0.18,0.216,0.252,0.288,0.324,0.36,0.396,0.432,0.468,0.504,0.54,0.576,0.612,0.648,0.684,0.72,0.756,0.792,0.85);
     var Index02=new Array(0,0.05,0.06,0.061,0.0638,0.0679,0.075,0.0851,0.0982,0.1143,0.1334,0.1555,0.1806,0.2087,0.2398,0.2739,0.311,0.3511,0.3942,0.4403,0.4894,0.5415,0.5966,0.7);
     var Index03=new Array(0,0.18,0.2545,0.3204,0.3827,0.4414,0.4965,0.548,0.5959,0.6402,0.6809,0.718,0.7515,0.7814,0.8077,0.8304,0.8495,0.865,0.8769,0.8852,0.8899,0.891,0.8885,0.9);

clearInterval(timeTicket);

timeTicket = setInterval(function (){

    option.series[1].data.push(Index01[ttimee]);
	option.series[0].data.push(Index02[ttimee]);
	option.series[2].data.push(Index03[ttimee]);
	
	ttimee=ttimee+1;
    myChart.setOption(option,true);	


}, 1000);
 </textarea>
 </div>        
<select id="theme-select" hidden="true"></select>
<span id='wrong-message' style="color:red"></span> 
    <script src="../asset/js/jquery.min.js"></script>
    <script type="text/javascript">var timeTicket;</script>
    <script src="../asset/js/echartsExample.js"></script>
</body>
</html>
