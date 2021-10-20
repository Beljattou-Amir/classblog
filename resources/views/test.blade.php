@extends('layouts.layout')

@section('title')
    mon titre de test
@endsection


@section('content')

    

    
   
    <h1>Mon titre</h1>
        @foreach($posts as $post)
        <li>{{$post->title}}</li>
        @endforeach
    
@endsection 