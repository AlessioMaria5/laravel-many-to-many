@extends ('layouts.app')

@section ('content')
<div class="container d-flex">

<a href="{{route('admin.categories.create')}}">+ Nuova Categoria</a>
<ul>
    @foreach ($categories as $category)
        <li>{{$category->id}} - {{$category->title}} | {{$category->slug}} | 
            <a href="{{route('admin.categories.edit', $category->id )}}">Edit</a>
            <a href="{{route('admin.categories.show', $category->id )}}">Show</a>
            <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn-danger" type="submit">Elimina</button>
            </form>
        </li>
    @endforeach
</ul>
</div>
@endsection