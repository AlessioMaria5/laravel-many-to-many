@extends ('layouts.app')

@section ('content')

<form action="{{route('admin.tags.update', compact('tag'))}}" method="POST">
    @csrf

    @method('PUT')

    <label for="title">Tags</label>
    <input type="text" id="title" name='title'>
    
    <button type="submit">Complete Edit</button>
</form>


@endsection