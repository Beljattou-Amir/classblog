@extends('layouts.layout')


@section('content')

    <h1>La liste des articles</h1>
    <ul>
        @if(sizeof($posts)>0)
        @foreach($posts as $post)
            <li>
                <div><a href="{{route('postDetails', $post->id)}}">{{$post->title}}</a>"</div>
                <div>{{$post->description}}</div>
            </li>
        @endforeach
        @else
            <p>il n y a pas d'article.</p>
        @endif
    </ul>
    

    

@endsection 