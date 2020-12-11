@extends('theme1.index')

@section('title')
{{$programasite->title}} 
@stop

@section('description')	
{{$programasite->description}}
@stop

@section('nav')
@parent
@endsection


@section('main')
<div class="sites" style="background: #eee;color: #222;padding-bottom:30px">

<div class="container" style="text-align: center;padding-left: 0;padding-right: 0;box-sizing: border-box;">
  <h3>Regional Sites In US</h3>
  <div class="news" id="sites" style="margin: 10px 0;text-align: justify;color:  #222;">
    <ul>
      @foreach($sites as $subsite)
      <li class="col-md-2 col-xs-6"><a  href="/site{{$subsite->url}}">{{$subsite->abbr}}</a></li>
      @endforeach

    </ul>


  </div>

</div>
</div>
@endsection



@section('blogs')
@parent
@endsection


@section('sites')
@endsection


@section('footer')
@parent
@endsection