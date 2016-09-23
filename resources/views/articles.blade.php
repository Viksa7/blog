@extends('welcome')
@section('content')
<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Articles</h3>
  </div>
  <div class="panel-body">
      @foreach ($articles as $article)
      <div>
        <a href="{{ url('/article/'.$article->id) }}">{{ $article->title }}</a>
    </div>
    @endforeach
</div>
@endsection





