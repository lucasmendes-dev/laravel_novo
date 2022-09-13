@extends('layouts.app')

@section('title', "Editar o Comentário do Usuário $user->name ")

@section('content')

<h1>Editar o Comentário do Usuário: {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('comments.update', $comment->id) }}" method="post">
  @method('PUT')
  @include('users.comments._partials.form')
</form>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
  @method('DELETE')
  @csrf
  <button type="submit">Excluir Usuário</button>
</form>

@endsection
