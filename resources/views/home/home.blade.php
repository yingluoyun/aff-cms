<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <script src="/static/plugins/layui/layui.js"></script>
    <title>AFF-CMS HOME</title>
    <style>
        body,
        html {
            overflow: hidden;
        }

        aside {
            position: absolute;
            width: 200px;
        }

        .main {
            position: absolute;
            left: 200px;
            right: 0px;
            height: 100%;
            padding: 10px;
        }

        .main iframe {
            width: 100%;
            height: 100%
        }
        .layui-nav-side li a{font-size:16px;font-weight: 300;}
        .layui-nav-side li i{font-size:16px;font-weight: 300;}
        .layui-nav-side li {margin-top: 6px;}
    </style>
</head>

<body>

    <aside>
        <ul class="layui-nav layui-nav-tree layui-nav-side  " lay-filter="test" style="background-color: black;">
        <div class="layui-logo" lay-href="home/console.html" style="text-align:center;height:40px;line-height:40px;margin:10px" >
            <span style="font-size:18px">AFF-CMS 1.0.1</span>
          </div> 
        <li class="layui-nav-item" >
                <a href="javascript:;" >
                    <i class="layui-icon layui-icon-website"></i>&nbsp;&nbsp;
                    站点管理</a>
                <dl class="layui-nav-child">
                    <dd> <a href="/mainsites" target="myiframe" >主站列表</a></dd>
                    <dd><a href="/subsites" target="myiframe" >子站列表</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-read"></i>&nbsp;&nbsp;
                文章管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="/article" target="myiframe">文章列表</a></dd>

                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="layui-icon layui-icon-dialogue"></i>&nbsp;&nbsp;
                    评论管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="">开发中</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="layui-icon layui-icon-search"></i>&nbsp;&nbsp;
                    文章采集</a>
                <dl class="layui-nav-child">
                    <dd><a href="">开发中</a></dd>
                    <dd><a href="">开发中</a></dd>

                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="layui-icon layui-icon-unlink"></i>&nbsp;&nbsp;
                    谷歌推送</a>
                <dl class="layui-nav-child">
                    <dd><a href="">开发中</a></dd>

                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"> <i class="layui-icon layui-icon-chart"></i>&nbsp;&nbsp;
                    访问统计</a>
                <dl class="layui-nav-child">
                    <dd><a href="">开发中</a></dd>
                </dl>
            </li>
            <!-- <li class="layui-nav-item"><a href="">产品</a></li>
            <li class="layui-nav-item"><a href="">大数据</a></li> -->
        </ul>

        <script>
            //注意：折叠面板 依赖 element 模块，否则无法进行功能性操作
            layui.use(['element', 'layer'], function() {
                var element = layui.element;
                var $ = layui.jquery;
                var layer = layui.layer;

                $('#return').on('click', function() {
                    window.frames["myiframe"].history.back(-1);
                })

                $('#refresh').on('click', function() {
                    console.log(window.frames["myiframe"]);
                    window.frames["myiframe"].location.reload();
                })

                $('#logout').on('click',function(){
                    $.get('/logout',function(res){
                   if(res.code>0){
                       return layer.alert(res.msg,{icon:2});
                   }
                   layer.msg(res.msg);
                   setTimeout(function(){window.location.href='/login';},1000)
               },'json')
                })

            });
        </script>

    </aside>

    <main>
        <div class="main">
            <div class="header" style="margin-top:10px;border-bottom: solid rgb(236, 229, 229,0.1) ;padding-bottom:10px;">
            <a style="margin-left: 20px;" id="home" href="/welcome" target="myiframe"><i class="layui-icon layui-icon-home"></i></a>
             <a style="margin:0 12px;" id="return" href="javascript:;"><i class="layui-icon layui-icon-return"></i></a>
             <a id="refresh" href="javascript:;"><i class="layui-icon layui-icon-refresh-1"></i></a>
            <div style="float: right;margin-right:20px">
        <a href="/change" target="myiframe"><i class="layui-icon layui-icon-user"></i>&nbsp;修改信息</a>
        <a href="javascript:;" id="logout" style="margin-left: 10px;"><i class="layui-icon layui-icon-logout"></i>&nbsp;退出</a>
    </div>
            </div>
            <iframe id="myiframe" name="myiframe" frameborder="0" src="/welcome" onload="resetIframeHeight(this)"></iframe>
        </div>
    </main>

</body>

</html>