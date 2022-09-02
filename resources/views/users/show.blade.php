@extends('layouts.app')

@section('title', 'Laravel')
    
@section('content')

<h1>Usuário {{ $user->name }}</h1>

<ul>
  <li>{{ $user->name }}</li>
  <li>{{ $user->email }}</li>
  <form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Excluir Usuário</button>
  </form>
</ul>



@endsection