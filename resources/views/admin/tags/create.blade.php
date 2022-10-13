@extends ('layouts.app')

@section ('content')

<form action="{{route('admin.tags.store')}}" method="POST">
    @csrf

    <label for="title">Title</label>
    <input class="" type="text" id="title" name='title'>

    <button type="submit">Crea Nuovo Tag</button>
</form>


@endsection