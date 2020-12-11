<html>

<head>
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <script src="/static/plugins/layui/layui.js"></script>

</head>

<body style="margin-top: 20px;">
<h3>》》》请选择创建主站的模板主题</h3>
<br>
            <a href="/addmainsites1" class="layui-btn layui-btn-normal">官网主题1</a>
            <a class="layui-btn layui-btn-normal a">官网主题2</a>
            <a class="layui-btn layui-btn-normal a">官网主题3</a>
            <a class="layui-btn layui-btn-normal a">官网主题4</a>
            <a class="layui-btn layui-btn-normal a">官网主题5</a>
            <a class="layui-btn layui-btn-normal a">官网主题6</a>
            <a class="layui-btn layui-btn-normal a">官网主题7</a>
            <a class="layui-btn layui-btn-normal a">官网主题8</a>
            <a class="layui-btn layui-btn-normal a">官网主题9</a>
            <a class="layui-btn layui-btn-normal a">官网主题10</a>
            <br>
            <br>
            <br>
            <a class="layui-btn layui-btn-warm a">评测主题1</a>
            <a class="layui-btn layui-btn-warm a">评测主题2</a>
            <a class="layui-btn layui-btn-warm a">评测主题3</a>
            <a class="layui-btn layui-btn-warm a">评测主题4</a>
            <a class="layui-btn layui-btn-warm a">评测主题5</a>
            <a class="layui-btn layui-btn-warm a">评测主题6</a>
            <a class="layui-btn layui-btn-warm a">评测主题7</a>
            <a class="layui-btn layui-btn-warm a">评测主题8</a>
            <a class="layui-btn layui-btn-warm a">评测主题9</a>
            <a class="layui-btn layui-btn-warm a">评测主题10</a>
            <br>
            <br>
            <br>
            <a class="layui-btn a">博客主题1</a>
            <a class="layui-btn a">博客主题2</a>
            <a class="layui-btn a">博客主题3</a>
            <a class="layui-btn a">博客主题4</a>
            <a class="layui-btn a">博客主题5</a>
            <a class="layui-btn a">博客主题6</a>
            <a class="layui-btn a">博客主题7</a>
            <a class="layui-btn a">博客主题8</a>
            <a class="layui-btn a">博客主题9</a>
            <a class="layui-btn a">博客主题10</a>
            <br>
            <br>
            <br>
            <p>更多更好的主题正在努力开发中，如果你有什么好的意向主题，可以推荐哦！</p>
            <script>
                layui.use('layer',function(){
                    layer = layui.layer;
                    $ = layui.jquery;
                    $('.a').on('click',function(){
                        layer.msg("目前只有官网主题1可以用哈，其他都在开发中！~");
                    })
                })
            </script>


</body>

</html>