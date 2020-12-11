<html>

<head>
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <script src="/static/plugins/layui/layui.js"></script>

</head>

<body style="margin-top: 50px;">
<div class="container" style="margin: 0 auto;height:300px;width:500px">
            <div  class="layui-form"  >
                <div class="layui-form-item">
                    <label for="username1" class="layui-form-label">用户名</label>
                    <div class="layui-input-inline">
                        <input type="text" id="username1" name="username1" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="password1" class="layui-form-label">旧密码</label>
                    <div class="layui-input-inline">
                        <input type="password" id="password1" name="password1" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="username2" class="layui-form-label">新名称</label>
                    <div class="layui-input-inline">
                        <input type="text" id="username2" name="username2" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="password2" class="layui-form-label">新密码</label>
                    <div class="layui-input-inline">
                        <input type="password" id="password2" name="password2" class="layui-input">
                    </div>
                </div>
                
                <div class="layui-form-item">
                    <label for="" class="layui-form-label"></label>
                    <div class="layui-input-inline">
                       <button class="layui-btn change">提交</button>
                    </div>
                </div>
                @csrf
            </div>
            </div>

    <script>
        layui.use('layer',function(){
           var $ = layui.jquery;
           layer = layui.layer;
           $('.change').on('click',function(){
            var username1 = $('input[name="username1"]').val();
            var username2 = $('input[name="username2"]').val();
           var password1 = $('input[name="password1"]').val();
           var password2 = $('input[name="password2"]').val();
           var _token = $('input[name="_token"]').val();
               $.post('/dochange',{username1:username1,username2:username2,password1:password1,password2:password2,_token:_token,_method:'POST'},function(res){
                   if(res.code>0){
                       return layer.alert(res.msg,{icon:2});
                   }
                   layer.msg(res.msg);
                   setTimeout(function(){window.history.go(-1);},1000)
               },'json')
           })
        })
    </script>

</body>

</html>