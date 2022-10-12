@extends ('layouts.app')

@section ('content')                 
  @foreach ($category->posts as $post)
                        
      <p>{{$post->id}} - {{$post->title}} - {{$post->category_id}}</p>
          
    @endforeach

    
@endsection