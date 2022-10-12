@extends ('layouts.app')

@section ('content')

<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf

    <label for="title">Title</label>
    <input class="@error('title') is-invalid @enderror" type="text" id="title" name='title'>

    @error('title')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror
    <label for="slug">slug</label>
    <input type="text" class="@error('slug') is-invalid @enderror" id="slug" name="slug" >

    @error('slug')
                <div class='invalid-feedback'>
                    {{$message}}
                </div>
    @enderror


    <label for="text">content</label>
    <textarea type="text" id="content" name="content" ></textarea>

    <label for="category_id">slug</label>
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>

                 @foreach ($tags as $tag)
                    <div>
                        <input name="tags[]" type="checkbox" id="{{$tag->id}}" value="{{$tag->id}}">
                        <label for="{{$tag->id}}">{{$tag->title}}</label>
                    </div>
                @endforeach

    

    <button type="submit">Crea</button>
</form>


@endsection