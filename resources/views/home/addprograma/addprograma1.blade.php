<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <script src="/static/plugins/layui/layui.js"></script>
</head>

<body>
    <div class="layui-form" style="padding: 10px;">
        @csrf
        <input type="hidden" class="layui-input" name="type" id="type" value="1">
        <input type="hidden" class="layui-input" name="mid" id="mid" value="{{$mid}}">
        <div class="layui-form-item">
            <label class="layui-form-label" for="name">栏目名称</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="name" id="name" value="" placeholder="请输入栏目名称">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="url">网页链接</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="url" id="url" value="" placeholder="标准格式为/best-dating-xxx-xxx.html（不能用空格、大写及其他符号）">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="rel">rel标签</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="rel" id="rel" value="" placeholder="请填写follow或nofollow">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="redirect">重定向链接</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="redirect" id="redirect" value="" placeholder="标准格式为https://www.google.com/best-dating-xxx-xxx.html">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="lid" class="layui-form-label">栏目排序</label>
            <div class="layui-input-inline" style="width:100px">
                <input type="number" class="layui-input" id="lid" name="lid" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="status" class="layui-form-label">状态</label>
            <div class="layui-input-inline" style="width:100px">
                <input type="checkbox" lay-skin="switch" lay-text="开启|关闭" id="status" name="status" checked>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label"></label>

            <button class="layui-btn layui-btn-lg add" id="add">添加</button>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>


    <script type="text/javascript">
        layui.use('form', function() {
            form = layui.form;
            $ = layui.jquery;
            $('.add').on('click', function() {
                var data = {};
                data.type = parseInt($('input[name="type"]').val());
                data.mid = parseInt($('input[name="mid"]').val());
                data.rel = $('input[name="rel"]').val();
                data.lid = $('input[name="lid"]').val();
                data.name = $('input[name="name"]').val();
                data.url = $('input[name="url"]').val();
                data.redirect = $('input[name="redirect"]').val();
                data.status = $('input[name="status"]').is(":checked") ? 0 : 1;
                data._method = 'POST';
                data._token = $('input[name="_token"]').val();
                if (data.type == '') {
                    return layer.alert('type不能为空！', {
                        icon: 2
                    });
                }
                if (data.rel == '') {
                    return layer.alert('rel标签不能为空！', {
                        icon: 2
                    });
                }
                if (data.mid == '') {
                    return layer.alert('mid不能为空！', {
                        icon: 2
                    });
                }
                if (data.lid == '') {
                    return layer.alert('排序不能为空！', {
                        icon: 2
                    });
                }
                if (data.name == '') {
                    return layer.alert('栏目名称不能为空！', {
                        icon: 2
                    });
                }
                if (data.url == '') {
                    return layer.alert('网址不能为空！', {
                        icon: 2
                    });
                }
                if (data.redirect == '') {
                    return layer.alert('重定向地址不能为空！', {
                        icon: 2
                    });
                }
                $.post('/addtoprograma1', data, function(res) {
                    if (res.code > 0) {
                        return layer.alert(res.msg, {
                            icon: 2
                        });
                    }
                    layer.msg(res.msg);
                    setTimeout(function() {
                        history.go(-1);
                    }, 1000)
                }, 'json')
            })

        });
    </script>
</body>

</html>