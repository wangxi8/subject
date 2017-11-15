﻿
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

  </script>
  <?php
  // var_dump($_GET);exit;
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
  //var obj = window.dialogArguments;
  var tname = "<?php echo $_GET['name'];?>";
option = {
    title : {
         text: tname+'风电、水电输出功率曲线图',
        x:'center',
    y:'top',
    
    textStyle:{
    fontSize:18,
    color:'#7CFC00'

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
             data : [<?php for($i=0;$i<96;$i++){echo $i.','; }?>]
        
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
ttimee=1;


   var Index01=new Array(<?php echo $wind;?>);
     var Index02=new Array(<?php echo $hydro?>);
     var Index03=new Array(<?php echo $combined?>);

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
