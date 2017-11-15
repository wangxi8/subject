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
    return $v/1000;
}
function myhy($v){
    return $v*100;
}
function add($a,$b){
    return $a+$b;
}
$wind_real1 = [10821.0, 7559.9, 5772.1, 3757.25, 3138.5, 2886.25, 3113.2, 2563.95, 1949.2, 1391.8, 1486.8, 1238.3, 851.1, 1334.45, 3786.5, 5125.95, 5050.6, 6733.35, 8953.0, 9016.15, 4313.1, 6421.9, 6432.8, 6374.75, 7075.9, 5943.15, 5451.6, 4737.75, 4112.5, 3517.25, 3042.3, 3235.0, 3925.0, 4468.45, 4815.2, 5671.4, 6230.0, 6574.15, 5768.6, 10703.3, 13674.4, 19058.2, 20831.1, 21555.7, 24409.0, 21644.3, 19002.2, 21732.55, 21917.9, 20569.3, 15962.4, 15669.65, 13717.1, 13102.15, 11641.3, 18742.9, 18661.6, 20016.35, 20354.1, 22912.95, 23992.0, 25493.5, 25763.3, 25648.3, 26260.3, 30523.05, 30508.5, 32011.65, 36025.6, 38059.65, 38811.1, 36126.75, 37672.3, 37405.5, 33607.9, 32205.9, 29468.6, 28841.9, 31199.4, 24432.9, 24553.7, 24645.0, 20179.8, 21754.2, 24300.8, 20548.55, 17347.0, 14462.55, 12373.4, 14636.5, 15175.2, 13279.5, 11881.0, 6980.25, 3865.7, 2020.15];
  // var_dump($res);
 $wind_real1 = array_map("myfunction",$wind_real1);

 $wind_real = implode(',',$wind_real1);
  // var_dump($res);
 $wind1 =  [4932.133333333333, 10544.0, 8516.05, 8820.0, 10243.6, 967.0833333333334, 2755.8999999999996, 988.6999999999999, 658.1833333333333, 908.75, 992.7333333333332, 412.76666666666665, 283.7, 1419.9166666666667, 3041.5166666666664, 11562.550000000001, 1777.6000000000001, 14782.516666666668, 4374.283333333333, 11156.35, 1481.9333333333334, 10006.366666666667, 4236.433333333333, 3879.6, 9481.333333333334, 11033.449999999999, 11647.0, 13562.366666666667, 2577.9666666666667, 5401.25, 5401.25, 8216.466666666665, 8921.85, 17313.95, 8053.666666666667, 8525.266666666666, 8525.266666666666, 8585.050000000001, 6709.5, 6709.5, 8053.666666666667, 20790.86666666667, 18748.68333333333, 13339.75, 25057.666666666668, 24921.983333333337, 11175.983333333332, 14663.800000000001, 10393.4, 23404.0, 5501.666666666667, 17471.166666666668, 6170.466666666667, 8247.816666666666, 8247.816666666666, 12789.4, 8009.266666666666, 9982.75, 18986.783333333333, 7637.650000000001, 15203.533333333333, 13111.466666666667, 23377.63333333333, 15853.800000000001, 12968.033333333333, 15322.133333333333, 26215.683333333334, 16088.116666666669, 28870.93333333333, 30748.766666666666, 33996.76666666667, 30811.600000000002, 23582.8, 22039.183333333334, 15029.716666666667, 21041.8, 20228.06666666667, 18396.933333333334, 26067.383333333335, 15671.083333333334, 12868.9, 13270.583333333334, 7528.333333333333, 13118.800000000001, 23383.88333333333, 14961.966666666667, 14310.866666666669, 8974.383333333333, 13299.433333333334, 9384.683333333332, 6059.849999999999, 6388.450000000001, 5346.933333333333, 7295.716666666667, 6388.450000000001, 6388.45];
 $wind1 = array_map("myfunction",$wind1);

 $wind = implode(',',$wind1);
 $hydro1 =  [0.0, -0.23749216776840112, 0.1384807700063877, 0.74410758143671, 1.156938711495225, 1.2103137120239837, 0.9975718333585255, 0.9060339633792267, 0.957863444125775, 1.0926018039422765, 1.1954174515554636, 1.2216504554607646, 1.1850118700418415, 1.140745139671342, 1.1243081800791659, 1.1366602208676129, 1.1232353624266864, 1.1031485697279346, 1.096223843958449, 1.0048858935423488, 0.9249401791341436, 0.8672922563592582, 0.9190979553152538, 0.9818201937975599, 0.9590736519289729, 0.9446210311986505, 0.9346459260425442, 0.8620910667960682, 0.8474564627206016, 0.7636184658685002, 0.8353874819402001, 0.9545072990854826, 0.976394188720876, 0.9307953354952431, 0.7904526994986528, 0.642257743512266, 0.7165908631860591, 0.833597946377989, 0.8798800009314542, 0.9003640031652025, 0.8911758073623884, 0.871109043503487, 0.9101891976274776, 0.8493241398042093, 0.782504504019969, 0.8012454613596336, 0.7677217949965556, 0.7588252599330041, 0.7646270811938045, 0.8084620179077846, 0.8715304510361318, 0.7972993230829597, 0.7087342968044887, 0.7044927360128466, 0.7555699552187931, 0.8473124252147032, 0.9213612627041707, 0.9024396655953002, 0.876840444532874, 0.8519941574576733, 0.8507569114413209, 0.9005321045325905, 0.8394323541017299, 0.804855590968286, 0.7411135543850582, 0.7419580332121938, 0.8059816230595865, 0.8695523081037586, 0.8177933916953009, 0.8004063282753832, 0.705942921010038, 0.6144076113210495, 0.5783331112763391, 0.608226062795402, 0.6246889707636684, 0.6742588714583316, 0.7168977988170452, 0.741376680646288, 0.6900367251212235, 0.7297718284018881, 0.7216996343076003, 0.7664314333670166, 0.7964844260314707, 0.8205745238745843, 0.8436805959795496, 0.9217786845011275, 0.8749423776312684, 0.8182995280600865, 0.7991476182089642, 0.841341335076032, 0.848205314306154, 0.8711464341652098, 0.9144780211846686, 0.9268178931875863, 0.9332069315977995, 0.9430751496625767];
 $hydro1 = array_map("myhy",$hydro1);
 $hydro = implode(',',$hydro1);
 $combined =  implode(',',array_map("add",$wind_real1,$hydro1));
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
   </textarea>
 </div>        
      <script src="../asset/js/jquery.min.js"></script>

  <script type="text/javascript">
	 var Ut=new Array(<?php echo $combined?>);
     var Ut2=new Array(<?php echo $wind_real;?>);
     var Ut3=new Array(<?php echo $hydro?>);
