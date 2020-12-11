<html>

<head>
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <script src="/static/plugins/layui/layui.js"></script>

</head>

<body>

    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">网站设置</li>
            <li>顶部设置</li>
            <li>主体区域[1]</li>
            <li>主体区域[2]</li>
            <li>主体区域[3]</li>
            <li>主体区域[4]</li>
            <li>主体区域[5]</li>
            <li>幻灯片设置</li>
            <li>博客设置</li>
            <li>子站设置</li>
            <li>底部设置</li>
            <li>栏目设置</li>

        </ul>
        <div class="layui-tab-content layui-form">
            <input id="id" name="id" value="{{$data1->id}}" type="hidden">
            <div class="layui-tab-item layui-show">
                <div class="layui-form-item">
                    <label for="abbr" class="layui-form-label">网站简称</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="abbr" name="abbr" class="layui-input" value="{{$data1->abbr}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="url" class="layui-form-label">网站地址</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="url" name="url" class="layui-input" value="{{$data1->url}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">网站标题</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="title" name="title" class="layui-input" value="{{$data->title}}">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">网站描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <textarea name="description" class="layui-textarea">{{$data->description}}</textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="" class="layui-form-label">网站状态</label>
                    <div class="layui-input-inline">
                        <input type="checkbox" name="status" lay-skin="switch" lay-text="开启|关闭" {{$data1->status==0?"checked":""}}>
                    </div>
                </div>
                <div class="layui-form-item">
        <label for="" class="layui-form-label"></label>
        <div class="layui-input-inline">
            <input type="submit" value="提交" class="layui-btn submit1 layui-btn-lg">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            </div>
            <div class="layui-tab-item">

                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">顶部图片</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="topimgurl" name="topimgurl" class="layui-input" value="{{$data->topimgurl}}">
                        <img src="{{$data->topimgurl}}" alt="{{$data->topimgalt}}" id="topimgurl1" width="400">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_topimgurl">
                            <i class="layui-icon">&#xe67c;</i>上传图片
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="topimgalt" class="layui-form-label">图片alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="topimgalt" name="topimgalt" class="layui-input" value="{{$data->topimgalt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="toptext1" class="layui-form-label">文本描述1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="toptext1" name="toptext1" class="layui-input" value="{{$data->toptext1}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="toptext2" class="layui-form-label">文本描述2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="toptext2" name="toptext2" class="layui-input" value="{{$data->toptext2}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="toptext3" class="layui-form-label">文本描述3</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="toptext3" name="toptext3" class="layui-input" value="{{$data->toptext3}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="iosurl" class="layui-form-label">苹果下载url</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="iosurl" name="iosurl" class="layui-input" value="{{$data->iosurl}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="andurl" class="layui-form-label">谷歌下载url</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="andurl" name="andurl" class="layui-input" value="{{$data->andurl}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="weburl" class="layui-form-label">注册地址</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="weburl" name="weburl" class="layui-input" value="{{$data->weburl}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="webname" class="layui-form-label">注册描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="webname" name="webname" class="layui-input" value="{{$data->webname}}">
                    </div>
                </div>
                <div class="layui-form-item">
        <label for="" class="layui-form-label"></label>
        <div class="layui-input-inline">
            <input type="submit" value="提交" class="layui-btn submit1 layui-btn-lg">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            </div>
            <div class="layui-tab-item">
                <div class="layui-form-item">
                    <label for="main1img1" class="layui-form-label">主体图片1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main1img1" name="main1img1" class="layui-input" value="{{$data->main1img1}}">
                        <img src="{{$data->main1img1}}" alt="{{$data->main1img1alt}}" id="main1img11" width="200">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main1img1">
                            <i class="layui-icon">&#xe67c;</i>上传图片
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main1img1alt" class="layui-form-label">图片1alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main1img1alt" name="main1img1alt" class="layui-input" value="{{$data->main1img1alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main1img2" class="layui-form-label">主体图标</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main1img2" name="main1img2" class="layui-input" value="{{$data->main1img2}}">
                        <img src="{{$data->main1img2}}" alt="{{$data->main1img2alt}}" id="main1img21" width="100">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main1img2">
                            <i class="layui-icon">&#xe67c;</i>上传图标
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main1img2alt" class="layui-form-label">图标alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main1img2alt" name="main1img2alt" class="layui-input" value="{{$data->main1img2alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main1text1" class="layui-form-label">文本描述1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main1text1" name="main1text1" class="layui-input" value="{{$data->main1text1}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main1text2" class="layui-form-label">文本描述2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main1text2" name="main1text2" class="layui-input" value="{{$data->main1text2}}">
                    </div>
                </div>
                <div class="layui-form-item">
        <label for="" class="layui-form-label"></label>
        <div class="layui-input-inline">
            <input type="submit" value="提交" class="layui-btn submit1 layui-btn-lg">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            </div>
            <div class="layui-tab-item">
                <div class="layui-form-item">
                    <label for="main2img1" class="layui-form-label">主体图片2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main2img1" name="main2img1" class="layui-input" value="{{$data->main2img1}}">
                        <img src="{{$data->main2img1}}" alt="{{$data->main2img1alt}}" id="main2img11" width="200">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main2img1">
                            <i class="layui-icon">&#xe67c;</i>上传图片
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main2img1alt" class="layui-form-label">图片1alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main2img1alt" name="main2img1alt" class="layui-input" value="{{$data->main2img1alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">主体图标</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main2img2" name="main2img2" class="layui-input" value="{{$data->main2img2}}">
                        <img src="{{$data->main2img2}}" alt="{{$data->main2img2alt}}" id="main2img21" width="100">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main2img2">
                            <i class="layui-icon">&#xe67c;</i>上传图标
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main2img2alt" class="layui-form-label">图标alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main2img2alt" name="main2img2alt" class="layui-input" value="{{$data->main2img2alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main2text1" class="layui-form-label">文本描述1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="main2text1" id="main2text1" name="main2text1" class="layui-input" value="{{$data->main2text1}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main2text2" class="layui-form-label">文本描述2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main2text2" name="main2text2" class="layui-input" value="{{$data->main2text2}}">
                    </div>
                </div>
                <div class="layui-form-item">
        <label for="" class="layui-form-label"></label>
        <div class="layui-input-inline">
            <input type="submit" value="提交" class="layui-btn submit1 layui-btn-lg">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            </div>

            <div class="layui-tab-item">

                <div class="layui-form-item">
                    <label for="main3img1" class="layui-form-label">主体图片3</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main3img1" name="main3img1" class="layui-input" value="{{$data->main3img1}}">
                        <img src="{{$data->main3img1}}" alt="{{$data->main3img1alt}}" id="main3img11" width="200">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main3img1">
                            <i class="layui-icon">&#xe67c;</i>上传图片
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main3img1alt" class="layui-form-label">图片1alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main3img1alt" name="main3img1alt" class="layui-input" value="{{$data->main3img1alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">主体图标</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main3img2" name="main3img2" class="layui-input" value="{{$data->main3img2}}">
                        <img src="{{$data->main3img2}}" alt="{{$data->main3img2alt}}" id="main3img21" width="100">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main3img2">
                            <i class="layui-icon">&#xe67c;</i>上传图标
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main3img2alt" class="layui-form-label">图标alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main3img2alt" name="main3img2alt" class="layui-input" value="{{$data->main3img2alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main3text1" class="layui-form-label">文本描述1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main3text1" name="main3text1" class="layui-input" value="{{$data->main3text1}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main3text2" class="layui-form-label">文本描述2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main3text2" name="main3text2" class="layui-input" value="{{$data->main3text2}}">
                    </div>
                </div>
                <div class="layui-form-item">
        <label for="" class="layui-form-label"></label>
        <div class="layui-input-inline">
            <input type="submit" value="提交" class="layui-btn submit1 layui-btn-lg">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            </div>

            <div class="layui-tab-item">

                <div class="layui-form-item">
                    <label for="main4img1" class="layui-form-label">主体图片4</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main4img1" name="main4img1" class="layui-input" value="{{$data->main4img1}}">
                        <img src="{{$data->main4img1}}" alt="{{$data->main4img1alt}}" id="main4img11" width="200">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main4img1">
                            <i class="layui-icon">&#xe67c;</i>上传图片
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main4img1alt" class="layui-form-label">图片4alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main4img1alt" name="main4img1alt" class="layui-input" value="{{$data->main4img1alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">主体图标</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main4img2" name="main4img2" class="layui-input" value="{{$data->main4img2}}">
                        <img src="{{$data->main4img2}}" alt="{{$data->main4img2alt}}" id="main4img21" width="100">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main4img2">
                            <i class="layui-icon">&#xe67c;</i>上传图标
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main4img2alt" class="layui-form-label">图标alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main4img2alt" name="main4img2alt" class="layui-input" value="{{$data->main4img2alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main4text1" class="layui-form-label">文本描述1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main4text1" name="main4text1" class="layui-input" value="{{$data->main4text1}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main4text2" class="layui-form-label">文本描述2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main4text2" name="main4text2" class="layui-input" value="{{$data->main4text2}}">
                    </div>
                </div>
                <div class="layui-form-item">
        <label for="" class="layui-form-label"></label>
        <div class="layui-input-inline">
            <input type="submit" value="提交" class="layui-btn submit1 layui-btn-lg">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            </div>

            <div class="layui-tab-item">

                <div class="layui-form-item">
                    <label for="main5img1" class="layui-form-label">主体图片5</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main5img1" name="main5img1" class="layui-input" value="{{$data->main5img1}}">
                        <img src="{{$data->main5img1}}" alt="{{$data->main5img1alt}}" id="main5img11" width="200">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main5img1">
                            <i class="layui-icon">&#xe67c;</i>上传图片
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main5img1alt" class="layui-form-label">图片5alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main5img1alt" name="main5img1alt" class="layui-input" value="{{$data->main5img1alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">主体图标</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main5img2" name="main5img2" class="layui-input" value="{{$data->main5img2}}">
                        <img src="{{$data->main5img2}}" alt="{{$data->main5img2alt}}" id="main5img21" width="100">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_main5img2">
                            <i class="layui-icon">&#xe67c;</i>上传图标
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main5img2alt" class="layui-form-label">图标alt描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main5img2alt" name="main5img2alt" class="layui-input" value="{{$data->main5img2alt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main5text1" class="layui-form-label">文本描述1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main5text1" name="main5text1" class="layui-input" value="{{$data->main5text1}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="main5text2" class="layui-form-label">文本描述2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="main5text2" name="main5text2" class="layui-input" value="{{$data->main5text2}}">
                    </div>
                </div>
                <div class="layui-form-item">
        <label for="" class="layui-form-label"></label>
        <div class="layui-input-inline">
            <input type="submit" value="提交" class="layui-btn submit1 layui-btn-lg">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            </div>
            <div class="layui-tab-item">
                <div class="layui-form-item">
                    <label for="bannertitle" class="layui-form-label">banner标题</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="bannertitle" name="bannertitle" class="layui-input" value="{{$data->bannertitle}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">幻灯片1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="banner1img" name="banner1img" class="layui-input" value="{{$data->banner1img}}">
                        <img src="{{$data->banner1img}}" alt="{{$data->banner1imgalt}}" id="banner1img1" width="400">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_banner1img">
                            <i class="layui-icon">&#xe67c;</i>上传图片
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="banner1imgalt" class="layui-form-label">图片1描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="banner1imgalt" name="banner1imgalt" class="layui-input" value="{{$data->banner1imgalt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="banner1title" class="layui-form-label">名称1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="banner1title" name="banner1title" class="layui-input" value="{{$data->banner1title}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="banner1content" class="layui-form-label">文本1</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="banner1content" name="banner1content" class="layui-input" value="{{$data->banner1content}}">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="title" class="layui-form-label">幻灯片2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="banner2img" name="banner2img" class="layui-input" value="{{$data->banner2img}}">
                        <img src="{{$data->banner2img}}" alt="{{$data->banner2imgalt}}" id="banner2img1" width="400">
                        <br>
                        <button type="button" class="layui-btn layui-btn-sm" id="btn_banner2img">
                            <i class="layui-icon">&#xe67c;</i>上传图片
                        </button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="banner2imgalt" class="layui-form-label">图片2描述</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="banner2imgalt" name="banner2imgalt" class="layui-input" value="{{$data->banner2imgalt}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="banner2title" class="layui-form-label">名称2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="banner2title" name="banner2title" class="layui-input" value="{{$data->banner2title}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="banner2content" class="layui-form-label">文本2</label>
                    <div class="layui-input-inline" style="width: 500px;">
                        <input type="text" id="banner2content" name="banner2content" class="layui-input" value="{{$data->banner2content}}">
                    </div>
                </div>
                <div class="layui-form-item">
        <label for="" class="layui-form-label"></label>
        <div class="layui-input-inline">
            <input type="submit" value="提交" class="layui-btn submit1 layui-btn-lg">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            </div>
            <div class="layui-tab-item">无需设置</div>
            <div class="layui-tab-item">无需设置</div>
            <div class="layui-tab-item">
                <label for="afooter" class="layui-form-label">底部内容</label>
                <div class="layui-input-inline" style="width: 500px;">
                    <input type="text" id="afooter" name="afooter" class="layui-input" value="{{$data->footer}}">
                </div>
                <br>
                <br>
                <br>
                <div class="layui-form-item">
                    <label for="" class="layui-form-label"></label>
                    <div class="layui-input-inline">
                        <input type="submit" value="提交" class="layui-btn submit1 layui-btn-lg">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>

            <div class="layui-tab-item">

                <div class="layui-form">
                    <table class="layui-table">
                        <thead>
                            <tr>
                                <th>排序</th>
                                <th>名称</th>
                                <th>链接</th>
                                <th style="width: 100px;">状态</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data2 as $da)
                            <tr>
                                <td>{{$da->lid}}</td>
                                <td>{{$da->name}}</td>
                                <td>{{$da->url}}</td>
                                <td><input type="checkbox" name="zzz" lay-skin="switch" lay-text="显示|隐藏" {{$da->status==0?"checked":""}}></td>
                                <td>
                                    <a class="layui-btn layui-btn-sm layui-btn-normal" href="/editprograma{{$da->type}}?id={{$da->id}}">栏目编辑</a>
                                    <button class="layui-btn layui-btn-sm layui-btn-danger del" onclick="del()" t="{{$da->type}}" i="{{$da->id}}">删除</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a class="layui-btn layui-btn-lg layui-btn-warm" style="float: right;" href="/addpro/{{$data1->id}}">添加栏目</a>
            </div>
        </div>
    </div>




    @csrf

    <script>
        layui.use(['layer', 'form', 'upload', 'element'], function() {
            $ = layui.jquery;
            layer = layui.layer;
            form = layui.form;
            upload = layui.upload;
            element = layui.element;
            $('.submit1').on('click', function() {
                var id = $('input[name="id"]').val();
                var abbr = $('input[name="abbr"]').val();
                var url = $('input[name="url"]').val();
                var title = $('input[name="title"]').val();
                var description = $('textarea[name="description"]').val();
                var status = $('input[name="status"]').is(":checked") ? 0 : 1;
                var _token = $('input[name="_token"]').val();
                var topimgalt = $('input[name="topimgalt"]').val();
                var toptext1 = $('input[name="toptext1"]').val();
                var toptext2 = $('input[name="toptext2"]').val();
                var toptext3 = $('input[name="toptext3"]').val();
                var iosurl = $('input[name="iosurl"]').val();
                var andurl = $('input[name="andurl"]').val();
                var weburl = $('input[name="weburl"]').val();
                var webname = $('input[name="webname"]').val();
                var main1img1alt = $('input[name="main1img1alt"]').val();
                var main1img2alt = $('input[name="main1img2alt"]').val();
                var main1text1 = $('input[name="main1text1"]').val();
                var main1text2 = $('input[name="main1text2"]').val();
                var main2img1alt = $('input[name="main1img1alt"]').val();
                var main2img2alt = $('input[name="main1img2alt"]').val();
                var main2text1 = $('input[name="main2text1"]').val();
                var main2text2 = $('input[name="main2text2"]').val();
                var main3img1alt = $('input[name="main3img1alt"]').val();
                var main3img2alt = $('input[name="main3img2alt"]').val();
                var main3text1 = $('input[name="main3text1"]').val();
                var main3text2 = $('input[name="main3text2"]').val();
                var main4img1alt = $('input[name="main4img1alt"]').val();
                var main4img2alt = $('input[name="main4img2alt"]').val();
                var main4text1 = $('input[name="main4text1"]').val();
                var main4text2 = $('input[name="main4text2"]').val();
                var main5img1alt = $('input[name="main5img1alt"]').val();
                var main5img2alt = $('input[name="main5img2alt"]').val();
                var main5text1 = $('input[name="main5text1"]').val();
                var main5text2 = $('input[name="main5text2"]').val();
                var afooter = $('input[name="afooter"]').val();
                var banner1imgalt = $('input[name="banner1imgalt"]').val();
                var banner2imgalt = $('input[name="banner2imgalt"]').val();
                var banner1title = $('input[name="banner1title"]').val();
                var banner2title = $('input[name="banner2title"]').val();
                var banner1content = $('input[name="banner1content"]').val();
                var banner2content = $('input[name="banner2content"]').val();
                var bannertitle = $('input[name="bannertitle"]').val();
                var topimgurl = $('input[name="topimgurl"]').val();
                var banner2img = $('input[name="banner2img"]').val();
                var banner1img = $('input[name="banner1img"]').val();
                var main5img1 = $('input[name="main5img1"]').val();
                var main5img2 = $('input[name="main5img2"]').val();
                var main4img1 = $('input[name="main4img1"]').val();
                var main4img2 = $('input[name="main4img2"]').val();
                var main3img1 = $('input[name="main3img1"]').val();
                var main3img2 = $('input[name="main3img2"]').val();
                var main2img1 = $('input[name="main2img1"]').val();
                var main2img2 = $('input[name="main2img2"]').val();
                var main1img1 = $('input[name="main1img1"]').val();
                var main1img2 = $('input[name="main1img2"]').val();
                if (main1img2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main1img1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main2img2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main2img1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main3img1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main3img2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main4img1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main4img2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main5img1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main5img1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (banner1img == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (banner2img == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (banner2content == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (banner1content == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (banner2title == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (banner1title == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (banner2imgalt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (banner1imgalt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (banner2content == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (bannertitle == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (topimgurl == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main1img1alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main1img2alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main1text1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main1text2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main2img1alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main2img2alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main2text1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main2text2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main3img1alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main3img2alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main3text1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main3text2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main4img1alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main4img2alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main4text1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main4text2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main5img1alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main5img2alt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main5text1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (main5text2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (afooter == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (abbr == '') {
                    return layer.alert('简称不能为空！', {
                        icon: 2
                    });
                }
                if (url == '') {
                    return layer.alert('网址不能为空！', {
                        icon: 2
                    });
                }
                if (title == '') {
                    return layer.alert('标题不能为空！', {
                        icon: 2
                    });
                }
                if (description == '') {
                    return layer.alert('描述不能为空！', {
                        icon: 2
                    });
                }
                if (_token == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (topimgalt == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (toptext1 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (toptext2 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (toptext3 == '') {
                    return layer.alert('所有字段均不能为空！', {
                        icon: 2
                    });
                }
                if (iosurl == '') {
                    return layer.alert('苹果下载地址不能为空！', {
                        icon: 2
                    });
                }
                if (andurl == '') {
                    return layer.alert('安卓下载地址不能为空！', {
                        icon: 2
                    });
                }
                if (weburl == '') {
                    return layer.alert('注册地址不能为空！', {
                        icon: 2
                    });
                }
                if (webname == '') {
                    return layer.alert('注册描述不能为空！', {
                        icon: 2
                    });
                }
                $.post('/eidtmainsites1save', {
                    bannertitle: bannertitle,
                    banner2content: banner2content,
                    banner1content: banner1content,
                    banner2title: banner2title,
                    banner1title: banner1title,
                    banner2imgalt: banner2imgalt,
                    banner1imgalt: banner1imgalt,
                    banner2img: banner2img,
                    banner1img: banner1img,
                    main5img2: main5img2,
                    main5img1: main5img1,
                    main4img2: main4img2,
                    main4img1: main4img1,
                    main3img2: main3img2,
                    main3img1: main3img1,
                    main2img2: main2img2,
                    main2img1: main2img1,
                    main1img2: main1img2,
                    main1img1: main1img1,
                    topimgurl: topimgurl,
                    main5text2: main5text2,
                    main5text1: main5text1,
                    main5img2alt: main5img2alt,
                    main5img1alt: main5img1alt,
                    main4text2: main4text2,
                    main4text1: main4text1,
                    main4img2alt: main4img2alt,
                    main4img1alt: main4img1alt,
                    main3text2: main3text2,
                    main3text1: main3text1,
                    main3img2alt: main3img2alt,
                    main3img1alt: main3img1alt,
                    main2text2: main2text2,
                    main2text1: main2text1,
                    main2img2alt: main2img2alt,
                    main2img1alt: main2img1alt,
                    main1text2: main1text2,
                    main1text1: main1text1,
                    main1img2alt: main1img2alt,
                    main1img1alt: main1img1alt,
                    webname: webname,
                    weburl: weburl,
                    andurl: andurl,
                    iosurl: iosurl,
                    toptext3: toptext3,
                    toptext2: toptext2,
                    toptext1: toptext1,
                    topimgalt: topimgalt,
                    afooter: afooter,
                    id: id,
                    abbr: abbr,
                    url: url,
                    title: title,
                    description: description,
                    status: status,
                    _token: _token,
                    _method: 'POST'
                }, function(res) {
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
            });
            var _token = $('input[name="_token"]').val();
            var uploadInst = upload.render({
                elem: '#btn_upload' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#preview_img').attr('src', res.data.src);
                    $('input[name="preview_img"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_topimgurl' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#topimgurl1').attr('src', res.data.src);
                    $('input[name="topimgurl"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main1img1' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main1img11').attr('src', res.data.src);
                    $('input[name="main1img1"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main1img2' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main1img21').attr('src', res.data.src);
                    $('input[name="main1img2"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main2img1' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main2img11').attr('src', res.data.src);
                    $('input[name="main2img1"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main2img2' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main2img21').attr('src', res.data.src);
                    $('input[name="main2img2"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main3img1' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main3img11').attr('src', res.data.src);
                    $('input[name="main3img1"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main3img2' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main3img21').attr('src', res.data.src);
                    $('input[name="main3img2"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main4img1' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main4img11').attr('src', res.data.src);
                    $('input[name="main4img1"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main4img2' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main4img21').attr('src', res.data.src);
                    $('input[name="main4img2"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main5img1' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main5img11').attr('src', res.data.src);
                    $('input[name="main5img1"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_main5img2' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#main5img21').attr('src', res.data.src);
                    $('input[name="main5img2"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_banner1img' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#banner1img1').attr('src', res.data.src);
                    $('input[name="banner1img"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });
            var uploadInst = upload.render({
                elem: '#btn_banner2img' //绑定元素
                    ,
                url: '/upload_img' //上传接口
                    ,
                data: {
                    _token: _token
                },
                done: function(res) {
                    //上传完毕回调
                    console.log(res);
                    $('#banner2img1').attr('src', res.data.src);
                    $('input[name="banner2img"]').val(res.data.src);
                },
                error: function() {
                    //请求异常回调
                }
            });

        });

        function del() {
            var id = $('.del').attr('i');
            var type = $('.del').attr('t');
            $.get('/delprograma?id=' + id + '&type=' + type, {
                _method: 'GET'
            }, function(res) {
                if (res.code > 0) {
                    return layer.alert(res.msg, {
                        icon: 2
                    });
                }
                layer.msg(res.msg);
                setTimeout(function() {
                    window.location.reload()
                }, 1000)
            }, 'json')
        }
    </script>

</body>

</html>