﻿<?php
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
    <title>ECharts · Example</title>
   <style>
.fiv1{ 
	width:100%; 
	height:210px; 
	float:top; 
	margin:3px; 
	border:0px #000 solid; 
	background:#04564A
}
</style>
    <script src="./www/js/echarts.js"></script>
    <script src="../asset/js/codemirror.js"></script>
    <script src="../asset/js/javascript.js"></script>
</head>

<body>
  <div id="main" class="fiv1">
  <textarea id="code" name="code">
  var main_data = new Array(<?php echo $combined?>);
    var Pdb=new Array(0.933179070545999,0.933179071263833,0.933179072699503,0.933179075570839,0.933179081313512,0.93317909279885,0.933179115769499,0.933179161710686,0.93317925359262,0.933179437354728,0.933179804871905,0.933180539878117,0.933182009778116,0.933184949129452,0.933190826045935,0.933202426942036,0.933225455067952,0.933270528868577,0.933356777155124,0.93351390276406,0.933758080402316,0.933931407872538,0.934035251608333,0.93406999293169,0.934035069884682,0.93392893812397,0.933748984998915,0.933491390132602,0.933150920390805,0.932720525704681,0.932191286697689,0.931551248653659,0.930784851093344,0.929871466824159,0.928783262781528,0.927481739373657,0.925911832136986,0.923991157480862,0.921588551429263,0.918475355296595,0.914189619985669,0.907459327478348,0.902344020743791,0.899137981288232,0.899426419695594,0.89621835114457,0.896192513217038,0.896284658201927,0.894629245342471,0.894613429032395,0.894641759318044,0.893805283353325,0.893797024684968,0.893806318702618,0.893386530931081,0.893382358058584,0.893385741659882,0.893386461901551,0.893386577983534,0.89333387289375,0.89333381787779,0.893333855575958,0.893307512421231,0.89330746958805,0.893307513973738,0.893307513197485,0.893307512809358,0.89330421531806,0.893304215387157,0.893304215352609,0.893304215335334,0.893304215326697,0.893303803148259,0.893303803151911,0.893303803150085,0.893303597061454,0.893303597062033,0.893303597061744,0.893303597061598,0.893303545539503,0.89330354553957,0.893303545539536,0.893303519778497,0.893303519778511,0.893303519778504,0.89330350689799,0.893303506897992,0.893303506897991,0.893303500457727);
    var Pxb=new Array(0.963145876371907,0.963145876874233,0.963145877878887,0.963145879888193,0.96314588390681,0.963145891944058,0.963145908018617,0.963145940167974,0.963146004467651,0.963146133070861,0.963146390292697,0.963146904798031,0.963147934055342,0.963149993556463,0.963154116504083,0.963162239849369,0.963178411906202,0.963210183406606,0.963271457522596,0.963385092435287,0.963569844161931,0.963714132066932,0.963819202803725,0.963885712534067,0.963913789966891,0.963903029470373,0.96385245972414,0.96376048439768,0.963624790390491,0.963442150069805,0.963208445653602,0.962918051336116,0.962563614955846,0.962135361682878,0.961620094986231,0.960999586086777,0.960247841166828,0.959326145267359,0.958173232975608,0.956683134527809,0.95464389850492,0.951479201642328,0.949110125105268,0.947642870733059,0.947755508934207,0.946319202646131,0.946309563635939,0.946343914891207,0.945603903743679,0.945598165905505,0.945608442099088,0.945234498018178,0.945231546340845,0.945234868015001,0.945047150386025,0.945045670436345,0.945046870474778,0.945047125905247,0.945047167072784,0.945023603892442,0.945023584400393,0.945023597756784,0.945011819727773,0.945011804559433,0.945011820277555,0.945011820002664,0.945011819865218,0.945010346040129,0.945010346064596,0.945010346052362,0.945010346046245,0.945010346043187,0.945010161818774,0.945010161820067,0.945010161819421,0.945010069707435,0.94501006970764,0.945010069707538,0.945010069707486,0.945010046679518,0.945010046679542,0.945010046679529,0.945010035165549,0.945010035165554,0.945010035165552,0.945010029408561,0.945010029408562,0.945010029408562,0.945010026530069);
    var Phb=new Array(0.918816077024966,0.918816078139882,0.918816080369715,0.918816084829378,0.918816093748698,0.918816111587326,0.918816147264512,0.918816218618616,0.918816361325754,0.918816646735739,0.918817217538563,0.91881835907561,0.91882064187538,0.918825206378058,0.918834330999524,0.918852397917791,0.91888829802511,0.918958839611038,0.919094936343037,0.919347544575951,0.919759081160734,0.920081908327962,0.920318799589112,0.920471279559142,0.920539714408541,0.920523299819147,0.920419995427264,0.920226398087247,0.919937544511311,0.919546538688854,0.919044395591318,0.918419009161854,0.91765448115611,0.916729661725296,0.915615985130053,0.914273979917539,0.912647346167728,0.910652211918616,0.908155820618394,0.904928481919268,0.900510622528507,0.893651972086271,0.888515208145861,0.885332554498936,0.885446011288269,0.882460360198413,0.88245064670522,0.882485277860541,0.880907883943373,0.880902093620638,0.880912464685403,0.880105992165364,0.88010301112967,0.880106365866524,0.87969927089999,0.879697775606906,0.879698988079961,0.879699246164685,0.879699287760254,0.879648145732091,0.879648126036391,0.879648139532328,0.87962256067839,0.879622545351187,0.879622561233931,0.87962256095616,0.879622560817275,0.879619361240071,0.879619361264794,0.879619361252433,0.879619361246252,0.879619361243161,0.879618961289906,0.879618961291213,0.879618961290559,0.879618761313464,0.879618761313672,0.879618761313568,0.879618761313516,0.879618711319188,0.879618711319212,0.8796187113192,0.87961868632203,0.879618686322036,0.879618686322033,0.879618673823445,0.879618673823446,0.879618673823446,0.879618667574152);
    
    var Pxn=new Array(0.926958868567723,0.926958868587223,0.926958868626222,0.926958868704222,0.926958868860219,0.926958869172208,0.926958869796157,0.926958871043948,0.926958873539088,0.926958878527616,0.926958888497654,0.926958908409666,0.926958948121474,0.926959027096501,0.926959183254422,0.926959489841399,0.926960075787844,0.926961141797756,0.926962851306762,0.92696458720492,0.926961711497233,0.926950733098438,0.9269316015165,0.926904192154143,0.926868302401033,0.926823644852025,0.926769836531484,0.926706384261042,0.92663266474221,0.926547883525386,0.926451080237396,0.92634101021025,0.926216104218249,0.926074341342546,0.925913069604151,0.925728721221915,0.925516336529268,0.925268712827952,0.924974739253182,0.924615688997375,0.924155044430554,0.923495404710874,0.923036531833826,0.922764679373678,0.922840359414715,0.922526477240627,0.922519711024327,0.922543846276964,0.922400299429969,0.92239615829798,0.922403576239597,0.922335786304185,0.922333623918534,0.922336057400913,0.922303231465752,0.922302138831395,0.922303024798686,0.922303213390638,0.92230324378626,0.922299150786693,0.92229913638091,0.922299146252075,0.922297108380138,0.922297097164357,0.922297108786659,0.922297108583399,0.922297108481768,0.922296852904471,0.922296852922564,0.922296852913518,0.922296852908994,0.922296852906733,0.922296820967275,0.922296820968231,0.922296820967753,0.922296804998557,0.922296804998709,0.922296804998633,0.922296804998595,0.922296801006363,0.922296801006381,0.922296801006372,0.922296799010267,0.92229679901027,0.922296799010268,0.922296798012214,0.922296798012214,0.922296798012214,0.922296797513187);
    
    var Phz=new Array(0.926958868567723,0.926958868587223,0.926958868626222,0.926958868704222,0.926958868860219,0.926958869172208,0.926958869796157,0.926958871043948,0.926958873539088,0.926958878527616,0.926958888497654,0.926958908409666,0.926958948121474,0.926959027096501,0.926959183254422,0.926959489841399,0.926960075787844,0.926961141797756,0.926962851306762,0.92696458720492,0.926961711497233,0.926950733098438,0.9269316015165,0.926904192154143,0.926868302401033,0.926823644852025,0.926769836531484,0.926706384261042,0.92663266474221,0.926547883525386,0.926451080237396,0.92634101021025,0.926216104218249,0.926074341342546,0.925913069604151,0.925728721221915,0.925516336529268,0.925268712827952,0.924974739253182,0.924615688997375,0.924155044430554,0.923495404710874,0.923036531833826,0.922764679373678,0.922840359414715,0.922526477240627,0.922519711024327,0.922543846276964,0.922400299429969,0.92239615829798,0.922403576239597,0.922335786304185,0.922333623918534,0.922336057400913,0.922303231465752,0.922302138831395,0.922303024798686,0.922303213390638,0.92230324378626,0.922299150786693,0.92229913638091,0.922299146252075,0.922297108380138,0.922297097164357,0.922297108786659,0.922297108583399,0.922297108481768,0.922296852904471,0.922296852922564,0.922296852913518,0.922296852908994,0.922296852906733,0.922296820967275,0.922296820968231,0.922296820967753,0.922296804998557,0.922296804998709,0.922296804998633,0.922296804998595,0.922296801006363,0.922296801006381,0.922296801006372,0.922296799010267,0.92229679901027,0.922296799010268,0.922296798012214,0.922296798012214,0.922296798012214,0.922296797513187);
    var Phd=new Array(0.948294238274253,0.948294238330886,0.94829423844415,0.948294238670677,0.948294239123729,0.948294240029824,0.948294241841968,0.948294245466078,0.948294252713584,0.948294267205747,0.948294296178676,0.948294354078957,0.948294469697299,0.94829470020586,0.948295158316489,0.948296045479741,0.948297755900118,0.948300886694115,0.948305991205328,0.948311592938394,0.948305349768535,0.948276917694237,0.948226119561629,0.948152534194045,0.948055487069874,0.947934026438155,0.947786885935374,0.947612433288346,0.947408600064069,0.947172737736938,0.946901636729297,0.946591105839305,0.946235828832762,0.945828908333926,0.945361218116545,0.944820367796182,0.944188959267764,0.943441446070163,0.94253794234472,0.941410337319526,0.939923981229178,0.937715490726351,0.936121882667504,0.935155060537757,0.935392618302576,0.934293821177899,0.9342725137071,0.934348505235011,0.933832232833745,0.933819176583865,0.933842563247369,0.933594783076991,0.933587961615222,0.933595638256852,0.933474588013722,0.933471140241814,0.933473935888731,0.933474530978945,0.933474626890222,0.933459502955038,0.933459457496982,0.933459488645861,0.933451951614427,0.933451916221933,0.933451952897244,0.933451952255836,0.933451951935132,0.933451007014856,0.933451007071949,0.933451007043403,0.933451007029129,0.933451007021993,0.933450888929254,0.933450888932272,0.933450888930763,0.933450829885923,0.933450829886402,0.933450829886163,0.933450829886043,0.933450815125018,0.933450815125074,0.933450815125046,0.933450807744551,0.933450807744563,0.933450807744557,0.933450804054322,0.933450804054324,0.933450804054322,0.933450802209201);
   
    var idx = 1;
 
  option = {
    title : {
        text: '关键城市风电水电协同输出功率',
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

    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: false},
            saveAsImage : {show: true}
        },
        orient: 'vertical',
		x:'right',
		y:'center',
    },
    calculable : true,
    
    grid: {
        x: 80,
        x2: 20,
        y: 30,
        y2: 25
        },
    
    xAxis : [
        {
            type : 'category',
            data : ['西安','玉树','西宁','长沙','南宁','济南'],
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'输出功率标幺值',
            type:'bar',
            //data:[{d1:2.0 , d2:4.9 , d3:7.0 , d4:23.2 , d5:25.6 , d6:76.7}],
			data:[2.0,4.9,7.0,23.2,25.6,76.7],
        },     
    ]
};


clearInterval(timeTicket);
timeTicket = setInterval(function (){

        option.series[0].data[0]=main_data[Math.ceil(Math.random()*90)];
	option.series[0].data[1]=main_data[Math.ceil(Math.random()*90)];
	option.series[0].data[2]=main_data[Math.ceil(Math.random()*90)];
	option.series[0].data[3]=main_data[Math.ceil(Math.random()*90)];
	option.series[0].data[4]=main_data[Math.ceil(Math.random()*90)];
	option.series[0].data[5]=main_data[Math.ceil(Math.random()*90)];

	
    idx=idx+1;
    if(idx==89) idx=1; 
    myChart.setOption(option,true);
},1000)


</textarea></div>
 <select id="theme-select" hidden="true"></select>
 <span id='wrong-message' style="color:red"></span>
    <script src="../asset/js/jquery.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
	<script type="text/javascript">var timeTicket;</script>
    <script src="../asset/js/echartsExample.js"></script>
</body>
</html>
