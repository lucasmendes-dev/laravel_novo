@extends('layouts.app')

@section('title', "Editar o Usuário $user->name ")
    
@section('content')

<h1>Editar Usuário: {{ $user->name }}</h1>

<form action="{{ route('users.update', $user->id) }}" method="post">
  @method('PUT')
  @csrf
  <input type="text" name="name" id="name" placeholder="Nome: " value="{{ $user->name }}">
  <input type="email" name="email" id="email" placeholder="E-mail: " value="{{ $user->email }}">
  <input type="password" name="password" id="password" placeholder="Senha..." >
  <input type="submit" value="Alterar">
</form>

@endsection