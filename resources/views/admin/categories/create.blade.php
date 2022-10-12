@extends ('layouts.app')

@section ('content')

<form action="{{route('admin.categories.store')}}" method="POST">
    @csrf

    <label for="title">Title</label>
    <input class="" type="text" id="title" name='title'>
    <input type="text" class="" id="slug" name="slug" >

    <button type="submit">Crea</button>
</form>


@endsection