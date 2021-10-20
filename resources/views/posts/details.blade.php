@extends('layouts.layout')


@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p>
        <p>Ecrit le {{$post->created_at}}</p>
        <a href="{{route('postList')}}" class="btn btn-primary">Retourner à la liste des postes</a>




    </div>
@endsection