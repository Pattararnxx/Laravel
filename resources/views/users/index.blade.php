@extends('base')

@section('main')

User Index Page. {{ $user->name }}

<br/>
<a href="{{ route('logout') }}">Logout</a>

@endsection