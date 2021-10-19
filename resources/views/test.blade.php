@extends('layouts.layout')

@section('title')
    mon titre de test
@endsection


@section('content')

    @if($loading)

    <p>Chargement...</p>
    @else
    <h1>Mon titre</h1>
        @foreach($posts as $post)
        <li>{{$post}}</li>
        @endforeach
    @endif
@endsection 