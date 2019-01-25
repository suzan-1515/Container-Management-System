@extends('layouts.app')

@section('content')
<style>
    body {
        background: url('{{ asset('/public/img/bg.png') }}') center center;
        background-size: cover;
    }
</style>

<div class="cont">
    <h1>Welcome to Maersk Line Shipping Portal!</h1>
    <p>Login to the system to manage the containers.</p>                            
</div>


@endsection