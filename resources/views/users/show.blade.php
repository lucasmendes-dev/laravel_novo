@extends('layouts.app')

@section('title', 'Laravel')
    
@section('content')

<h1>Usuário {{ $user->name }}</h1>

<ul>
  <li>{{ $user->name }}</li>
  <li>{{ $user->email }}</li>

</ul>

@endsection