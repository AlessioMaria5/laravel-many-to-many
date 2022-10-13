@extends ('layouts.app')

@section ('content')

    <h1>{{$category->title}}</h1>

    @if(count($category->posts))
    @foreach($category->posts as $post)
        <li>{{$post->title}}</li>
    @endforeach
    @endif
@endsection

