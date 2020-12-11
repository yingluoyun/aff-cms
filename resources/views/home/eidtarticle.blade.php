<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <script src="/static/plugins/layui/layui.js"></script>
</head>

<style>
    @media(max-width:1000px){
        img{display: none;}
    }
  
</style>

<body style="padding: 20px;">
    <div class="layui-form" >
        @csrf
        <input name="id" id="id"  type="hidden" value="{{$data->id}}">
        <div class="" style="position: absolute;right:50px;top:0px">
            <img src="{{$data->img}}" alt=""  id="imgurl1" width="360" height="360">
           
            <button type="button" class="layui-btn layui-btn-sm btn_img" id="btn_img">
                <i class="layui-icon">&#xe67c;</i>上传缩略图
            </button>
           
        </div>
        <div class="layui-form-item">
            <label for="imgurl" class="layui-form-label">缩略图</label>
            <div class="layui-input-inline" style="width: 450px;">
                <input type="text" id="imgurl" name="imgurl" class="layui-input" value="{{$data->img}}">

            </div>
        </div>
        <div class="layui-form-item">
            <label for="mid" class="layui-form-label">站点ID</label>
            <div class="layui-input-inline" style="width: 450px;">
                <input type="number" id="mid" name="mid" class="layui-input" value="{{$data->mid}}">

            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="url">文章链接</label>
            <div class="layui-input-inline" style="width: 450px;">
                <input type="text" class="layui-input" name="url" id="url" value="{{$data->url}}" placeholder="标准格式为/best-dating-xxx-xxx.html（不能用空格、大写及其他符号）">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="tag">文章tagID</label>
            <div class="layui-input-inline" style="width: 450px;">
                <input type="number" class="layui-input" name="tag" id="tag" value="{{$data->tag}}" placeholder="aff-cms1.0.1此主题无tag功能，填0即可" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="title">文章标题</label>
            <div class="layui-input-inline" style="width: 450px;">
                <input type="text" class="layui-input" name="title" id="title" value="{{$data->title}}" placeholder="请填写文章标题">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="description">description</label>
            <div class="layui-input-inline" style="width: 450px;">
            <textarea  class="layui-textarea" name="description" id="description" placeholder="请填写网页描述">{{$data->description}}</textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="like">点赞数</label>
            <div class="layui-input-inline" style="width: 450px;">
            <input type="number" class="layui-input" name="like" id="like" value="{{$data->like}}" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="dislike">踩踏数</label>
            <div class="layui-input-inline" style="width: 450px;">
            <input type="number" class="layui-input" name="dislike" id="dislike" value="{{$data->dislike}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="view">阅读数</label>
            <div class="layui-input-inline" style="width: 450px;">
            <input type="number" class="layui-input" name="view" id="view" value="{{$data->view}}" >
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="container"></label>
            <div class="layui-input-inline" style="width: 100%;">
                <script id="container" name="content" type="text/plain" style="width: 100%;height:500px">{!!$data1->content!!}</script>
            </div>
        </div>

        <div class="layui-form-item" style="float:right">
            <input type="checkbox" lay-skin="switch" lay-text="显示|隐藏" id="status" name="status" {{$data->status==0?"checked":""}}>
            <button class="layui-btn layui-btn-lg add" id="add">更新</button>

        </div>
        <div class="" style="clear: both;"></div>
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
        layui.use(['form', 'layer', 'upload', 'element'], function() {
            form = layui.form;
            layer = layui.layer;
            $ = layui.jquery;
            upload = layui.upload;
            element = layui.element;
            var _token = $('input[name="_token"]').val();
            var uploadInst = upload.render({
                elem: '#btn_img' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#imgurl1').attr('src', res.data.src);
                    $('input[name="imgurl"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            $('.add').on('click', function() {
                var data = {};
                data.url = $('input[name="url"]').val();
                data.tag = $('input[name="tag"]').val();
                data.img = $('input[name="imgurl"]').val();
                data.mid = $('input[name="mid"]').val();
                data.id = $('input[name="id"]').val();
                data.title = $('input[name="title"]').val();
                data.dislike = $('input[name="dislike"]').val();
                data.like = $('input[name="like"]').val();
                data.view = $('input[name="view"]').val();
                data.description = $('textarea[name="description"]').val();
                data.content = ue.getContent();
                data.status = $('input[name="status"]').is(":checked") ? 0 : 1;
                data._method = 'POST';
                data._token = $('input[name="_token"]').val();
                if(data.url==''){
			    return layer.alert('网址不能为空！',{icon:2});}
                if(data.id==''){
			    return layer.alert('文章ID不能为空！',{icon:2});}
                if(isNaN(data.view)){
			    return layer.alert('view只能为数字！',{icon:2});}
                if(data.view==''){
			    return layer.alert('view不能为空！',{icon:2});}
                if(isNaN(data.dislike)){
			    return layer.alert('dislike只能为数字！',{icon:2});}
                if(data.dislike==''){
			    return layer.alert('dislike不能为空！',{icon:2});}
                if(isNaN(data.like)){
			    return layer.alert('like只能为数字！',{icon:2});}
                if(data.like==''){
			    return layer.alert('like不能为空！',{icon:2});}
                if(isNaN(data.tag)){
			    return layer.alert('tagID只能为数字！',{icon:2});}
                if(data.tag==''){
			    return layer.alert('tagID不能为空！',{icon:2});}
                if(data.img==''){
			    return layer.alert('缩略图url不能为空！',{icon:2});}
                if(data.mid==''){
			    return layer.alert('主站ID不能为空！',{icon:2});}
                if(data.title==''){
			    return layer.alert('文章Title不能为空！',{icon:2});}
                if(data.description==''){
			    return layer.alert('Description不能为空！',{icon:2});}
                if(data.content==''){
			    return layer.alert('文章内容不能为空！',{icon:2});}
                $.post('/eidttoarticle', data, function(res) {
                    if (res.code > 0) {
                        return layer.alert(res.msg, {
                            icon: 2
                        });
                    }
                    layer.msg(res.msg);
                    setTimeout(function() {
                        window.history.go(-1);
                    }, 1000)
                }, 'json')
            })

        });
    </script>
</body>

</html>