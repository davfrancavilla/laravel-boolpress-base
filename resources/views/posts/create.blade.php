@extends('layouts.app')

@section('content')
<form action="{{route('posts.store')}}" method="post">
        @csrf
        @method('POST')
        <select name="user_id" id="">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->id}}</option>
            @endforeach
        </select>
        <label for="title">Titolo</label>
    <input id="title" type="text" name="title" placeholder="Nome" value="{{old('title')}}">
        <label for="body">Testo</label>
        <textarea id="body" name="body" rows="8" cols="80">{{old('body')}}</textarea>
        <button type="submit">Invia</button>
    </form>
@endsection