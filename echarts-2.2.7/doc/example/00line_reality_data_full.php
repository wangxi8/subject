<?php
$myfile = fopen("./matlab/reality_data/total.txt", "r") or die("Unable to open file!");
$wind = fopen("./matlab/reality_data/wind.txt", "r") or die("Unable to open file!");
$hydro = fopen("./matlab/reality_data/hydro.txt", "r") or die("Unable to open file!");
$total =  fread($myfile,filesize("./matlab/reality_data/total.txt"));
$wind =  fread($wind,filesize("./matlab/reality_data/wind.txt"));
// var_dump($wind);


$wind = explode(',', $wind);
$totalarr = explode(',', $total);
//1111111111111111111111111111111111111111111
// $total = explode(',', $total);
// for ($m=0; $m < count($total); $m++) { 
//     if($m%2 == 0) continue;
//     unset($total[$m]);
// }
// $total = implode( $total,',');
// for ($n=0; $n < count($wind); $n++) { 
//     if($n%2 == 0) continue;
//     unset($wind[$n]);
// }
// $wind = implode( $wind,',');
//1111111111111111111111111111111111111111111
//222222222222222222222222222222222222222222222222222222

$windpro = $wind;
$winds = [];
for ($i=0; $i < count($wind); $i++) { 
    $b = $i+1;
        if ($b == 96) 
        continue;
    $a = $wind[$b]-$wind[$i];
    // $winds[$i] = $wind[$i];
    if($i == 0)
        $winds[$i] = $wind[$i];
// echo $a;
    if(abs($a)>0.10 ){
        // echo $i;
        $winds[$b] = $wind[$i] + $a*0.3;
        $wind[$b] = $wind[$i];
    }else{
        $winds[$b] = $wind[$i];
    }
}
$wind = implode($winds, ',');
//222222222222222222222222222222222222222222222222222222

// var_dump($wind);

// exit;
$hydro =  fread($hydro,filesize("./matlab/reality_data/hydro.txt"));

$hydro = explode(',',$hydro);
//1111111111111111111111111111111111111111111

// for ($o=0; $o < count($hydro); $o++) { 
//     if($o%2 == 0) continue;
//     unset($hydro[$o]);
// }
//1111111111111111111111111111111111111111111
//222222222222222222222222222222222222222222222222222222
// for ($j=0; $j < count($hydro); $j++) { 
//     $hydro[$j] = $totalarr[$j]-$winds[$j];
//     // echo $c;
//     // $hydro[$j] = $hydro[$j]+$c;
// }\
//222222222222222222222222222222222222222222222222222222
$hydro = implode($hydro, ',');  
fclose($myfile);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <!-- 引入 echarts.js -->
    <script src="../../build/dist/echarts.min.js"></script>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="width: 1000px;height:600px;margin:50px auto;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

var base = +new Date(1968, 9, 3);
var oneDay = 24 * 3600 * 1000;
var date = [];

var total = [<?php echo $total?>];
var wind = [<?php echo $wind?>];
var hydro = [<?php echo $hydro?>];

// for (var i = 1; i < 20000; i++) {
//     var now = new Date(base += oneDay);
//     date.push([now.getFullYear(), now.getMonth() + 1, now.getDate()].join('/'));
//     data.push(Math.round((Math.random() - 0.5) * 20 + data[i - 1]));
// }

option = {
    tooltip: {
        trigger: 'axis',
        position: function (pt) {
            return [pt[0], '10%'];
        }
    },
    title: {
        left: 'center',
        text: '风电、水电、风水协同输出功率96节点曲线图',
                subtext: '下一页',  
        sublink:'./00line_reality_data_full.php',
        subtarget:'self',
        padding: 5,
    },
    toolbox: {
        feature: {
            dataZoom: {
                yAxisIndex: 'none'
            },
            restore: {},
            saveAsImage: {}
        }
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: [<?php for($i=0;$i<96;$i++){
//1111111111111111111111111111111111111111111
              
                // if($i%2 != 0) continue;
//1111111111111111111111111111111111111111111
              
                echo $i.','; 
            }?>]
    },
    yAxis: {
        type: 'value',
        boundaryGap: [0, '100%'],
        max:1.4,
        min:0,
        name:'有功功率/标幺值',
        splitNumber:7
    },
    legend:{
        data:['总输出', '风电', '水电'],
        x:'center',
        y:'bottom'
    },
    // dataZoom: [{
    //     type: 'inside',
    //     start: 0,
    //     end: 10
    // }, {
    //     start: 0,
    //     end: 10,
    //     handleIcon: 'M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z',
    //     handleSize: '80%',
    //     handleStyle: {
    //         color: '#fff',
    //         shadowBlur: 3,
    //         shadowColor: 'rgba(0, 0, 0, 0.6)',
    //         shadowOffsetX: 2,
    //         shadowOffsetY: 2
    //     }
    // }],
    series: [
        {
            name:'总输出',
            type:'line',
            smooth:true,
            symbol: 'none',
            sampling: 'average',
            itemStyle: {
                normal: {
                    color: 'rgb(255, 70, 131)'
                }
            },
            areaStyle: {
                normal: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: 'rgb(255, 158, 68)'
                    }, {
                        offset: 1,
                        color: 'rgb(255, 70, 131)'
                    }])
                }
            },
            data: total
        },
        {
            name:'风电',
            type:'line',
            smooth:true,
            symbol: 'none',
            sampling: 'average',
            itemStyle: {
                normal: {
                    color: 'rgb(255,255,125)'
                }
            },
            areaStyle: {
                normal: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: 'rgba(255,255,125,0.5)'
                    }, {
                        offset: 1,
                        color: 'rgba(255,255,125,0.5)'
                    }])
                }
            },
            data: wind
        },
        {
            name:'水电',
            type:'line',
            smooth:true,
            symbol: 'none',
            sampling: 'average',
            itemStyle: {
                normal: {
                    color: 'rgb(82,166,71)'
                }
            },
            areaStyle: {
                normal: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: 'rgba(82,166,71,0.1)'
                    }, {
                        offset: 1,
                        color: 'rgba(82,166,71,0.1)'
                    }])
                }
            },
            data: hydro
        },
    ]
};



        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
</body>
</html>
