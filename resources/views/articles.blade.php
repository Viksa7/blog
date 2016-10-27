@extends('welcome')
@section('content')
<div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Articles</h3> <a href="/add">Add new article</a>
      <!--{!! Form::open(['url' => '/articles', 'method' => 'get']) !!}
        <input type="text" class="form-control" id="search" name="search" value="{{ $search }}">
        <button type="submit" class="btn btn-success" style="margin-top:20px;" onClick="getMessage(); return false;">Search</button> 
      {!! Form::close() !!}  -->
  </div>
  <div id="ajax">
    <div class="panel-body">
     
        @foreach ($articles as $article)
          <div>
            <a href="{{ url('/article/'.$article->id) }}">{{ $article->title }}</a> <a href="{{ url('/edit/'.$article->id) }}">Edit</a>
            <p>{{ $article->comments()->count() }} <span>comments</span> </p>
          </div>
        @endforeach
        

  </div>
  {{ $articles->links() }}
  </div>
  
@endsection

