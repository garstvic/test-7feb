@extends('layouts.master')

@section('title')
    Laravel App
@endsection

@section('content')
    @if (Auth::check())
        <h1>You have been signin!</h1>
        <a href="{{ route('app.logout') }}" class="btn btn-success">Logout</a>
    @else
        <div class="row my-5">
            <div class="col">
                <h1>Welcome to Laravel 5 Application</h1>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('app.signin') }}" class="btn btn-success">Sign In</a>
                    <a href="{{ route('app.signup') }}" class="btn btn-success">Sign Up</a>
                </div>
            </div>
        </div>
    @endif
@endsection
