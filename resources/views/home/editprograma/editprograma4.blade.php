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
        <input type="hidden" class="layui-input" id="id" name="id" value="{{$data->id}}">
        <div class="layui-form-item">
            <label for="mid" class="layui-form-label">主站ID</label>
            <div class="layui-input-inline" style="width:500px">
                <input type="number" class="layui-input" id="mid" name="mid" value="{{$data->mid}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="name">栏目名称</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="name" id="name" value="{{$data->name}}" placeholder="请输入栏目名称">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="url">网页链接</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input layui-disabled" name="url" id="url" value="{{$data->url}}" disabled>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="rel">rel标签</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="rel" id="rel" value="{{$data->rel}}" placeholder="请填写follow或nofollow">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="title">网页title</label>
            <div class="layui-input-inline" style="width: 500px;">
                <input type="text" class="layui-input" name="title" id="title" value="{{$data1->title}}" placeholder="请填写网页title">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" for="description">description</label>
            <div class="layui-input-inline" style="width: 500px;">
                <textarea class="layui-textarea" name="description" id="description" placeholder="请填写网页description">{{$data1->description}}</textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="lid" class="layui-form-label">排序</label>
            <div class="layui-input-inline" style="width:100px">
                <input type="number" class="layui-input" id="lid" name="lid" value="{{$data->lid}}">
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

    <script type="text/javascript">
        layui.use('form', function() {
            form = layui.form;
            $ = layui.jquery;
            $('.add').on('click', function() {
                var data = {};
                data.id = parseInt($('input[name="id"]').val());
                data.mid = parseInt($('input[name="mid"]').val());
                data.lid = parseInt($('input[name="lid"]').val());
                data.name = $('input[name="name"]').val();
                data.url = $('input[name="url"]').val();
                data.rel = $('input[name="rel"]').val();
                data.title = $('input[name="title"]').val();
                data.description = $('textarea[name="description"]').val();
                data.status = $('input[name="status"]').is(":checked") ? 0 : 1;
                data._method = 'POST';
                data._token = $('input[name="_token"]').val();
                if (data.id == '') {
                    return layer.alert('ID不能为空！', {
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
                if (data.title == '') {
                    return layer.alert('内容不能为空！', {
                        icon: 2
                    });
                }
                if (data.description == '') {
                    return layer.alert('内容不能为空！', {
                        icon: 2
                    });
                }
                $.post('/edittoprograma4', data, function(res) {
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