<?php
header("Content-type: text/html; charset=gb2312"); 
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
 // $wind =  implode(',', $res);
 // $hydro =  implode(',', $res1);
 // $combined =  implode(',', $res2);
// var_dump($str);
 function myfunction($v){
    return $v*100000;
}
function add($a,$b){
    return $a+$b;
}
$wind_real = [10821.0, 7559.9, 5772.1, 3757.25, 3138.5, 2886.25, 3113.2, 2563.95, 1949.2, 1391.8, 1486.8, 1238.3, 851.1, 1334.45, 3786.5, 5125.95, 5050.6, 6733.35, 8953.0, 9016.15, 4313.1, 6421.9, 6432.8, 6374.75, 7075.9, 5943.15, 5451.6, 4737.75, 4112.5, 3517.25, 3042.3, 3235.0, 3925.0, 4468.45, 4815.2, 5671.4, 6230.0, 6574.15, 5768.6, 10703.3, 13674.4, 19058.2, 20831.1, 21555.7, 24409.0, 21644.3, 19002.2, 21732.55, 21917.9, 20569.3, 15962.4, 15669.65, 13717.1, 13102.15, 11641.3, 18742.9, 18661.6, 20016.35, 20354.1, 22912.95, 23992.0, 25493.5, 25763.3, 25648.3, 26260.3, 30523.05, 30508.5, 32011.65, 36025.6, 38059.65, 38811.1, 36126.75, 37672.3, 37405.5, 33607.9, 32205.9, 29468.6, 28841.9, 31199.4, 24432.9, 24553.7, 24645.0, 20179.8, 21754.2, 24300.8, 20548.55, 17347.0, 14462.55, 12373.4, 14636.5, 15175.2, 13279.5, 11881.0, 6980.25, 3865.7, 2020.15];
  // var_dump($res);
 $wind_real = implode(',',$wind_real);
 $wind1 =  [4932.133333333333, 10544.0, 8516.05, 8820.0, 10243.6, 967.0833333333334, 2755.8999999999996, 988.6999999999999, 658.1833333333333, 908.75, 992.7333333333332, 412.76666666666665, 283.7, 1419.9166666666667, 3041.5166666666664, 11562.550000000001, 1777.6000000000001, 14782.516666666668, 4374.283333333333, 11156.35, 1481.9333333333334, 10006.366666666667, 4236.433333333333, 3879.6, 9481.333333333334, 11033.449999999999, 11647.0, 13562.366666666667, 2577.9666666666667, 5401.25, 5401.25, 8216.466666666665, 8921.85, 17313.95, 8053.666666666667, 8525.266666666666, 8525.266666666666, 8585.050000000001, 6709.5, 6709.5, 8053.666666666667, 20790.86666666667, 18748.68333333333, 13339.75, 25057.666666666668, 24921.983333333337, 11175.983333333332, 14663.800000000001, 10393.4, 23404.0, 5501.666666666667, 17471.166666666668, 6170.466666666667, 8247.816666666666, 8247.816666666666, 12789.4, 8009.266666666666, 9982.75, 18986.783333333333, 7637.650000000001, 15203.533333333333, 13111.466666666667, 23377.63333333333, 15853.800000000001, 12968.033333333333, 15322.133333333333, 26215.683333333334, 16088.116666666669, 28870.93333333333, 30748.766666666666, 33996.76666666667, 30811.600000000002, 23582.8, 22039.183333333334, 15029.716666666667, 21041.8, 20228.06666666667, 18396.933333333334, 26067.383333333335, 15671.083333333334, 12868.9, 13270.583333333334, 7528.333333333333, 13118.800000000001, 23383.88333333333, 14961.966666666667, 14310.866666666669, 8974.383333333333, 13299.433333333334, 9384.683333333332, 6059.849999999999, 6388.450000000001, 5346.933333333333, 7295.716666666667, 6388.450000000001, 6388.45];
 $wind = implode(',',$wind1);
 $hydro =  [0.0, -0.23749216776840112, 0.1384807700063877, 0.74410758143671, 1.156938711495225, 1.2103137120239837, 0.9975718333585255, 0.9060339633792267, 0.957863444125775, 1.0926018039422765, 1.1954174515554636, 1.2216504554607646, 1.1850118700418415, 1.140745139671342, 1.1243081800791659, 1.1366602208676129, 1.1232353624266864, 1.1031485697279346, 1.096223843958449, 1.0048858935423488, 0.9249401791341436, 0.8672922563592582, 0.9190979553152538, 0.9818201937975599, 0.9590736519289729, 0.9446210311986505, 0.9346459260425442, 0.8620910667960682, 0.8474564627206016, 0.7636184658685002, 0.8353874819402001, 0.9545072990854826, 0.976394188720876, 0.9307953354952431, 0.7904526994986528, 0.642257743512266, 0.7165908631860591, 0.833597946377989, 0.8798800009314542, 0.9003640031652025, 0.8911758073623884, 0.871109043503487, 0.9101891976274776, 0.8493241398042093, 0.782504504019969, 0.8012454613596336, 0.7677217949965556, 0.7588252599330041, 0.7646270811938045, 0.8084620179077846, 0.8715304510361318, 0.7972993230829597, 0.7087342968044887, 0.7044927360128466, 0.7555699552187931, 0.8473124252147032, 0.9213612627041707, 0.9024396655953002, 0.876840444532874, 0.8519941574576733, 0.8507569114413209, 0.9005321045325905, 0.8394323541017299, 0.804855590968286, 0.7411135543850582, 0.7419580332121938, 0.8059816230595865, 0.8695523081037586, 0.8177933916953009, 0.8004063282753832, 0.705942921010038, 0.6144076113210495, 0.5783331112763391, 0.608226062795402, 0.6246889707636684, 0.6742588714583316, 0.7168977988170452, 0.741376680646288, 0.6900367251212235, 0.7297718284018881, 0.7216996343076003, 0.7664314333670166, 0.7964844260314707, 0.8205745238745843, 0.8436805959795496, 0.9217786845011275, 0.8749423776312684, 0.8182995280600865, 0.7991476182089642, 0.841341335076032, 0.848205314306154, 0.8711464341652098, 0.9144780211846686, 0.9268178931875863, 0.9332069315977995, 0.9430751496625767];
 $hydro1 = array_map("myfunction",$hydro);
 $hydro = implode(',',$hydro1);
 $combined =  implode(',',array_map("add",$wind1,$hydro1));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECharts">
    <meta name="author" content="kener.linfeng@gmail.com">
