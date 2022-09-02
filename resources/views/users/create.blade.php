@extends('layouts.app')

@section('title', 'Novo usuário')
    
@section('content')
<h1>Novo Usuário</h1>

@if($errors->any())
  
  @foreach ($errors->all() as $error)
      <ul class="error">
        <li>{{ $error }}</li>
      </ul>
  @endforeach    
@endif

<form action="{{ route('users.store') }}" method="POST">
  @csrf
  <input type="text" name="name" id="name" placeholder="Nome: " value="{{ old('name') }}">
  <input type="email" name="email" id="email" placeholder="E-mail: " value="{{ old('email') }}">
  <input type="password" name="password" id="password" placeholder="Senha..." >
  <input type="submit" value="Enviar">
</form>

@endsection