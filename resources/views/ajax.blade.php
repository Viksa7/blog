<div class="panel-body">
  @if (count($articles)>0)
    @foreach ($articles as $article)
      <div>
        <a href="{{ url('/article/'.$article->id) }}">{{ $article->title }}</a> <a href="{{ url('/edit/'.$article->id) }}">Edit</a>
      </div>
    @endforeach
  @else
    <p>No results were found</p>   
  @endif
</div>
{{ $articles->links() }}
