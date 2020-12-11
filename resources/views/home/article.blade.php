<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
  <script src="/static/plugins/layui/layui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .clear{clear:both;}
    /* 待处理BUG */
/* .layui-table-cell {
height: 100px;
width: 100px;
max-width: 100%;
} */
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
        url: '/getarticles' //数据接口
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
              title: '文章ID',
              width:88, 
              sort: true,
              fixed: 'left'
            }, {
              field: 'title',
              width:280, 
              title: '文章标题'
            }, {
              field: 'like',
              width:88, 
              title: '点赞人数'
            }, {
              field: 'dislike',
              width:88, 
              title: '踩踏人数'
            }, {
              field: 'view',
              title: '阅读人数',
            }, {
              toolbar: '#created_at',
              title: '创建日期',
            }, {
              toolbar: '#updated_at',
              title: '修改日期',
            }, {
              field: 'mid',
              title: '归属主站ID',
            }, {
              field: 'status',
              title: '状态',
              width:100,
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
<script type="text/html" id="created_at">
@{{layui.util.toDateString(d.created_at.date, 'yyyy-MM-dd')}}
</script>
<script type="text/html" id="updated_at">
@{{layui.util.toDateString(d.updated_at.date, 'yyyy-MM-dd')}}
</script>
<script type="text/html" id="imgurltoo">
<div style="height:200px;width:200px">
<img src="@{{d.imgurl}}" alt=""  style="height:200px;width:200px"></script>
</div>
<script type="text/html" id="operation">
  <a href="/eidtarticle?id=@{{d.id}}" class="layui-btn layui-btn-sm">编辑</a>
  <a href="javascript:;" class="layui-btn layui-btn-sm layui-btn-danger del" onclick="del(@{{d.id}})">删除</a>

</script>

<a class="layui-btn layui-btn-lg layui-btn-normal add" style="float: right;" href="/addart">添加文章</a>
<div class="clear"></div>


<script>
  layui.use('layer',function(){
    layer = layui.layer;
    $ = layui.jquery;
  
  })
  function del(id){
    $.get('/delarticle/'+id,{_method:'GET'},function(res){
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