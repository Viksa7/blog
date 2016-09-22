@extends('welcome')
@section('content')
    <div class="page-header">
        <h1>{{ $article->title }}</h1>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">
                <li class="list-group-item">{{ $article->name }}</li>
                <li class="list-group-item">{{ $article->body }}</li>
                <li class="list-group-item">{{ $article->author }}</li>
                <li class="list-group-item">1 -  {{ $article->created_at }}</li>
                <li class="list-group-item">2 -  {{ $article->updated_at }}</li>
            </ul>
        </div>
    </div>
@endsection


   




