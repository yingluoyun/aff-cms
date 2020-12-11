<html>

<head>
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <script src="/static/plugins/layui/layui.js"></script>

</head>

<body style="margin-top: 20px;">
    <h3>》》》请选择主站</h3>
    <br>
    @foreach($data as $da)
    <a href="addsubsites{{$da->theme}}?mid={{$da->id}}&theme={{$da->theme}}" class="layui-btn" style="margin: 10px;">{{$da->abbr}}【ID:{{$da->id}}】</a>
    @endforeach
    <br>
    <br>
    <br>
    <h3 style="color: red;">小提示：在添加子站页面时，内容框填“parent”，可以直接继承主站相应区域的内容！</h3>



</body>

</html>