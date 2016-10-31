@extends('welcome')
@section('content')
<div class="page-header">
    <h1>{{ $article->title }}</h1>
</div>
<h1>{{ $article->name }}</h1>
<p>{{ $article->body }}</p>
<p>{{ $article->author }}</p>
<p>1 -  {{ $article->created_at }}</p>
<p>2 -  {{ $article->updated_at }}</p> 

<a href='/articles'>Go to Articles list</a>

<div class="container">

    <script>
      function check(){
        if (!$('#comment').val()) {
        	alert('Not good, try again');
        	return false;
        }
        return true;
      }
    </script>

{!! Form::open(['url' => ['addComment', $article->id]]) !!} 
{{ csrf_field() }}
 	<label for="name">Your comment</label>
 	<input type="text" class="form-control" name ="body" aria-label="name" id="comment">
 	<button type="submit" class="btn btn-success" style="margin-top:20px;" onclick="return check();">Send</button>	
{!! Form::close() !!}

</div>

<div class="panel-body">
    @foreach ($comments as $comment)
        <div>
            <p>{{ $comment->body }}</p>
            <p>Author: {{ $comment->user->name}}</p>
            <p>Created at {{ $comment->created_at }}</p>
        </div>
    @endforeach
</div>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@endsection











