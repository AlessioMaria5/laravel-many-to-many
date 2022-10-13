@extends ('layouts.app')

@section ('content')
<div class="container d-flex">

<a href="{{route('admin.tags.create')}}">+ Nuovo Tag</a>
<ul>
    @foreach ($tags as $tag)
        <li>{{$tag->id}} - {{$tag->title}} 
            <a href="{{route('admin.tags.edit', $tag->id )}}">Edit</a>
            <a href="{{route('admin.tags.show', $tag->id )}}">Show</a>
            <form action="{{route('admin.tags.destroy', $tag->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn-danger" type="submit">Elimina</button>
            </form>
        </li>
    @endforeach
</ul>
</div>
@endsection