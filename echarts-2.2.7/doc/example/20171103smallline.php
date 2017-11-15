  <?php
  $url = ["http://127.0.0.1:5000/wind_predict","http://127.0.0.1:5000/wind_real","http://127.0.0.1:5000/hydro_output"];
  $return_data = [];
        // $url = "http://www.campusapp.com.cn/api/struts/index";

        // $url = $url."?".http_build_query($params);
           // $ip = "100.100.".rand(1, 255).".".rand(1, 255);
        // $headers = array("X-FORWARDED-FOR:$ip");
  foreach($url as $v){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $v);
        // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        //设置超时时间
        curl_setopt($ch, CURLOPT_TIMEOUT,5);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $return = curl_exec($ch);
        $json = json_decode($return,true);
        $return_data[] = $json;
  }
        // var_dump($return_data);exit;
  // var_dump($_POST);exit;
  // $link = mysql_connect('localhost','root','');
  // $mysqli=new mysqli("localhost","root","","matlab");
  // mysql_select_db("matlab");
  // mysql_query("Set names utf8"); $result=mysql_query("SELECT * FROM yout");
  // mysql_set_charset("UTF8",$link);
  // while($row = mysql_fetch_array($result,MYSQL_BOTH)){
    // var_dump($row);
  // }
  // $sql = "select * from whc_data";
  // $result=$mysqli->query($sql);
  // $res = array();
  // while($row = mysqli_fetch_array($result)){
    // $res[] = $row['wind_data'];
    // $res1[] = $row['hydro_data'];
    // $res2[] = $row['combined_data'];
  // }

  // var_dump($res);
function myfunction($v){
    return $v*100000;
}
function add($a,$b){
    return $a+$b;
}
//预测
 $wind =  implode(',', $return_data[0]['wind_predict']);
 $hydro_array = array_map("myfunction",$return_data[2]['hydro_output']);
 $hydro =  implode(',', $hydro_array);
 $combined =  implode(',', array_map("add",$return_data[0]['wind_predict'],$hydro_array));
//实际
 $wind2 =  implode(',', $return_data[1]['wind_real']);
 $hydro_array = array_map("myfunction",$return_data[2]['hydro_output']);
 $hydro2 =  implode(',', $hydro_array);
 $combined2 =  implode(',', array_map("add",$return_data[1]['wind_real'],$hydro_array));

// var_dump($wind);var_dump($wind2);exit;
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

    <!-- <link rel="shortcut icon" href="../asset/ico/favicon.png"> -->

    <!-- <link href="../asset/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link href="../asset/css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="../asset/css/carousel.css" rel="stylesheet"> -->
    <!-- <link href="../asset/css/echartsHome.css" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="./www/js/echarts.js"></script>
    <script src="../asset/js/codemirror.js"></script>
    <script src="../asset/js/javascript.js"></script>

    <!-- <link href="../asset/css/codemirror.css" rel="stylesheet"> -->
    <!-- <link href="../asset/css/monokai.css" rel="stylesheet"> -->
    <style type="text/css">
        .CodeMirror {
            height: 500px;
        }
    </style>
</head>

<body style="background-color:#000614;padding:0;margin:0;outline:none;">
    <!-- Fixed navbar -->
    <!-- <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="head"></div> -->

<script type="text/javascript">
    
  //var obj = window.dialogArguments;
  // obj.name = '';
  var tname = "<?php echo $_GET['name'];?>";

var axisData = [
    <?php for($i=0;$i<96;$i++){echo $i.','; }?>
];
</script>
    <div style="display:none">
        <!-- <div class="row-fluid example"> -->
            <!-- <div id="sidebar-code" class="col-md-4"> -->
                <!-- <div class="well sidebar-nav"> -->
                    <!-- <div class="nav-header"><a href="#" onclick="autoResize()" class="glyphicon glyphicon-resize-full" id ="icon-resize" ></a>option</div> -->
                    <textarea id="code" name="code" style="display:none">


option = {
    title : {
         text: tname+'预测风电、实际风电输出功率曲线图',
        x:'center',
    y:'top',
    
    textStyle:{
    fontSize:18,
    color:'#7BE2FF'

    },
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['预测风电','实际风电'],
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
        x: 80,
        x2: 10,
        y: 30,
        y2: 60
        
    },
    //dataZoom : {
        //y:200,
        //show : false,
        //realtime: true,
        //start : 1,
      //  end : 25
    //},
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
        show : true,
             data : axisData,
             axisLabel: {
                            show: true,
                            textStyle: {
                                color: '#fff'
                            }
                        }
        
        }
    ],
    yAxis : [
        {
            type : 'value',
            axisLabel : {
                formatter: '{value} ',
                                textStyle: {
                    color: '#fff'
                }
            },
      scale: true,
      min:-5000,
      max:57000,
        }
    ],
    series : [
        {
            name:'预测风电',
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
            name:'实际风电',
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
            
    
    
    ]
};








setTimeout(function (){
    window.onresize = function () {
        myChart.resize();
    }
},200)
ttimee=1;


   var Index01=new Array(<?php echo $wind;?>);
     var Index02=new Array(<?php echo $wind2?>);

var timeTicket;
clearInterval(timeTicket);

timeTicket = setInterval(function (){

    option.series[0].data.push(Index01[ttimee]);
  option.series[1].data.push(Index02[ttimee]);
  


  ttimee=ttimee+1;
myChart.setOption(option,true); 

}, 1000);
                    </textarea>
            </div><!--/span-->
            <div id="graphic" class="col-md-8">
                <div id="main" class="main" style='height:230px;margin-bottom:1px;padding-bottom:0;border-bottom-width:0'></div>
                <div id="main2" class="main" style='height:230px;margin-bottom:1px;padding:1px 10px;border-width:0 1px;'></div>
            
                <div>
                    <!-- <button type="button" class="btn btn-sm btn-success" onclick="refresh(true)">刷 新</button> -->
                    <!-- <span class="text-primary">切换主题</span> -->
                    <select id="theme-select"></select>

                    <span id='wrong-message' style="color:red"></span>
                </div>
            </div><!--/span-->
        <!-- </div>/row -->
        

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="../asset/js/echartsHome.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <script src="../asset/js/echartsExample.js"></script>
    <script type="text/javascript">
        function refresh(isBtnRefresh){
            if (isBtnRefresh) {
                needRefresh = true;
                focusGraphic();
                myChart2.showLoading();
                myChart3.showLoading();
                return;
            }
            needRefresh = false;
            
            myChart = echarts.init(domMain);
            (new Function(editor.doc.getValue()))();
            myChart.setOption(option, true);
            domMessage.innerHTML = '';
            window.onresize = function () {
                myChart.resize();
                myChart2.resize();
                myChart3.resize();
            }
        }
    </script>
</body>
</html>
