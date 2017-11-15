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
function myfunction($v){
    return $v*100000;
}
function add($a,$b){
    return $a+$b;
} 
function radio($array){
  // var_dump($array);exit;
  // var_dump(count($array));exit;
  foreach ($array as $key => &$value) {
    if($key<=28 || $key>=91){
      $value = $value*1.333;
    }
    if($key == 29){
      $value = $value*2.333;
    }
    if((30<=$key&&$key<=42) || (70<=$key&&$key<=82)){
      $value = $value*3.333;
    }
    if($key == 43){
      $value = $value*2.6667;
    }
    if($key == 69){
      $value = $value*2.6667;
    }
    if($key == 83){
      $value = $value*2.6667;
    }
    if($key == 91){
      $value = $value*1.6667;
    }
    if((44<=$key&&$key<=68) || (84<=$key&&$key<=90)){
      $value = $value*2;
    }
  }
  return $array;
} 
// var data = [[0.0000, 1.3333], [28.0000, 1.3333], [30.0000, 3.3333], [42.0000, 3.3333], [44.0000, 2.0000], [68.0000, 2.0000], [70.0000, 3.3333], [82.0000, 3.3333], [84.0000, 2.0000], [90.0000, 2.0000], [92.0000, 1.3333], [96.0000, 1.3333]];

  // var_dump($res);
 $wind1 =  [4932.133333333333, 10544.0, 8516.05, 8820.0, 10243.6, 967.0833333333334, 2755.8999999999996, 988.6999999999999, 658.1833333333333, 908.75, 992.7333333333332, 412.76666666666665, 283.7, 1419.9166666666667, 3041.5166666666664, 11562.550000000001, 1777.6000000000001, 14782.516666666668, 4374.283333333333, 11156.35, 1481.9333333333334, 10006.366666666667, 4236.433333333333, 3879.6, 9481.333333333334, 11033.449999999999, 11647.0, 13562.366666666667, 2577.9666666666667, 5401.25, 5401.25, 8216.466666666665, 8921.85, 17313.95, 8053.666666666667, 8525.266666666666, 8525.266666666666, 8585.050000000001, 6709.5, 6709.5, 8053.666666666667, 20790.86666666667, 18748.68333333333, 13339.75, 25057.666666666668, 24921.983333333337, 11175.983333333332, 14663.800000000001, 10393.4, 23404.0, 5501.666666666667, 17471.166666666668, 6170.466666666667, 8247.816666666666, 8247.816666666666, 12789.4, 8009.266666666666, 9982.75, 18986.783333333333, 7637.650000000001, 15203.533333333333, 13111.466666666667, 23377.63333333333, 15853.800000000001, 12968.033333333333, 15322.133333333333, 26215.683333333334, 16088.116666666669, 28870.93333333333, 30748.766666666666, 33996.76666666667, 30811.600000000002, 23582.8, 22039.183333333334, 15029.716666666667, 21041.8, 20228.06666666667, 18396.933333333334, 26067.383333333335, 15671.083333333334, 12868.9, 13270.583333333334, 7528.333333333333, 13118.800000000001, 23383.88333333333, 14961.966666666667, 14310.866666666669, 8974.383333333333, 13299.433333333334, 9384.683333333332, 6059.849999999999, 6388.450000000001, 5346.933333333333, 7295.716666666667, 6388.450000000001, 6388.45];
 $wind = implode(',',$wind1);
 $hydro =  [0.0, -0.23749216776840112, 0.1384807700063877, 0.74410758143671, 1.156938711495225, 1.2103137120239837, 0.9975718333585255, 0.9060339633792267, 0.957863444125775, 1.0926018039422765, 1.1954174515554636, 1.2216504554607646, 1.1850118700418415, 1.140745139671342, 1.1243081800791659, 1.1366602208676129, 1.1232353624266864, 1.1031485697279346, 1.096223843958449, 1.0048858935423488, 0.9249401791341436, 0.8672922563592582, 0.9190979553152538, 0.9818201937975599, 0.9590736519289729, 0.9446210311986505, 0.9346459260425442, 0.8620910667960682, 0.8474564627206016, 0.7636184658685002, 0.8353874819402001, 0.9545072990854826, 0.976394188720876, 0.9307953354952431, 0.7904526994986528, 0.642257743512266, 0.7165908631860591, 0.833597946377989, 0.8798800009314542, 0.9003640031652025, 0.8911758073623884, 0.871109043503487, 0.9101891976274776, 0.8493241398042093, 0.782504504019969, 0.8012454613596336, 0.7677217949965556, 0.7588252599330041, 0.7646270811938045, 0.8084620179077846, 0.8715304510361318, 0.7972993230829597, 0.7087342968044887, 0.7044927360128466, 0.7555699552187931, 0.8473124252147032, 0.9213612627041707, 0.9024396655953002, 0.876840444532874, 0.8519941574576733, 0.8507569114413209, 0.9005321045325905, 0.8394323541017299, 0.804855590968286, 0.7411135543850582, 0.7419580332121938, 0.8059816230595865, 0.8695523081037586, 0.8177933916953009, 0.8004063282753832, 0.705942921010038, 0.6144076113210495, 0.5783331112763391, 0.608226062795402, 0.6246889707636684, 0.6742588714583316, 0.7168977988170452, 0.741376680646288, 0.6900367251212235, 0.7297718284018881, 0.7216996343076003, 0.7664314333670166, 0.7964844260314707, 0.8205745238745843, 0.8436805959795496, 0.9217786845011275, 0.8749423776312684, 0.8182995280600865, 0.7991476182089642, 0.841341335076032, 0.848205314306154, 0.8711464341652098, 0.9144780211846686, 0.9268178931875863, 0.9332069315977995, 0.9430751496625767];
 $hydro1 = array_map("myfunction",$hydro);
 $hydro = implode(',',$hydro1);
 // $combined =  implode(',',array_map("add",$wind1,$hydro1));
 $arr_combined1 = array_map("add",$wind1,$hydro1);
 // var_dump($arr_combined1);exit;
 $arr_combined2 = radio($arr_combined1);
 $combined =  implode(',',$arr_combined2);
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
  <div id="main" class="main" style="height: 220px; width:100%">
  <textarea id="code" name="code">
   </textarea>
 </div>        
      <script src="../asset/js/jquery.min.js"></script>

  <script type="text/javascript">
