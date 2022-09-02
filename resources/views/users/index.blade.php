@extends('layouts.app')

@section('title', 'Laravel')
    
@section('content')

{{Session('msg')}}
  <h1>
    Listagem de usuários 
    ( <a href={{ route("users.create") }}>+</a> )
  </h1>

  <ul>
    @foreach ($users as $user)
      <li>
        {{ $user->name }} -
        {{ $user->email }}
        {{ $user->id }}
        | <a href="{{ route('users.edit', $user->id)}}">Editar</a>
        | <a href="{{ route('users.show', $user->id)}}">Detalhes</a>
      </li>
    @endforeach
  </ul>

@endsection