<title>风水协同运行策略表</title>
<style type="text/css">
.txtarea{width:55px;line-height:9px;cols:0px;rows:1;text-align:center;vertical-align:bottom;overflow:hidden; resize:none;BORDER-BOTTOM: 0px solid; BORDER-LEFT: 0px solid; BORDER-RIGHT: 0px solid; BORDER-TOP: 0px solid;}
.txtarea2{width:115px;line-height:9px;cols:0px;rows:1;text-align:center;vertical-align:bottom;overflow:hidden; resize:none;BORDER-BOTTOM: 0px solid; BORDER-LEFT: 0px solid; BORDER-RIGHT: 0px solid; BORDER-TOP: 0px solid;}
.td{width:20px}
.td2{width:100px}
.td3{width:100px}
</style>
</head>

<body>
<script language="javascript">
var ttimee=1;
var wind_real=new Array(<?php echo $wind_real;?>);
var QQQfuhe=new Array(<?php echo $wind;?>);
var WWWgongbuchang=new Array(<?php echo $hydro?>);
var changshaIndex=new Array(<?php echo $combined?>);
var timeTicket;
clearInterval(timeTicket);
timeTicket = setInterval(function (){

	form1.WD3.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH3.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC3.value=wind_real[Math.ceil(Math.random()*96)];
  form1.WGB3.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

	form1.WD4.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH4.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC4.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB4.value=WWWgongbuchang[Math.ceil(Math.random()*96)];


    form1.WD7.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH7.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC7.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB7.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD8.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH8.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC8.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB8.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD12.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH12.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC12.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB12.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD15.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH15.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC15.value=wind_real[Math.ceil(Math.random()*96)];;
	form1.WGB15.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD16.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH16.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC16.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB16.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD18.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH18.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC18.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB18.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD20.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH20.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC20.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB20.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD21.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH21.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC21.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB21.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD23.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH23.value=((0.2+0.1*Math.random()).toFixed(2));
  form1.WGBC23.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB23.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD24.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH24.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC24.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB24.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD25.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH25.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC25.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB25.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD26.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH26.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC26.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB26.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD27.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH27.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC27.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB27.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD28.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH28.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC28.value=wind_real[Math.ceil(Math.random()*96)];
	form1.WGB28.value=WWWgongbuchang[Math.ceil(Math.random()*96)];

    form1.WD29.value=changshaIndex[Math.ceil(Math.random()*96)];
	form1.QFH29.value=QQQfuhe[Math.ceil(Math.random()*96)];
  form1.WGBC29.value=wind_real[Math.ceil(Math.random()*96)];    
	form1.WGB29.value=WWWgongbuchang[Math.ceil(Math.random()*96)];    

	
	ttimee=ttimee+1;
    if(ttimee==27) ttimee=1; 
},1000)
</script>

