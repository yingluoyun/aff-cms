@extends('theme1.index')

@section('title')
{{$blog->title}}
@stop

@section('description')
{{$blog->description}}
@stop

@section('nav')
@parent
@endsection


@section('main')
<div class="container">
<h1 style="text-align: center;">{{$blog->title}}</h1>
      <p style="text-align: center;">
      <span>{{date("Y-m-d",$blog->updated_at)}}</span>&nbsp;&nbsp;&nbsp;
      <i class="layui-icon layui-icon-fire " style="font-size: 18px;">{{$blog->view}}</i>&nbsp;&nbsp;
        <i class="layui-icon layui-icon-praise like" style="font-size: 18px;">{{$blog->like}}</i>&nbsp;&nbsp;
        <i class="layui-icon layui-icon-tread dislike" style="font-size: 18px;">{{$blog->dislike}}</i>&nbsp;&nbsp;
      </p>
<hr>
<p>{!!$blog1->content!!}</p>
<script>
    layui.use('layer',function(){
        $=layui.jquery;
        layer=layui.layer;
        $('.like').on('click',function(){
            $.get('/like',{},function(res){
                   if(res.code>0){
                       return layer.alert(res.msg,{icon:2});
                   }
                   layer.msg(res.msg);
                   setTimeout(function(){window.location.reload();},1000)
               },'json')
        })
        $('.dislike').on('click',function(){
            $.get('/dislike',{},function(res){
                   if(res.code>0){
                       return layer.alert(res.msg,{icon:2});
                   }
                   layer.msg(res.msg);
                   setTimeout(function(){window.location.reload()},1000)
               },'json')
        })
    })
</script>
</div>
@endsection



@section('blogs')
@parent
@endsection


@section('sites')
@parent
@endsection


@section('footer')
@parent
@endsection