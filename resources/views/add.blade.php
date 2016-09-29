@extends('welcome')
@section('content')
<div class="container">

	{!! Form::open(['url' => 'addArticle']) !!}
	{{ csrf_field() }}
	<label for="name">Name</label>
	<input type="text" class="form-control" name ="name" aria-label="name">
	<label for="title">Title</label>
	<input type="text" class="form-control" name ="title" aria-label="title">
	<label for="body">Text</label>
	<input type="text" class="form-control" name ="body" aria-label="body">
	<label for="body">Author</label>
	<input type="text" class="form-control" name ="author" aria-label="author">
	<label for="created_at">Created date</label>
	<input type="text" class="form-control" name ="created_at" aria-label="created_at">
	<button type="submit" class="btn btn-success" style="margin-top:20px;">Add article</button>	
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
