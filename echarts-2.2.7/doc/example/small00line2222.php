
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

<body style="background-color:#000614;padding:0;margin:0;outline:none;">     
  <div id="main" class="main" style="height: 220px; width:100%">
  <script type="text/javascript">
  var obj = window.dialogArguments;
var axisData = [
    <?php for($i=0;$i<96;$i++){echo $i.','; }?>
];
  </script>
  <?php
  // var_dump($_POST);exit;
  // $link = mysql_connect('localhost','root','');
  $mysqli=new mysqli("localhost","root","","matlab");
  // mysql_select_db("matlab");
  // mysql_query("Set names utf8"); $result=mysql_query("SELECT * FROM yout");
  // mysql_set_charset("UTF8",$link);
  // while($row = mysql_fetch_array($result,MYSQL_BOTH)){
    // var_dump($row);
  // }
  $sql = "select * from whc_data";
  $result=$mysqli->query($sql);
  $res = array();
  while($row = mysqli_fetch_array($result)){
    $res[] = $row['wind_data'];
    $res1[] = $row['hydro_data'];
    $res2[] = $row['combined_data'];
  }

  // var_dump($res);
 $wind =  implode(',', $res);
 $hydro =  implode(',', $res1);
 $combined =  implode(',', $res2);
// var_dump($str);
?>
      <textarea id="code" name="code">


        option = {
            title : {
                 text: '风电、水电输出功率曲线图',
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
                data:['风电','水电','总输出'],
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
                     data : axisData
                
                }
            ],
            yAxis : [
                {
                    type : 'value',
                    axisLabel : {
                        formatter: '{value} '
                    },
              scale: true,
              min:-0.5,
              max:1.5,
                }
            ],
            series : [
                {
                    name:'风电',
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
                    name:'水电',
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
                    name:'总输出',
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

        option2 = {
            title : {
                 text: '风电、水电输出功率曲线图',
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
                data:['风电','水电','总输出'],
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
                     data : axisData
                
                }
            ],
            yAxis : [
                {
                    type : 'value',
                    axisLabel : {
                        formatter: '{value} '
                    },
              scale: true,
              min:-0.5,
              max:1.5,
                }
            ],
            series : [
                {
                    name:'风电',
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
                    name:'水电',
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
                    name:'总输出',
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
        myChart2 = echarts.init(document.getElementById('main2'));
        myChart2.setOption(option2);

        option3 = {
            tooltip : {
                trigger: 'axis',
                showDelay: 0             // 显示延迟，添加显示延迟可以避免频繁切换，单位ms
            },
            legend: {
                y : -30,
                data:['上证指数','成交金额(万)','虚拟数据']
            },
            toolbox: {
                y : -30,
                show : true,
                feature : {
                    mark : {show: true},
                    dataZoom : {show: true},
                    dataView : {show: true, readOnly: false},
                    magicType : {show: true, type: ['line', 'bar']},
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            dataZoom : {
                y:200,
                show : true,
                realtime: true,
                start : 50,
                end : 100
            },
            grid: {
                x: 80,
                y:5,
                x2:20,
                y2:30
            },
            xAxis : [
                {
                    type : 'category',
                    position:'bottom',
                    boundaryGap : true,
                    axisTick: {onGap:false},
                    splitLine: {show:false},
                    data : axisData
                }
            ],
            yAxis : [
                {
                    type : 'value',
                    scale:true,
                    splitNumber:3,
                    boundaryGap: [0.05, 0.05],
                    axisLabel: {
                        formatter: function (v) {
                            return Math.round(v/10000) + ' 万'
                        }
                    },
                    splitArea : {show : true}
                }
            ],
            series : [
                {
                    name:'虚拟数据',
                    type:'bar',
                    symbol: 'none',
                    data:[
                        560434, 226738, 696370, 249697, 248563, 
                        620504, 555496, 525337, 270968, 458354, 
                        933507, 896523, 365702, 633095, 722230, 
                        662783, 875798, 776423, 105979, 882629, 
                        598278, 231253, 430465, 672208, 253648, 
                        608589, 884386, 739994, 263709, 776889, 
                        692859, 105780, 848675, 755207, 397426, 
                        478607, 859532, 854862, 983288, 857084, 
                        759358, 733589, 669975, 775965, 688035, 
                        736666, 733504, 709025, 623270, 569688, 
                        586275, 669558, 599865, 688825, 953830,
                        822450, 822755, 789772, 844832, 652558, 
                        598776, 783570, 862560, 794092, 839084, 
                        965298, 828048, 799480, 756647, 665826, 
                        102257, 248870, 288435, 302528, 529046, 
                        105205, 920253, 999206, 203525, 435588, 
                        103546, 703990, 964868, 923778, 742688,
                        752658, 805835, 797452
                    ],
                    markLine : {
                        symbol : 'none',
                        itemStyle : {
                            normal : {
                                color:'#1e90ff',
                                label : {
                                    show:false
                                }
                            }
                        },
                        data : [
                            {type : 'average', name: '平均值'}
                        ]
                    }
                }
            ]
        };
        myChart3 = echarts.init(document.getElementById('main3'));
        myChart3.setOption(option3);

        myChart.connect([myChart2, myChart3]);
        myChart2.connect([myChart, myChart3]);
        myChart3.connect([myChart, myChart2]);

        setTimeout(function (){
            window.onresize = function () {
                myChart.resize();
                myChart2.resize();
                myChart3.resize();
            }
        },200)
    </textarea>
 </div>        
<select id="theme-select" hidden="true"></select>
<span id='wrong-message' style="color:red"></span> 
    <script src="../asset/js/jquery.min.js"></script>
    <script type="text/javascript">var timeTicket;</script>
    <script src="../asset/js/echartsExample.js"></script>
</body>
</html>
