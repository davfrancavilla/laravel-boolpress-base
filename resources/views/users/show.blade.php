@extends('layouts.app')

@section('content')
    <ul>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->avatar->avatar}}</li>

</ul>
<form action="{{route('users.destroy', $user->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Cancella utente">
</form>
<h3>Posts</h3>
@foreach ($user->posts as $post)
    <div>
    <p>{{$post->title}}</p>
    <p>{{$post->body}}</p>
    </div>
@endforeach
@endsection

