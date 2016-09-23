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

@endsection







