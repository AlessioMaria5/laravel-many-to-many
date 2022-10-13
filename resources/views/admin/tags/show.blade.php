@extends ('layouts.app')

@section ('content')

<h1>{{$tag->title}}</h1>

@foreach ($tag->posts as $post)

{{$post->title}}
@endforeach
@endsection 