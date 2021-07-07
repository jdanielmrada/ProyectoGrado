<h4>Categorias</h4>
<div class="list-group">
  @foreach($categories as $category)
    <a href="{{ route('welcome.search.category', $category->name) }}" class="list-group-item">
      {{$category->name}} <spam class="badge">{{ $category->articles->count() }}</spam>
    </a>
  @endforeach
</div>

