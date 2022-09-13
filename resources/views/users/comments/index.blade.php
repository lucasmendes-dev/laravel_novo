@extends('layouts.app')

@section('title', "Comentários do Usuário {$user->name}")

@section('content')

{{Session('msg')}}
  <h1>
    Comentários do usuário {{ $user->name }}
    ( <a href={{ route("comments.create", $user->id) }}>+</a> )
  </h1>

  <form action="{{ route('comments.index', $user->id) }}" method="GET">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar">
    <button type="submit">Pesquisar</button>
  </form>

  <ul>
    @foreach ($comments as $comment)
      <li>
        {{ $comment->body }}
        <br>
        {{ $comment->visible ? 'SIM' : 'NÃO'}}

        | <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id])}}">Editar</a>

      </li>
    @endforeach
  </ul>

@endsection
