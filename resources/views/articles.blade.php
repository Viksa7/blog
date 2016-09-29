@extends('welcome')
@section('content')
<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Articles</h3> <a href="/add">Add new article</a>
  </div>
  <div class="panel-body">
      @foreach ($articles as $article)
      <div>
        <a href="{{ url('/article/'.$article->id) }}">{{ $article->title }}</a> <a href="{{ url('/edit/'.$article->id) }}">Edit</a>
    </div>
    @endforeach
</div>
{{ $articles->links() }}

@endsection

