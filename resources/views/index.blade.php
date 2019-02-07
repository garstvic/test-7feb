@extends('layouts.master')

@section('title')
    Laravel App
@endsection

@section('content')
    @if (strpos($login, 'signin') === 0)
        @include('user.signin')
    @elseif(strpos($login, 'signup') === 0)
        @include('user.signup')
    @endif
@endsection
