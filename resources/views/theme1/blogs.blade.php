@extends('theme1.index')

@section('title')
{{$programablog->title}} 
@stop

@section('description')	
{{$programablog->description}}
@stop

@section('nav')
@parent
@endsection


@section('main')
@endsection



@section('blogs')
<div class="blogs" style="background: whitesmoke;color: #222;">

<div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
  <br>
  <h2>DATING BLOGS</h2>
  <div class="blogs">

    @foreach($article1 as $blog)
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
  </div>
</div>
</div>
@endsection


@section('sites')
@parent
@endsection


@section('footer')
@parent
@endsection