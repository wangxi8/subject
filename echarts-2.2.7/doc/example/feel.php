<?php 
function myfunction($v){
    return $v*100000;
}
function add($a,$b){
    return $a+$b;
}
  // var_dump($res);
 $wind1 =  [4932.133333333333, 10544.0, 8516.05, 8820.0, 10243.6, 967.0833333333334, 2755.8999999999996, 988.6999999999999, 658.1833333333333, 908.75, 992.7333333333332, 412.76666666666665, 283.7, 1419.9166666666667, 3041.5166666666664, 11562.550000000001, 1777.6000000000001, 14782.516666666668, 4374.283333333333, 11156.35, 1481.9333333333334, 10006.366666666667, 4236.433333333333, 3879.6, 9481.333333333334, 11033.449999999999, 11647.0, 13562.366666666667, 2577.9666666666667, 5401.25, 5401.25, 8216.466666666665, 8921.85, 17313.95, 8053.666666666667, 8525.266666666666, 8525.266666666666, 8585.050000000001, 6709.5, 6709.5, 8053.666666666667, 20790.86666666667, 18748.68333333333, 13339.75, 25057.666666666668, 24921.983333333337, 11175.983333333332, 14663.800000000001, 10393.4, 23404.0, 5501.666666666667, 17471.166666666668, 6170.466666666667, 8247.816666666666, 8247.816666666666, 12789.4, 8009.266666666666, 9982.75, 18986.783333333333, 7637.650000000001, 15203.533333333333, 13111.466666666667, 23377.63333333333, 15853.800000000001, 12968.033333333333, 15322.133333333333, 26215.683333333334, 16088.116666666669, 28870.93333333333, 30748.766666666666, 33996.76666666667, 30811.600000000002, 23582.8, 22039.183333333334, 15029.716666666667, 21041.8, 20228.06666666667, 18396.933333333334, 26067.383333333335, 15671.083333333334, 12868.9, 13270.583333333334, 7528.333333333333, 13118.800000000001, 23383.88333333333, 14961.966666666667, 14310.866666666669, 8974.383333333333, 13299.433333333334, 9384.683333333332, 6059.849999999999, 6388.450000000001, 5346.933333333333, 7295.716666666667, 6388.450000000001, 6388.45];
 $wind = implode(',',$wind1);
 $hydro =  [0.0, -0.23749216776840112, 0.1384807700063877, 0.74410758143671, 1.156938711495225, 1.2103137120239837, 0.9975718333585255, 0.9060339633792267, 0.957863444125775, 1.0926018039422765, 1.1954174515554636, 1.2216504554607646, 1.1850118700418415, 1.140745139671342, 1.1243081800791659, 1.1366602208676129, 1.1232353624266864, 1.1031485697279346, 1.096223843958449, 1.0048858935423488, 0.9249401791341436, 0.8672922563592582, 0.9190979553152538, 0.9818201937975599, 0.9590736519289729, 0.9446210311986505, 0.9346459260425442, 0.8620910667960682, 0.8474564627206016, 0.7636184658685002, 0.8353874819402001, 0.9545072990854826, 0.976394188720876, 0.9307953354952431, 0.7904526994986528, 0.642257743512266, 0.7165908631860591, 0.833597946377989, 0.8798800009314542, 0.9003640031652025, 0.8911758073623884, 0.871109043503487, 0.9101891976274776, 0.8493241398042093, 0.782504504019969, 0.8012454613596336, 0.7677217949965556, 0.7588252599330041, 0.7646270811938045, 0.8084620179077846, 0.8715304510361318, 0.7972993230829597, 0.7087342968044887, 0.7044927360128466, 0.7555699552187931, 0.8473124252147032, 0.9213612627041707, 0.9024396655953002, 0.876840444532874, 0.8519941574576733, 0.8507569114413209, 0.9005321045325905, 0.8394323541017299, 0.804855590968286, 0.7411135543850582, 0.7419580332121938, 0.8059816230595865, 0.8695523081037586, 0.8177933916953009, 0.8004063282753832, 0.705942921010038, 0.6144076113210495, 0.5783331112763391, 0.608226062795402, 0.6246889707636684, 0.6742588714583316, 0.7168977988170452, 0.741376680646288, 0.6900367251212235, 0.7297718284018881, 0.7216996343076003, 0.7664314333670166, 0.7964844260314707, 0.8205745238745843, 0.8436805959795496, 0.9217786845011275, 0.8749423776312684, 0.8182995280600865, 0.7991476182089642, 0.841341335076032, 0.848205314306154, 0.8711464341652098, 0.9144780211846686, 0.9268178931875863, 0.9332069315977995, 0.9430751496625767];
 $hydro1 = array_map("myfunction",$hydro);
 $hydro = implode(',',$hydro1);
 $combined =  implode(',',array_map("add",$wind1,$hydro1));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../../build/dist/echarts.min.js"></script>
    <script src="../asset/js/jquery.min.js"></script>
      <script src="./www/js/echarts.js"></script>
