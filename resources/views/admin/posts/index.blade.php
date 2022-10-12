@extends ('layouts.app')

@section ('content')
<div class="container d-flex">

<a href="{{route('admin.posts.create')}}">+ Nuovo post</a>
<ul>
    @foreach ($posts as $post)
        <li>{{$post->id}} - {{$post->title}} | {{$post->slug}} | 
            <a href="{{route('admin.posts.edit', $post->id )}}">Edit</a>
            <a href="{{route('admin.posts.show', $post->id )}}">Show</a>

            <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn-danger" type="submit">Elimina</button>
            </form>
        </li>
    @endforeach
</ul>



</div>
@endsection