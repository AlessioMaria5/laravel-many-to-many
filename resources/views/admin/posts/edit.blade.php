@extends ('layouts.app')

@section ('content')

<form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="POST">
    @csrf

    @method('PUT')

    <label for="title">Title</label>
    <input class="@error('title') is-invalid @enderror" type="text" id="title" name='title'>

    @error('title')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror

    <input type="text" class="@error('slug') is-invalid @enderror" id="slug" name="slug" >

    @error('slug')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror

    

    <textarea type="text" id="content" name="content" ></textarea>
    
    <button type="submit">Complete Edit</button>
</form>


@endsection