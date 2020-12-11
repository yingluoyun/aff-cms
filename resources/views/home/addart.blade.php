<html>

<head>
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <script src="/static/plugins/layui/layui.js"></script>

</head>

<body style="margin-top: 20px;">
<h3>》》》请选择发布文章的主站</h3>
<br>
@foreach($data as $da)
            <a href="addarticle?id={{$da->id}}" class="layui-btn" style="margin: 10px;">{{$da->abbr}}【ID:{{$da->id}}】</a>
@endforeach    
            <br>


</body>

</html>