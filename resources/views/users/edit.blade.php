@extends('layouts.app')

@section('title', "Editar o Usuário $user->name ")
    
@section('content')

<h1>Editar Usuário: {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('users.update', $user->id) }}" method="post">
  @method('PUT')
  @include('users._partials.form')
</form>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
  @method('DELETE')
  @csrf
  <button type="submit">Excluir Usuário</button>
</form>

@endsection