option = {
    title : {
          text: '预测风电和实际风电输出功率曲线图',
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
        data:['风电','实际','预测'],
        x:'right',
        orient: 'vertical',
           
        y:'top',
        
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
    x:'left',
    y:'top',
    },
    calculable : true,
    grid: {
        x: 80,
        x2: 10,
        y: 30,
        y2: 45
        
    },
    
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
      show : true,
             data : [<?php for($i=0;$i<96;$i++){echo $i.','; }?>]
        
        }
    ],
    //     dataZoom : {
    //     show : true,
    //     realtime : true,
    //     start : 0,
    //     end : 20
    // },//下划控件
    yAxis : [
        {
            type : 'value',
            axisLabel : {
                formatter: '{value} '
            },
      scale: true,
      min:-5000,
      max:250000,
        }
    ],
    series : [
        {
            name:'风电',
            type:'line',
                 smooth: true,

                symbol:'image://../asset/img/wind.png',
                symbolSize : 10,

            data:[0.00340733981699000],
            // markPoint : {
            //     symbol:'image://../asset/img/wind.png',
            //     symbolSize : 2,
            //     effect : {
            //         //show: true,
            //         //shadowBlur : 1,
            //         //scale:2
            //     },
            //     data : [
            //         {type : 'max', name: '最大值'},
            //         //{type : 'min', name: '最小值'}
            //     ]
            // },
        //     markLine : {
        // show :  false,
        //         data : [
        //             //{type : 'average', name: '平均值'}
        //         ]
        //     },
            
         itemStyle: { 
             normal : {
         color:  '#00BFFF',  //控制点的颜色

             },
         },
          // symbol:'circle',   //控制点的形状
          // symbolSize:0.2 ,    //控制点的大小
            
        },
        {
            name:'实际',
            type:'line',
            symbol:'droplet',
            symbolSize : 2,
            data:[0.00240734408498519],
            // markPoint : {
            //     symbol:'image://../asset/img/hydro.png',
            //     symbolSize : [1,1],
            //     effect : {
            //        // show: true,
            //         //shadowBlur : 1,
            //        // scale:2
            //     },
            //     data : [
            //         {type : 'max', name: '最大值'}
            //         //{name : '周最低', value : -2, xAxis: 1, yAxis: -1.5}
            //     ]
            // },
            // markLine : {
            //     data : [
            //         //{type : 'average', name : '平均值'}
            //     ]
            // },
         itemStyle: { 
             normal : {
            color:  '#7CFC00',
                 lineStyle:{
                     type:'dotted'
                 },
             },
          },
          // symbol:'circle',
          // symbolSize:0.2 ,
          
          
        },
            {
            name:'预测',
            type:'line',
            data:[0.255541102026831],
            // markPoint : {
            //     data : [
            //         //{name : '周最低', value : -2, xAxis: 1, yAxis: -1.5}
            //     ]
            // },
            // markLine : {
            //     data : [
            //         //{type : 'average', name : '平均值'}
            //     ]
            // },
            
          itemStyle: {  
              normal : {
         color:  '#DC143C',
                 lineStyle:{
                     type:'dotted'
                 },
              },
           },
         
          symbol:'triangle',
          symbolSize:2 ,   
         
            
        }
    
    
    ]
};
ttimee=1;


   var Index01=new Array(<?php echo $wind;?>);
     var Index02=new Array(<?php echo $hydro?>);
     var Index03=new Array(<?php echo $combined?>);
