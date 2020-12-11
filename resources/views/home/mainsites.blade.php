<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
  <script src="/static/plugins/layui/layui.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .clear{clear:both;}
  </style>
</head>

<body>
  <div class="qqq" style="height: 620px;">
  <table id="demo" lay-filter="test"></table>
</table>
  </div>

  <script>
    layui.use(['layer','table'], function() {
      var table = layui.table;
      var $ = layui.jquery;
      layer = layui.layer;

      //第一个实例
      table.render({
        elem: '#demo',
        height: 600,
        url: '/getmainsites' //数据接口
          ,
        page: true //开启分页
          ,
        limit: 10
          // ,curr:1
          ,
        cols: [
          [ //表头
            {
              field: 'id',
              title: '主站ID',
              sort: true,
              fixed: 'left'
            }, {
              field: 'abbr',
              title: '主站简称'
            },  {
              field: 'url',
              title: '主站网址'
            }, {
              field: 'theme',
              title: '主站模板ID'
            },{
              field: 'status',
              title: '主站状态',
             
              toolbar: '#barDemo'
            }, {
              title: '操作',
              toolbar: '#operation'
            }
            
          ]
        ]
      });

    });
  </script>

  <script type="text/html" id="barDemo">
  <input type="checkbox" name="zzz" lay-skin="switch" lay-text="开启|关闭" @{{d.status==0?"checked":""}} >
</script>
<script type="text/html" id="operation">
  <a href="/eidtmainsites@{{d.theme}}?id=@{{d.id}}" class="layui-btn layui-btn-sm">编辑</a>
  <a href="javascript:;" class="layui-btn layui-btn-sm layui-btn-danger del" onclick="del(@{{d.id}})">删除</a>

</script>
<a href="/addsite" class="layui-btn layui-btn-lg layui-btn-normal add" style="float: right;">新建站点</a>
<div class="clear"></div>


<script>
  layui.use('layer',function(){
    layer = layui.layer;
    $ = layui.jquery;
  })
  function del(id){
    $.get('/delmainsites/'+id,{_method:'GET'},function(res){
                   if(res.code>0){
                       return layer.alert(res.msg,{icon:2});
                   }
                   layer.msg(res.msg);
                   setTimeout(function(){window.location.reload()},1000)
               },'json')
    }
</script>
</body>

</html>