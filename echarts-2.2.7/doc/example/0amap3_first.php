<?php
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
  <div id="main" class="main" style="height: 443px;">
  <textarea id="code" name="code">
 </textarea>
 </div>        
      <script src="../asset/js/jquery.min.js"></script>
<script src="www2/js/echarts-all.js">
        var myChart = echarts.init(document.getElementById('main'));
  
</script>
  <script type="text/javascript">
   var Index01=new Array(<?php echo $wind;?>);
     var Index02=new Array(<?php echo $hydro?>);
     var Index03=new Array(<?php echo $combined?>);
 
option = {
    backgroundColor: '#1b1b1b',
    color: ['gold','aqua','lime'],
    title : {
		show:true,
		text: '风水协同运行调度实时工况',
        x:'center',
        textStyle : {
            color: '#fff'
        }
    },
    bmap: {
            center: [116.307698, 40.056975],
                zoom: 5,

                roam: true, // 允许缩放

                mapStyle: {  // 百度地图自定义样式
                    styleJson: [
                        // 陆地
                        {
                        "featureType": "land",
                          "elementType": "all",
                          "stylers": {
                              "color": "#073763"
                          }
                      },
                      // 水系
                      {
                          "featureType": "water",
                          "elementType": "all",
                          "stylers": {
                              "color": "#073763",
                              "lightness": -54
                          }
                      },
                      // 国道与高速
                      {
                          "featureType": "highway",
                          "elementType": "all",
                          "stylers": {
                              "color": "#45818e"
                          }
                      },
                      // 边界线
                      {
                          "featureType": "boundary",
                          "elementType": "all",
                          "stylers": {
                              "color": "#ffffff",
                              "lightness": -62,
                              "visibility": "on"
                          }
                      },
                      // 行政标注
                      {
                          "featureType": "label",
                          "elementType": "labels.text.fill",
                          "stylers": {
                              "color": "#ffffff",
                              "visibility": "on"
                          }
                      },
                      {
                          "featureType": "label",
                          "elementType": "labels.text.stroke",
                          "stylers": {
                              "color": "#444444",
                              "visibility": "on"
                          }
                      }
                    ]
                }
        },
    tooltip : {
        trigger: 'item',
        formatter: '{b}'
    },
    legend: {
        orient: 'vertical',
        x:'left',
        data:[],
        selectedMode: 'single',
        textStyle : {
            color: '#fff'
        }
    },
    toolbox: {
        show : true,
        orient : 'vertical',
        x: 'right',
        y: 'center',
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    dataRange: {
        min : 0,
        max : 500,
        calculable : true,
        color: ['#ff3333', 'orange', 'yellow','lime','aqua'],
        textStyle:{
            color:'#fff'
        }
    },
    series : [
        {
            name: '全国',
            type: 'map',
            roam: true,
            hoverable: false,
            mapType: 'china',
                linkSymbol:'arrow',
selectedMode:'single',
            itemStyle:{
                normal:{
                    label:{show:true},//显示地图上的地名
                    borderColor:'rgba(100,149,237,1)',
                    borderWidth:0.5,
					
                    areaStyle:{
                        color: '#1b1b1b'
                    }
                }
            },
            data:[],
            markLine : {
                smooth:true,
                symbol: ['none', 'circle'],  
                symbolSize : 1,
                itemStyle : {
                    normal: {
					              label:{show: false},
                        color:'#fff',
                        borderWidth:1,
                        borderColor:'rgba(30,144,255,0.5)'
                    }
                },
                data :[],
            },
             markPoint : {
                symbol:'droplet',
                symbolSize: 10,       // 标注大小，半宽（半径）参数，当图形为方向或菱形则总宽度为symbolSize * 2
                effect : {
                    // show: true,
                    // shadowBlur : 0
                },
                itemStyle: {
                    normal: {
                        borderColor: '#87cefa',
                        borderWidth: 1,            // 标注边线线宽，单位px，默认为1
                        label: {
                            show: false
                        }
                    },
                    emphasis: {
                        borderColor: '#1e90ff',
                        borderWidth: 5,
                        label: {
                            show: false
                        }
                    }
                },
                 data : [
                    {name: "武汉", value: 9},
                    {name: "吉林", value: 12},
                    {name: "盐城", value: 15},
                    ]
              },
            geoCoord: {
                '哈尔滨': [127,48],
                '吉林': [125,44],
                '沈阳': [124,41],	
                '北京': [117,40],	
                '赤峰': [115,45],	
                '包头': [113,42],
                '乌鲁木齐': [85,45], 
                '酒泉': [97,40] ,
                '拉萨': [90,30] ,
                '玉树': [91,34] ,
                '西宁': [97,36] ,
                '宁夏': [106,37] ,
                '兰州': [104,35] ,
                '甘孜': [99,31] ,
                '丽江': [99,28] ,
                '普洱': [99,24] ,
                '昆明': [102,25] ,
                '成都': [103,30] ,
                '贵阳': [107,27] ,
                '重庆': [108,30] ,
                '西安': [108,33] ,
                '临汾': [112,34] ,
                '太原': [112,38] ,
                '呼和浩特': [108,41], 
                '石家庄': [115,38] ,
                '郑州': [115,33] ,
                '合肥': [117,32],
                '上海': [121.5,31],
                '盐城': [120,34],
                '台州': [121,29] ,
                '福州': [119,26] ,
                '广州': [116,24] ,
                '南宁': [108,23] , 
                '百色': [102,23] ,
                '济南': [119,36] ,
                '南昌': [116,28] ,
                '赣州': [115,26] ,
                '武汉': [113,31],
                '长沙': [111,28],
              
            }
        },
        {
            name: '全国',
            type: 'map',
            roam: true,
            hoverable: false,
            mapType: 'china',
                linkSymbol:'arrow',

            itemStyle:{
                normal:{
                    label:{show:true},//显示地图上的地名
                    borderColor:'rgba(100,149,237,1)',
                    borderWidth:0.5,
          
                    areaStyle:{
                        color: '#1b1b1b'
                    }
                }
            },
            data:[],
            markLine : {
                smooth:true,
                symbol: ['none', 'circle'],  
                symbolSize : 1,
                itemStyle : {
                    normal: {
                        label:{show: true},
                        color:'#fff',
                        borderWidth:1,
                        borderColor:'rgba(30,144,255,0.5)'
                    }
                },
                data :[],
            },
             markPoint : {
                symbol:'star',
                symbolSize: 10,       // 标注大小，半宽（半径）参数，当图形为方向或菱形则总宽度为symbolSize * 2
                effect : {
                    // show: true,
                    // shadowBlur : 0
                },
                itemStyle: {
                    normal: {
                        borderColor: 'red',
                        borderWidth: 1,            // 标注边线线宽，单位px，默认为1
                        label: {
                            show: false
                        }
                    },
                    emphasis: {
                        borderColor: 'blue',
                        borderWidth: 5,
                        label: {
                            show: false
                        }
                    }
                },
                 data : [
                    {name: "北京", value: 9},
                    ]
              },
        },
        {
            name: '',
            type: 'map',
            mapType: 'china',
            data:[],
            roam:true,
            hoverable:false,
                linkSymbol:'arrow',
                linkSymbolSize:[
                    10,
                    15
                ],
			      itemStyle : {
               normal:{
                    borderColor:'rgba(100,149,237,1)',
                    borderWidth:0.5,
                    areaStyle:{
                        color: '#1b1b1b'
                    }
                }

            },
            markLine : {
                symbol:['none','arrow'],
                smooth:true,
                effect : {
                    show: true,
					          loop: true,
                    scaleSize: 1,
                    period: 30,
                    color: '#fff',
                    shadowBlur: 10
                },
				
				
        				bundling:{
        				enable: false,
        				maxTurningAngle: 3,
        				},
        				large:false,
        				precision:-1,
                itemStyle : {
                      normal: {
					              label:{
                          show: true,


                        },//控制标线上的数值显示
                        borderWidth:1,
                        lineStyle: {
                            type: 'solid',
                            shadowBlur: 10
                        }
                    },
                    emphasis:{label:{show: true}}

                },

                data : [
        //             [{name:'哈尔滨'},{name:'吉林'}],
				    //         [{name:'沈阳'},{name:'吉林',smoothness:0}],
        //             [{name:'沈阳'},{name:'北京',smoothness:0}],
				               [{name:'西宁'},{name:'北京',smoothness:0}],
            				   [{name:'武汉'},{name:'西宁',smoothness:0}],
            				   [{name:'武汉'},{name:'北京',smoothness:0}],
          				 //  [{name:'呼和浩特'},{name:'太原',smoothness:0}],
          					// [{name:'太原'},{name:'包头',smoothness:0}],
          					// [{name:'北京'},{name:'济南',smoothness:0}],
               //      [{name:'台州'},{name:'上海',smoothness:0}],
          				 //  [{name:'福州'}, {name:'台州',smoothness:0}],
          				 //  [{name:'盐城'},{name:'上海',smoothness:0}],
          				 //  [{name:'上海'},{name:'合肥',smoothness:0}],
          					// [{name:'武汉'},{name:'合肥',smoothness:0}],			
               //      [{name:'南昌'}, {name:'台州',smoothness:0}],
               //      [{name:'武汉'}, {name:'南昌',smoothness:0}],
               //      [{name:'广州'},{name:'赣州',smoothness:0}],
          				 //  [{name:'武汉'}, {name:'赣州',smoothness:0}],                    
          					// [{name:'百色'}, {name:'南宁',smoothness:0}],
               //      [{name:'郑州'},{name:'济南',smoothness:0}],
          					// [{name:'南宁'}, {name:'赣州',smoothness:0}],
               //      [{name:'武汉'},{name:'郑州',smoothness:0}],
          					// [{name:'长沙'}, {name:'武汉',smoothness:0}],  
     //                [{name:'郑州'},{name:'石家庄',smoothness:0}],
     //                [{name:'临汾'},{name:'石家庄',smoothness:0}],
     //                [{name:'太原'},{name:'临汾',smoothness:0}],
     //                [{name:'宁夏'},{name:'酒泉',smoothness:0}],
     //                [{name:'宁夏'},{name:'太原',smoothness:0}],
     //                [{name:'西安'},{name:'临汾',smoothness:0}],
     //                [{name:'西安'},{name:'重庆',smoothness:0}],
     //                [{name:'重庆'},{name:'长沙',smoothness:0}],
     //                [{name:'贵阳'},{name:'重庆',smoothness:0}],
     //                [{name:'成都'},{name:'贵阳',smoothness:0}],
     //                [{name:'昆明'},{name:'贵阳',smoothness:0}],
     //                [{name:'普洱'},{name:'昆明',smoothness:0}],
     //                [{name:'拉萨'},{name:'甘孜',smoothness:0}],
     //                 [{name:'甘孜'},{name:'丽江',smoothness:0}],
     //                [{name:'临汾'},{name:'西安',smoothness:0}],
     //                [{name:'西安'},{name:'兰州',smoothness:0}],
     //                [{name:'太原'},{name:'临汾',smoothness:0}],
     //                [{name:'甘孜'},{name:'玉树',smoothness:0}],
     //                [{name:'兰州'},{name:'甘孜',smoothness:0}],
     //                [{name:'乌鲁木齐'},{name:'酒泉',smoothness:0}],
     //                 [{name:'西宁'},{name:'乌鲁木齐',smoothness:0}],
     //                 [{name:'玉树'},{name:'西宁',smoothness:0}],
     //                 [{name:'兰州'},{name:'西宁',smoothness:0}],
     //                [{name:'成都'},{name:'丽江',smoothness:0}],
     //                 [{name:'昆明'},{name:'丽江',smoothness:0}],
                    
                    
                    
                  
					
                ]

            },
			
            markPoint : {
                symbol:'image://../asset/img/wind.png',
                symbolSize : function (v){
                    return 10 + v/10
                },
                effect : {
                    // show: true,
                    // shadowBlur : 1
                },
                itemStyle:{
                    normal:{
                        label:{show:false}
                    },
                    emphasis: {
                        label:{position:'top'}
                    }
                },
                // symbolRotate:45,
                data : [
                    {name:'西宁',value:150},
                    {name:'哈尔滨',value:50},
                    {name:'拉萨',value:150},
                    {name:'昆明',value:150},
                    {name:'乌鲁木齐',value:150},
                ]
            }
        },
       
    ]
};
var ecConfig = require('echarts/config');
myChart.on(ecConfig.EVENT.CLICK,eConsole);
        function eConsole(param){
            showModalDialog('http://localhost/web101224S/web101224S/echarts-2.2.7/doc/example/small00line1111.php',param,'dialogWidth:400px;dialogHeight:300px;dialogLeft:200px;dialogTop:150px;center:yes;help:yes;resizable:yes;status:yes;edge:raised;location:no;'); 
        }

var timeTicket;

ttimee=1;
var nameTemp;
clearInterval(timeTicket);
timeTicket = setInterval(function (){
    option.series[2].markLine.data[0][0].value=Math.abs(Index01[ttimee]);
    if(Index01[ttimee]<=0)
    {
        nameTemp=option.series[2].markLine.data[0][0].name;   
        option.series[2].markLine.data[0][0].name=option.series[2].markLine.data[0][1].name;    
        option.series[2].markLine.data[0][1].name=nameTemp
    };
	option.series[2].markLine.data[1][0].value=Math.abs(Index02[ttimee]); 
    if(Index02[ttimee]<=0)
    {
        nameTemp=option.series[2].markLine.data[1][0].name;   
        option.series[2].markLine.data[1][0].name=option.series[2].markLine.data[1][1].name;    
        option.series[2].markLine.data[1][1].name=nameTemp
    };
  option.series[2].markLine.data[2][0].value=Math.abs(Index03[ttimee]); 
    if(Index03[ttimee]<=0)
    {
        nameTemp=option.series[2].markLine.data[2][0].name;   
        option.series[2].markLine.data[2][0].name=option.series[2].markLine.data[2][1].name;    
        option.series[2].markLine.data[2][1].name=nameTemp
    };
	 ttimee=ttimee+1;
    myChart.setOption(option,true);	
        
}, 1000);
</script>
<select id="theme-select" hidden="true"></select>
<span id='wrong-message' style="color:red"></span> 
    <script src="../asset/js/echartsExample.js">
        var ecConfig = require('echarts/config');

    </script>
</body>
</html>
