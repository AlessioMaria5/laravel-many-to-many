@extends('layouts.app')

@section ('content')

<h1>Benvenuto nella tua area Admin {{ Auth::user()->name }}</h1>

@endsection