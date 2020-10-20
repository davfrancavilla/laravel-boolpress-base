@extends('layouts.app')
@section('title', 'Posts')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <h2>Elenco post</h2>
    @foreach ($posts as $post)
        <div>
            <p>Titolo: {{$post->title}}</p>
            <p>Testo: {{$post->body}}</p>
        </div>
    @endforeach
@endsection