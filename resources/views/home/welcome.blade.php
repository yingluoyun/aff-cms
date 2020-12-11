<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
  <script src="/static/plugins/layui/layui.js"></script>
  <script src="/static/plugins/echarts/dist/echarts.min.js"></script>
    <style>
        body{background-color: #f2f2f2;color: #666;}
        .container{padding: 10px;}
        .pad{margin: 5px;}
        .layuiadmin-big-font{font-size: 30px;margin: 10px 0;}
        .layuiadmin-badge,.layuiadmin-span-color{float: right;}
        .layuiadmin-btn-group{float: right;}
        .layuiadmin-normal-font{margin: 15px 0;font-size:20px;}         
        </style>
</head>
<body>
<div class="container">
<div class="layui-col-sm6 layui-col-md3 ">
      <div class="layui-card pad">
        <div class="layui-card-header">
          主站数
          <span class="layui-badge layui-bg-blue layuiadmin-badge">努力</span>
        </div>
        <div class="layui-card-body layuiadmin-card-list">
          <p class="layuiadmin-big-font">{{$main_sites}}</p>
       
        </div>
      </div>
    </div>
    <div class="layui-col-sm6 layui-col-md3 ">
      <div class="layui-card pad">
        <div class="layui-card-header">
          子站数
          <span class="layui-badge layui-bg-red layuiadmin-badge">奋斗</span>
        </div>
        <div class="layui-card-body layuiadmin-card-list">
          <p class="layuiadmin-big-font">{{$sub_sites}}</p>
        </div>
      </div>
    </div>
    <div class="layui-col-sm6 layui-col-md3 ">
      <div class="layui-card pad">
        <div class="layui-card-header">
          文章数
          <span class="layui-badge layui-bg-orange   layuiadmin-badge">加油</span>
        </div>
        <div class="layui-card-body layuiadmin-card-list">
          <p class="layuiadmin-big-font">{{$article_list}}</p>
        </div>
      </div>
    </div>
    <div class="layui-col-sm6 layui-col-md3 ">
      <div class="layui-card pad">
        <div class="layui-card-header">
          访问量
          <span class="layui-badge layui-bg-green  layuiadmin-badge">加油</span>
        </div>
        <div class="layui-card-body layuiadmin-card-list">
          <p class="layuiadmin-big-font">{{$visit}}</p>
    
        </div>
      </div>
    </div>

    <div class="layui-col-sm12" style="margin-top: 10px;padding:5px">
      <div class="layui-card">
        <div class="layui-card-header">
          访问量（开发中）
          <div class="layui-btn-group layuiadmin-btn-group">
            <button class="layui-btn layui-btn-primary layui-btn-xs">去年</button>
            <button class="layui-btn layui-btn-primary layui-btn-xs">今年</button>
          </div>
        </div>
        <div class="layui-card-body">
          <div class="layui-row">
            <div class="layui-col-sm8">
                <div class=" layadmin-carousel layadmin-dataview" data-anim="fade" lay-filter="LAY-index-pagetwo" lay-anim="fade" style="width: 100%; height: 360px;">
                <div id="main" style="width:100%;height:360px;"></div>
                </div>
            </div>
            <div class="layui-col-sm4">
              <div class="layuiadmin-card-list">
                <p class="layuiadmin-normal-font">月访问数</p>
                <span>同上期增长</span>
                <div class="layui-progress layui-progress-big" lay-showpercent="yes">
                  <div class="layui-progress-bar" lay-percent="30%" style="width: 30%;"><span class="layui-progress-text">30%</span></div>
                </div>
              </div>
              <div class="layuiadmin-card-list">
                <p class="layuiadmin-normal-font">月注册数</p>
                <span>同上期增长</span>
                <div class="layui-progress layui-progress-big" lay-showpercent="yes">
                  <div class="layui-progress-bar" lay-percent="20%" style="width: 20%;"><span class="layui-progress-text">20%</span></div>
                </div>
              </div>
              <div class="layuiadmin-card-list">
                <p class="layuiadmin-normal-font">月支付数</p>
                <span>同上期增长</span>
                <div class="layui-progress layui-progress-big" lay-showpercent="yes">
                  <div class="layui-progress-bar" lay-percent="25%" style="width: 25%;"><span class="layui-progress-text">25%</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="layui-col-sm12" style="margin-top: 10px;padding:5px">
      <div class="layui-card">
        <div class="layui-card-header">
          访问分析（开发中）
          <div class="layui-btn-group layuiadmin-btn-group">
            <button class="layui-btn layui-btn-primary layui-btn-xs">去年</button>
            <button class="layui-btn layui-btn-primary layui-btn-xs">今年</button>
          </div>
        </div>
        <div class="layui-card-body">
          <div class="layui-row">
            <div class="layui-col-sm8">
                <div class=" layadmin-carousel layadmin-dataview" data-anim="fade" lay-filter="LAY-index-pagetwo" lay-anim="fade" style="width: 100%; height: 48px;">
                
                </div>
            </div>
            <div class="layui-col-sm4">
           
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
<script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        setTimeout(function () {

option = {
    legend: {},
    tooltip: {
        trigger: 'axis',
        showContent: false
    },
    dataset: {
        source: [
            ['product', '1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
            ['站点A', 4100, 3000, 6050, 5030, 8300, 9080, 4010, 3000, 6050, 5300, 8030, 9080],
            ['站点B', 8600, 9200, 8050, 8030, 7300, 5050, 2040, 6070, 7090, 8600, 6050, 8020],
            ['站点C', 2400, 6700, 7090, 8060, 6500, 8020, 8060, 9020, 8050, 8300, 7030, 5050],
            ['站点D', 5500, 6700, 6090, 7020, 5300, 3090, 5050, 6070, 6090, 7200, 5030, 3090],
            ['站点E', 3500, 4700, 3090, 1020, 4300, 2090, 4050, 1070, 4090, 7200, 4030, 2090]
        ]
    },
    xAxis: {type: 'category'},
    yAxis: {gridIndex: 0},
    grid: {top: '55%'},
    series: [
        {type: 'line', smooth: true, seriesLayoutBy: 'row'},
        {type: 'line', smooth: true, seriesLayoutBy: 'row'},
        {type: 'line', smooth: true, seriesLayoutBy: 'row'},
        {type: 'line', smooth: true, seriesLayoutBy: 'row'},
        {type: 'line', smooth: true, seriesLayoutBy: 'row'},
        {
            type: 'pie',
            id: 'pie',
            radius: '30%',
            center: ['50%', '25%'],
            label: {
                formatter: '{b}: {@1月} ({d}%)'
            },
            encode: {
                itemName: 'product',
                value: '1月',
                tooltip: '1月'
            }
        }
    ]
};

myChart.on('updateAxisPointer', function (event) {
    var xAxisInfo = event.axesInfo[0];
    if (xAxisInfo) {
        var dimension = xAxisInfo.value + 1;
        myChart.setOption({
            series: {
                id: 'pie',
                label: {
                    formatter: '{b}: {@[' + dimension + ']} ({d}%)'
                },
                encode: {
                    value: dimension,
                    tooltip: dimension
                }
            }
        });
    }
});

myChart.setOption(option);

});
        // 使用刚指定的配置项和数据显示图表。
       // myChart.setOption(option);
    </script>
</body>
</html>