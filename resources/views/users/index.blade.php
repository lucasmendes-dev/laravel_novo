@extends('layouts.app')

@section('title', 'Laravel')

@section('content')

{{Session('msg')}}
  <h1>
    Listagem de usuários
    ( <a href={{ route("users.create") }}>+</a> )
  </h1>

  <form action="{{ route('users.index') }}" method="GET">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar">
    <button type="submit">Pesquisar</button>
  </form>

  <ul>
    @foreach ($users as $user)
      <li>
        {{ $user->name }} -
        {{ $user->email }} -
        {{ $user->id }}
        | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
        | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        | <a href="{{ route('comments.index', $user->id) }}">Anotações ({{ count($user->comments) }})</a>
      </li>
    @endforeach
  </ul>

  <div class="py-4">
    {{ $users->appends([
        'search' => request()->get('search', '')
    ])->links() }}
  </div>
@endsection
