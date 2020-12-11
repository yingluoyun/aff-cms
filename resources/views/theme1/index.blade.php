<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title',"{$site->title}") - {{$msite->abbr}}</title>
  <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
  <script src="/static/plugins/layui/layui.js"></script>
  <meta name="description" content="@yield('description'," {$site->description}")">
  <link rel="stylesheet" href="/static/plugins/bootstrap-3.3.7/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/static/css/theme1.css">
  <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  @section('nav')
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgba(0, 0, 0, 0.9);">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        @foreach($programa1 as $pro1)
        <a class="navbar-brand" href="{{$pro1->url}}" rel="{{$pro1->rel}}">{{$pro1->name}}</a>
        @endforeach
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          @foreach($programa2 as $pro2)
          <li><a href="{{$pro2->url}}" rel="{{$pro2->rel}}">{{$pro2->name}}<span class="sr-only"></span></a></li>
          @endforeach

          @foreach($programa3 as $pro3)
          <li><a rel="nofollow" href="{{$pro3->url}}" rel="{{$pro3->rel}}">{{$pro3->name}}</a></li>
          @endforeach

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  @show
  @section('main')
  <div class="show2" style="background: #222;color: gray;">
    <div class="container-fluid" style="text-align: center;box-sizing: border-box;padding-left: 0;padding-right: 0;">
      <div class="hidden-md hidden-lg">
        <b style="font-size:50px;">{{$site->toptext1}}</b>
        <h2>{{$site->toptext2}}</h2>
        <h3>{{$site->toptext3}}</h3>
        <div class="container">
          <div style="margin-bottom:15px">
            <a href="{{$site->weburl}}" style="display:inline-block;margin:10px;padding:10px 60px;border-radius:10px;background-color: rgb(255, 194, 81);color: black;font-size:large">{{$site->webname}}</a>
            <br>
            <a rel="nofollow" target="_blank" href="{{$site->iosurl}}"><img src="/static/images/button-app-store.png" alt="button-app-store" width="140"></a>
            <a rel="nofollow" target="_blank" href="{{$site->andurl}}"><img src="/static/images/button-google-play.png" alt="button-google-play" width="140"></a>
            <br>
          </div>
        </div>
      </div>
      <img src="{{$site->topimgurl}}" alt="{{$site->topimgalt}}" height="500" class=" center-block hidden-xs ">
      <div class="hidden-xs  hidden-sm" style="position: absolute;color:whitesmoke;right:0;left:0px;top:120px;margin:auto;text-shadow:1px 1px 0px rgb(0,0,0)">
        <b style="font-size:50px;">{{$site->toptext1}}</b>
        <h2>{{$site->toptext2}}</h2>
        <h3>{{$site->toptext3}}</h3>
      </div>
      <div class="container hidden-xs  hidden-sm" style="position: relative;">
        <div style="position: absolute;margin: auto;left: 0;right: 0;top: -150px;bottom: 0;">
          <a href="{{$site->weburl}}" style="display:inline-block;margin:10px;padding:10px 60px;border-radius:10px;background-color: rgb(255, 194, 81);color: black;font-size:large">{{$site->webname}}</a>
          <br>
          <a rel="nofollow" target="_blank" href="{{$site->iosurl}}"><img src="/static/images/button-app-store.png" alt="button-app-store" width="140"></a>
          <a rel="nofollow" target="_blank" href="{{$site->andurl}}"><img src="/static/images/button-google-play.png" alt="button-google-play" width="140"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="show1" style="background:whitesmoke;color:#222;">
    <div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
      <br>
      <div class="col-md-6 yyy">
        <img src="{{$site->main1img1}}" alt="{{$site->main1img1alt}}" width="300">
      </div>
      <div class="col-md-6 xxx">
        <img src="{{$site->main1img2}}" alt="{{$site->main1img2alt}}" width="78">
        <h3>{{$site->main1text1}}</h3>
        <p class="text-justify"> {{$site->main1text2}}</em></p>
      </div>
      <br>
    </div>
  </div>
  <div class="show1" style="background: #222;color: whitesmoke;">
    <div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
      <br>
      <div class="col-md-6 xxx">
        <img src="{{$site->main2img2}}" alt="{{$site->main2img2alt}}" width="78">
        <h2>{{$site->main2text1}}</h2>
        <p class="text-justify"><strong>{{$site->main2text2}}</strong></p>
      </div>
      <div class="col-md-6 yyy">
        <img src="{{$site->main2img1}}" alt="{{$site->main2img1alt}}" width="300">
      </div>
    </div>
  </div>
  <div class="show1" style="background:whitesmoke;color:#222;">
    <div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
      <br>
      <div class="col-md-6 yyy">
        <img src="{{$site->main3img1}}" alt="{{$site->main3img1alt}}" width="300">
      </div>
      <div class="col-md-6 xxx">
        <img src="{{$site->main3img2}}" alt="{{$site->main3img2alt}}" width="78">
        <h2>{{$site->main3text1}}</h2>
        <p class="text-justify">{{$site->main3text2}}</p>
      </div>
      <br>
    </div>
  </div>

  <div class="show1" style="background: #222;color: whitesmoke;">
    <div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
      <br>
      <div class="col-md-6 xxx">
        <img src="{{$site->main4img2}}" alt="{{$site->main4img2alt}}" width="78">
        <h2>{{$site->main4text1}}</h2>
        <p class="text-justify">{{$site->main4text2}}</p>
      </div>
      <div class="col-md-6 yyy">
        <img src="{{$site->main4img1}}" alt="{{$site->main4img1alt}}" width="300">
      </div>
      <br>
    </div>
  </div>

  <div class="show1" style="background:whitesmoke;color:#222;">
    <div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
      <br>
      <div class="col-md-6 yyy">
        <img src="{{$site->main5img1}}" alt="{{$site->main5img1alt}}" width="300">
      </div>
      <div class="col-md-6 xxx">
        <img src="{{$site->main5img2}}" alt="{{$site->main5img2alt}}" width="78">
        <h2>{{$site->main5text1}}</h2>
        <p class="text-justify">{{$site->main5text2}}</p>
      </div>
      <br>

    </div>
  </div>

  <div class="show1" style="background: white;color: whitesmoke;">
    <div class="container">
      <h3 style="text-align: center;color: #222;">{{$site->bannertitle}}</h3>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin: 15px 0;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="{{$site->banner1img}}" alt="{{$site->banner1imgalt}}" style="border-radius: 30px;">
            <div class="carousel-caption">

              <small class="hidden-xs"> “ {{$site->banner1content}} ”</small>

              <h5>{{$site->banner1title}}</h5>
            </div>
          </div>
          <div class="item">
            <img src="{{$site->banner2img}}" alt="{{$site->banner2imgalt}}" style="border-radius: 30px;">
            <div class="carousel-caption">

              <small class="hidden-xs">“ {{$site->banner2content}} ”</small>
              <h5>{{$site->banner2title}}</h5>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  @show

  @section('blogs')
  <div class="blogs" style="background: whitesmoke;color: #222;">
    <div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
      <br>
      <h2>DATING BLOGS</h2>
      <div class="blogs">
        @foreach($article as $blog)
        <div class="blog-img col-md-4"><a href="/blog{{$blog->url}}"><img src="{{$blog->img}}" alt="{{$blog->title}}"></a></div>
        <div class="blog-content col-md-4">
          <h3>{{$blog->title}}</h3>
          <span class="span-left">{{date("Y-m-d",$blog->updated_at)}}</span>
          <span class="span-right">
            <i class="layui-icon layui-icon-fire ">{{$blog->view}}</i>&nbsp;&nbsp;
            <i class="layui-icon layui-icon-praise like">{{$blog->like}}</i>&nbsp;&nbsp;
            <i class="layui-icon layui-icon-tread dislike">{{$blog->dislike}}</i>&nbsp;&nbsp;
          </span>
          <p style="clear:both"></p>
          <p>{{$blog->description}}</p>
          <a class="layui-btn readmore" href="/blog{{$blog->url}}">Read More</a>
          <p style="clear:both"></p>
        </div>
        @endforeach
        <div class="blog-btn col-md-4"><a class="moreblog" href="/blog.html">More Blogs</a></div>
      </div>
    </div>
  </div>
  @show

  @section('sites')
  <div class="sites" style="background: #eee;color: #222;padding-bottom:30px">
    <div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
      <h3>Regional Sites In US</h3>
      <div class="news" id="sites" style="margin: 10px 0;text-align: justify;color:  #222;">
        <ul>
          @foreach($sites as $subsite)
          <li class="col-md-2 col-xs-6"><a href="/site{{$subsite->url}}">{{$subsite->abbr}}</a></li>
          @endforeach
        </ul>
      </div>

    </div>
  </div>
  @show

  @section('footer')
  <div class="show1" style="background:#222;color:whitesmoke;">
    <div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
      <p style="margin-top: 8px;">{{$site->footer}}</p>

    </div>
  </div>
  @show
  <script src="/static/plugins/jquery-2.1.1/jquery.min.js"></script>
  <script src="/static/plugins/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
</body>

</html>