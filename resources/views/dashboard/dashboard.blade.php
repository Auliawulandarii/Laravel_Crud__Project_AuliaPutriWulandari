@extends('layouts.maindash')

@section('content')
@if(auth()->check())
<h4>    Hi, {{ auth()->user()->name }}
</h4>
@else
<a class="nav-link" href="/login">Login</a>
@endif

@endsection