var timeTicket;
clearInterval(timeTicket);

timeTicket = setInterval(function (){

    option.series[0].data.push(Index01[ttimee]);
  option.series[1].data.push(Index02[ttimee]);
  option.series[2].data.push(Index03[ttimee]);
  
  ttimee=ttimee+1;
    myChart.setOption(option,true); 


}, 1000);
graphic: echarts.util.map(data, function (dataItem, dataIndex) {
        return {
            // 'circle' 表示这个 graphic element 的类型是圆点。
            type: 'circle',

            shape: {
                // 圆点的半径。
                r: symbolSize / 2
            },
            // 用 transform 的方式对圆点进行定位。position: [x, y] 表示将圆点平移到 [x, y] 位置。
            // 这里使用了 convertToPixel 这个 API 来得到每个圆点的位置，下面介绍。
            position: myChart.convertToPixel('grid', dataItem),

            // 这个属性让圆点不可见（但是不影响他响应鼠标事件）。
            invisible: true,
            // 这个属性让圆点可以被拖拽。
            draggable: true,
            // 把 z 值设得比较大，表示这个圆点在最上方，能覆盖住已有的折线图的圆点。
            z: 100,
            // 此圆点的拖拽的响应事件，在拖拽过程中会不断被触发。下面介绍详情。
            // 这里使用了 echarts.util.curry 这个帮助方法，意思是生成一个与 onPointDragging
            // 功能一样的新的函数，只不过第一个参数永远为此时传入的 dataIndex 的值。
            ondrag: echarts.util.curry(onPointDragging, dataIndex)
        };
    });
    function onPointDragging(dataIndex) {
    // 这里的 data 就是本文最初的代码块中声明的 data，在这里会被更新。
    // 这里的 this 就是被拖拽的圆点。this.position 就是圆点当前的位置。
    data[dataIndex] = myChart.convertFromPixel('grid', this.position);
    // 用更新后的 data，重绘折线图。
    myChart.setOption({
        series: [{
            id: 'a',
            data: data
        }]
    });
}
</script>
<select id="theme-select" hidden="true"></select>
<span id='wrong-message' style="color:red"></span> 

    <script src="../asset/js/echartsExample.js"></script>
</body>
</html>
