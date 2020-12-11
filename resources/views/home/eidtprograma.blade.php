<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
     <script src="/static/plugins/layui/layui.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="layui-form">
    @csrf
    <input name="id" id="id"  type="hidden" value="{{$data->id}}">
    <input name="mid" id="mid"  type="hidden" value="{{$data->mid}}">
        <div class="layui-form-item">
            <label class="layui-form-label" for="name">网页名称</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="name" id="name" value="{{$data->name}}" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="url">网页链接</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="url" id="url" value="{{$data->url}}" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="rel">网页rel</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="rel" id="rel" value="{{$data->rel}}" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="title">网页title</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="title" id="title" value="{{$data->title}}" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="description">description</label>
            <div class="layui-input-inline" style="width: 500px;">
                <textarea  class="layui-textarea" name="description" id="description">{{$data->description}}</textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="description">网页content</label>
            <div class="layui-input-inline" style="width: 900px;">
            <script id="container" name="content" type="text/plain" style="width: 900px;height:400px">
            {!!$data->content!!}
             </script>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="lid" class="layui-form-label">排序</label>
            <div class="layui-input-inline" style="width:100px">
                <input type="text" class="layui-input" id="lid" name="lid" value="{{$data->lid}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="status" class="layui-form-label">状态</label>
            <div class="layui-input-inline" style="width:100px">
                <input type="checkbox" lay-skin="switch" lay-text="开启|关闭" id="status" name="status" {{$data->status==0?"checked":""}}>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label"></label>
     
               <button class="layui-btn layui-btn-lg add" id="add">更新</button>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>


      <!-- 配置文件 -->
  <script type="text/javascript" src="/static/plugins/ueditor/ueditor.config.js"></script>
  <!-- 编辑器源码文件 -->
  <script type="text/javascript" src="/static/plugins/ueditor/ueditor.all.js"></script>
  <!-- 实例化编辑器 -->
  <script type="text/javascript">
    var ue = UE.getEditor('container');
    layui.use('form',function(){
        form = layui.form;
        $ = layui.jquery;
        $('.add').on('click',function(){
            var data = {};
            data.id = parseInt($('input[name="id"]').val());
            data.mid = parseInt($('input[name="mid"]').val());
            data.lid = parseInt($('input[name="lid"]').val());
            data.name = $('input[name="name"]').val();
            data.url = $('input[name="url"]').val();
            data.rel = $('input[name="rel"]').val();
            data.title = $('input[name="title"]').val();
            data.description = $('textarea[name="description"]').val();
            data.content = ue.getContent();
            data.status = $('input[name="status"]').is(":checked") ? 0 : 1;
            data._method = 'POST';
            data._token = $('input[name="_token"]').val();
            $.post('/eidttoprograma',data,function(res){
                if (res.code > 0) {
                        return layer.alert(res.msg, {
                            icon: 2
                        });
                    }
                    layer.msg(res.msg);
                    setTimeout(function() {
                        window.history.go(-1);
                    }, 1000)
            },'json')
        })
        
    });
  </script>
</body>
</html>