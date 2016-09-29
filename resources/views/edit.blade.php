@extends('welcome')
@section('content')
<div class="container">

{!! Form::model($article, ['url' => ['editArticle', $article->id]]) !!}
{{ csrf_field() }}
 	<label for="name">Name</label>
 	<input type="text" class="form-control" name ="name" aria-label="name" value="{{ $article->name }}">
 	<label for="title">Title</label>
 	<input type="text" class="form-control" name ="title" aria-label="title" value="{{ $article->title }}">
 	<label for="body">Text</label>
 	<input type="text" class="form-control" name ="body" aria-label="body" value="{{ $article->body }}">
 	<label for="body">Author</label>
 	<input type="text" class="form-control" name ="author" aria-label="author" value="{{ $article->author }}">
 	<label for="created_at">Created date</label>
 	<input type="text" class="form-control" name ="created_at" aria-label="created_at" value="{{ $article->created_at }}">
 	<button type="submit" class="btn btn-success" style="margin-top:20px;">Save</button>	
{!! Form::close() !!}

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
 

@endsection