</head>
<body>
    <div id="main" style="width: 350px;height:250px;"></div>
    <script type="text/javascript">

    var symbolSize = 5; 
    // var data = [[0.0000, 1.3333], [28.0000, 1.3333], [30.0000, 3.3333], [42.0000, 3.3333], [44.0000, 2.0000], [68.0000, 2.0000], [70.0000, 3.3333], [82.0000, 3.3333], [84.0000, 2.0000], [90.0000, 2.0000], [92.0000, 1.3333], [96.0000, 1.3333]];
    var data = [[0.0000, 400], [28.0000, 400], [30.0000, 1000], [42.0000, 1000], [44.0000, 600.0000], [68.0000, 600.0000], [70.0000, 1000], [82.0000, 1000], [84.0000, 600.0000], [90.0000, 600.0000], [92.0000, 400], [96.0000, 400]];

    var myChart = echarts.init(document.getElementById('main'));

    myChart.setOption({
        tooltip: {
            triggerOn: 'none',
            formatter: function (params) {
                return 'X: ' + params.data[0].toFixed(2) + '<br>Y: ' + params.data[1].toFixed(2);
            }
        },
        title : {
          text: '上网电价曲线图',
             x:'center',
             y:'top',
    
          textStyle:{
            fontSize:18,
            color:'#04564A'

            },
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
            x:'right',
            y:'center',
        },
        xAxis: {
            min: 0,
            max: 100,
            type: 'value',
            axisLine: {onZero: false}
        },
        yAxis: {
            min: 0,
            max: 1200,
            type: 'value',
            axisLine: {onZero: false}
        },
    grid: {
        x: 40,
        x2: 30,
        y: 40,
        y2: 45
        
    },
        series: [
            {
                id: 'a',
                type: 'line',
                smooth: false,
                symbolSize: symbolSize,
                data: data
            }
        ],
    });

    myChart.setOption({
        graphic: echarts.util.map(data, function (item, dataIndex) {
            return {
                type: 'circle',
                position: myChart.convertToPixel('grid', item),
                shape: {
                    r: symbolSize / 2
                },
                invisible: true,
                draggable: true,
                ondrag: echarts.util.curry(onPointDragging, dataIndex),
                onmousemove: echarts.util.curry(showTooltip, dataIndex),
                onmouseout: echarts.util.curry(hideTooltip, dataIndex),
                z: 100
            };
        })
    });

    window.addEventListener('resize', function () {
        myChart.setOption({
            graphic: echarts.util.map(data, function (item, dataIndex) {
                return {
                    position: myChart.convertToPixel('grid', item)
                };
            })
        });
    });

    function showTooltip(dataIndex) {
        myChart.dispatchAction({
            type: 'showTip',
            seriesIndex: 0,
            dataIndex: dataIndex
        });
    }

    function hideTooltip(dataIndex) {
        myChart.dispatchAction({
            type: 'hideTip'
        });
    }

    function onPointDragging(dataIndex, dx, dy) {
        data[dataIndex] = myChart.convertFromPixel('grid', this.position);
        myChart.setOption({
            series: [{
                id: 'a',
                data: data
            }]
        });
        $.ajax({
            url: './1.php',
            type: 'get',
            dataType: '',
            data: {data: data},
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
        console.log(data);
    }
    myChart.on('data_changed', function (params) {
        // 控制台打印数据的名称
        console.log(params);
    });
//     var ecConfig = require('echarts/config');
// myChart.on(ecConfig.EVENT.CLICK, eConsole);
// myChart.on(ecConfig.EVENT.DBLCLICK, eConsole);
// //myChart.on(ecConfig.EVENT.HOVER, eConsole);
// myChart.on(ecConfig.EVENT.DATA_ZOOM, eConsole);
// myChart.on(ecConfig.EVENT.LEGEND_SELECTED, eConsole);
// myChart.on(ecConfig.EVENT.MAGIC_TYPE_CHANGED, eConsole);
// myChart.on(ecConfig.EVENT.DATA_VIEW_CHANGED, eConsole)
function eConsole(param) {
    // var mes = '【' + param.type + '】';
    // if (typeof param.seriesIndex != 'undefined') {
    //     mes += '  seriesIndex : ' + param.seriesIndex;
    //     mes += '  dataIndex : ' + param.dataIndex;
    // }
    // if (param.type == 'hover') {
    //     document.getElementById('hover-console').innerHTML = 'Event Console : ' + mes;
    // }
    // else {
    //     document.getElementById('console').innerHTML = mes;
    // }
    console.log(param);
}
</script>
</body>
</html>