<div style="overflow:auto;width:100%;height:100%;">
 <form name="form1">
 <table border="1" cellpadding="0">
 
  <tr>
   <td colspan=5; style="color:#04564A"><div align="center"; style="font-weight:bold;">风水协同运行策略表</div></td>
  </tr>
  
  <tr style="width:400px" style="color:#04564A">
   <th class="td" style="color:#FFFFFF; background-color:#7FB73C">节点号</th> <th class="td" style="color:#FFFFFF; background-color:#3D922B">总体指标</th> <th class="td2" style="color:#FFFFFF; background-color:#51B8C9" >风电功率预测指标</th>
  <th class="td3" style="color:#FFFFFF; background-color:#4FB4DE">风电功率实际指标</th> 
  <th class="td3" style="color:#FFFFFF; background-color:#3D922B">计划水电指标</th> 
  </tr>  
 
<!--   <tr>
   <td class="td">
    <textarea class="txtarea">风电场1</textarea>
   </td>
   <td class="td">
    <textarea name="WD3" id="WD3" class="txtarea"></textarea>
   </td>
    <td class="td2">
    <textarea name="QFH3" id="QFH3" class="txtarea2"></textarea>
   </td>
    <td class="td3">
    <textarea name="WGBC3" id="WGBC3" class="txtarea"></textarea> 
    </td>
        <td class="td3">
    <textarea name="WGB3" id="WGB3" class="txtarea"></textarea> 
    </td>
  </tr> -->
  <tr>
   <td>
    <textarea class="txtarea">风电场1</textarea>
   </td>
   <td>
    <textarea name="WD15" id="WD15" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH15" id="QFH15" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC15" id="WGBC15" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB15" id="WGB15" class="txtarea"></textarea>
   </td>
  </tr>
  <tr>
   <td>
    <textarea class="txtarea">风电场2</textarea>
   </td>
   <td>
    <textarea name="WD4" id="WD4" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH4" id="QFH4" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC4" id="WGBC4" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB4" id="WGB4" class="txtarea"></textarea>
   </td>
  </tr>   


  <tr>
   <td>
    <textarea class="txtarea">风电场3</textarea>
   </td>
   <td>
    <textarea name="WD7" id="WD7" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH7" id="QFH7" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC7" id="WGBC7" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB7" id="WGB7" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td>
    <textarea class="txtarea">风电场4</textarea>
   </td>
   <td>
    <textarea name="WD8" id="WD8" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH8" id="QFH8" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC8" id="WGBC8" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB8" id="WGB8" class="txtarea"></textarea>
   </td>
  </tr>


  <tr>
   <td>
    <textarea class="txtarea">风电场5</textarea>
   </td>
   <td>
    <textarea name="WD12" id="WD12" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH12" id="QFH12" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC12" id="WGBC12" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB12" id="WGB12" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td class="td">
    <textarea class="txtarea">风电场6</textarea>
   </td>
   <td class="td">
    <textarea name="WD3" id="WD3" class="txtarea"></textarea>
   </td>
    <td class="td2">
    <textarea name="QFH3" id="QFH3" class="txtarea2"></textarea>
   </td>
    <td class="td3">
    <textarea name="WGBC3" id="WGBC3" class="txtarea"></textarea> 
    </td>
        <td class="td3">
    <textarea name="WGB3" id="WGB3" class="txtarea"></textarea> 
    </td>
  </tr>
  <!-- <tr>
   <td>
    <textarea class="txtarea">风电场6</textarea>
   </td>
   <td>
    <textarea name="WD15" id="WD15" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH15" id="QFH15" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC15" id="WGBC15" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB15" id="WGB15" class="txtarea"></textarea>
   </td>
  </tr> -->

  <tr>
   <td>
    <textarea class="txtarea">水电厂1</textarea>
   </td>
   <td>
    <textarea name="WD16" id="WD16" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH16" id="QFH16" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC16" id="WGBC16" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB16" id="WGB16" class="txtarea"></textarea>
   </td>
  </tr>


  <tr>
   <td>
    <textarea class="txtarea">水电厂2</textarea>
   </td>
   <td>
    <textarea name="WD18" id="WD18" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH18" id="QFH18" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC18" id="WGBC18" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB18" id="WGB18" class="txtarea"></textarea>
   </td>
  </tr>
  
  <tr>
   <td>
    <textarea class="txtarea">水电厂3</textarea>
   </td>
   <td>
    <textarea name="WD20" id="WD20" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH20" id="QFH20" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC20" id="WGBC20" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB20" id="WGB20" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td>
    <textarea class="txtarea">水电厂4</textarea>
   </td>
   <td>
    <textarea name="WD21" id="WD21" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH21" id="QFH21" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC21" id="WGBC21" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB21" id="WGB21" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td>
    <textarea class="txtarea">水电厂5</textarea>
   </td>
   <td>
    <textarea name="WD23" id="WD23" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH23" id="QFH23" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC23" id="WGBC23" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB23" id="WGB23" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td>
    <textarea class="txtarea">水电厂6</textarea>
   </td>
   <td>
    <textarea name="WD24" id="WD24" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH24" id="QFH24" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC24" id="WGBC24" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB24" id="WGB24" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td>
    <textarea class="txtarea">水电厂7</textarea>
   </td>
   <td>
    <textarea name="WD25" id="WD25" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH25" id="QFH25" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC25" id="WGBC25" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB25" id="WGB25" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td>
    <textarea class="txtarea">风电场7</textarea>
   </td>
   <td>
    <textarea name="WD26" id="WD26" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH26" id="QFH26" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC26" id="WGBC26" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB26" id="WGB26" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td>
    <textarea class="txtarea">水电厂8</textarea>
   </td>
   <td>
    <textarea name="WD27" id="WD27" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH27" id="QFH27" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC27" id="WGBC27" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB27" id="WGB27" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td>
    <textarea class="txtarea">风电场8</textarea>
   </td>
   <td>
    <textarea name="WD28" id="WD28" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH28" id="QFH28" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC28" id="WGBC28" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB28" id="WGB28" class="txtarea"></textarea>
   </td>
  </tr>

  <tr>
   <td>
    <textarea class="txtarea">水电厂9</textarea>
   </td>
   <td>
    <textarea name="WD29" id="WD29" class="txtarea"></textarea>
   </td>
    <td>
    <textarea name="QFH29" id="QFH29" class="txtarea2"></textarea>
   </td>
    <td>
    <textarea name="WGBC29" id="WGBC29" class="txtarea"></textarea>
   </td>    <td>
    <textarea name="WGB29" id="WGB29" class="txtarea"></textarea>
   </td>
  </tr>

 </table>
 </form>

</div>
 
</body>
</html>
