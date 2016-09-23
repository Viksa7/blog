@extends('welcome')
@section('content')
<div class="container">
 	<label for="name">Name</label>
 	<input type="text" class="form-control" id ="name" aria-label="name">
 	<label for="title">Title</label>
 	<input type="text" class="form-control" id ="title" aria-label="title">
 	<label for="body">Text</label>
 	<input type="text" class="form-control" id ="body" aria-label="body">
 	<label for="body">Author</label>
 	<input type="text" class="form-control" id ="author" aria-label="author">
 	<label for="created_at">Created date</label>
 	<input type="text" class="form-control" id ="created_at" aria-label="created_at">
 	<button type="button" class="btn btn-success" style="margin-top:20px;">Add article</button>	
</div>
 

@endsection
