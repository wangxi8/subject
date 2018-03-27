<?php
function matha($x){
    return 1/0.4*sqrt(2*pi())*Exp(-0.5*pow(($x-1)/0.4,2));
}
$x_str  = '';
$y_str  = '';
for($i=-5;$i<=5;$i=$i+0.05){  
    $x_str .= $i.'\t';
    $y_str .= matha($i).'\t';

}
touch("newfile.txt");
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "x:\n";
fwrite($myfile, "x:\n".$x_str);
$txt = "y：\n";
fwrite($myfile, "y:\n".$y_str);
fclose($myfile);
var_dump($x_str);
var_dump($y_str);exit;

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
    <div id="main" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

var base = +new Date(1968, 9, 3);
var oneDay = 24 * 3600 * 1000;
var date = [];

var x_str = [<?php echo $x_str?>];
var y_str = [<?php echo $y_str?>];

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
        data: x_str
    },
    yAxis: {
        type: 'value',
        boundaryGap: [0, '100%'],
        max:8,
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
            data: y_str
        },
    ]
};



        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
</body>
</html>