var ttimee=0;
 option = {
    backgroundColor: '#1b1b1b ',
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
            name:'总体输出功率',
            type:'gauge',
			 center : ['50%', '60%'],    // 默认全局居中
			   radius : '95%',
            min:-5,
            max:250,
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
                    color: 'white',
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
            data:[{value: 4+'kw', name: '总体输出功率'}]
        },
		
		
        {
            name:'风电输出功率',
            type:'gauge',
            center : ['17%', '65%'],    // 默认全局居中
            radius : '80%',
            min:-5,
            max:250,
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
                   color: 'white',
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
            data:[{value: 4+'kw', name: '实际风电输出功率'}]
        },
		
	{
            name:'实际水电输出功率',
            type:'gauge',
            center : ['83%', '65%'],    // 默认全局居中
            radius : '80%',
            min: -5,
            max:250,
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
                   color: 'white',
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
            data:[{value:4+'kw', name: '实际水电输出功率'}]
        },	
    ]
};

var timeTicket;

clearInterval(timeTicket);
timeTicket = setInterval(function (){
    option.series[0].data[0].value = Ut[ttimee].toFixed(3) - 0;
    option.series[1].data[0].value = Ut2[ttimee].toFixed(3) - 0;
    option.series[2].data[0].value = Ut3[ttimee].toFixed(3) - 0;
    ttimee=ttimee+1;
    if(ttimee==20) ttimee=1; 
    myChart.setOption(option,true);
},1000)
</script>
 <select id="theme-select" hidden="true"></select>
 <span id='wrong-message' style=""></span>
 <script src="../asset/js/echartsExample.js"></script>
</body>
</html>
