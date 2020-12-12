
@extends('theme1.index')


@section('title')
{{$programa_2->title}}
@stop


@section('description')
{{$programa_2->description}}
@stop

@section('nav')
@parent
@endsection


@section('main')
<div class="container programacontent">
    <h3 style="text-align: center;margin:25px 0">{{$programa_2->title}}</h3>

        {!!$programa_2->content!!}
    
</div>

@stop


@section('blogs')
@parent
@stop

@section('sites')
@parent
@stop


@section('footer')
@parent
@endsection



 
