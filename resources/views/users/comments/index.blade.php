@extends('layouts.app')

@section('title', "Comentários do Usuário {$user->name}")

@section('content')

{{Session('msg')}}
  <h1>
    Comentários do usuário {{ $user->name }}
    ( <a href={{ route("comments.create", $user->id) }}>+</a> )
  </h1>

  <form action="{{ route('users.index') }}" method="GET">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar">
    <button type="submit">Pesquisar</button>
  </form>

  <ul>
    @foreach ($comments as $comment)
      <li>
        {{ $comment->body }}
        <br>
        {{ $comment->visible }}

        | <a href="{{ route('users.edit', $user->id)}}">Editar</a>

      </li>
    @endforeach
  </ul>

@endsection
