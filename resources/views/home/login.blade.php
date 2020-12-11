<html>

<head>
    <title>AFF-CMS LOGIN</title>
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <script src="/static/plugins/layui/layui.js"></script>

</head>

<body style="background: url(/static/images/login_bg.png);background-size:80% 100%;background-repeat:no-repeat">
    <div class="container" style="width: 400px;height:200px;position:absolute;right:160px;top:200px">
            <div class="layui-form" >
                <h1 style="text-align: center;color:#409eff;font-weight:800">AFF-CMS</h1>
                <br>
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label"></label>
                    <div class="layui-input-inline">
                        <input style="background: #f4faff;" type="text" id="username" name="username" class="layui-input" placeholder="Username" autocomplete="off">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="password" class="layui-form-label"></label>
                    <div class="layui-input-inline">
                        <input style="background: #f4faff;" type="password" id="password" name="password" class="layui-input" placeholder="Password" >
                    </div>
                </div>
                <div class="layui-form-item">
				<label class="layui-form-label"></label>
				<div class="layui-input-inline">
					<input type="text" style="background: #f4faff;" class="layui-input" name="vericode" placeholder="Vericode">
				</div>
				
            </div>
            
            <div class="layui-form-item">
				<label class="layui-form-label"></label>
				<div class="layui-input-inline">
                <img id="captcha" src="/home/captcha" style="width: 188px;height: 36px;border:1px solid #d2d2d2;cursor: pointer;" >
				</div>
				
            </div>
           
                <div class="layui-form-item">
                    <label for="" class="layui-form-label"></label>
                    <div class="layui-input-inline">
                        <button class="layui-btn login" style="width: 100%;background:#409eff">LOGIN</button>
                    </div>
                </div>
                @csrf
            </div>

    </div>
    <script>
        layui.use('layer',function(){
           var $ = layui.jquery;
           layer = layui.layer;
           $('.login').on('click',function(){
         
            var username = $('input[name="username"]').val();
           var password = $('input[name="password"]').val();
           var vericode = $('input[name="vericode"]').val();
           var _token = $('input[name="_token"]').val();
           if(username==''){
			return layer.alert('请输入用户名',{icon:2});
		}
		if(password==''){
			return layer.alert('请输入密码',{icon:2});
		}
		if(vericode==''){
			return layer.alert('请输入验证码',{icon:2});
		}
               $.post('/dologin',{username:username,password:password,_token:_token,vericode:vericode,_method:'POST'},function(res){
                   if(res.code>0){
                       return layer.alert(res.msg,{icon:2});
                   }
                   layer.msg(res.msg);
                   setTimeout(function(){window.location.href="/home"},1000)
               },'json')
           })

		$('#captcha').on('click',function(){
            $('#captcha').attr('src','home/captcha?rand='+Math.random());
        })
	
        })
       
       
    </script>

</body>

</html>