@extends('layouts.master')

@section('title')
    Laravel App
@endsection

@section('content')
    <div class="row my-5 justify-content-md-center">
        <div class="col-md-4">
            <h1>Sign Up</h1>
            @if (count($errors))
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('app.signup') }}" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name">
                </div>
                
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" id="surname" class="form-control" name="surname">
                </div>
                
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" class="form-control" name="address">
                </div>
                
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" id="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-success">Sign Up</button>
                {{ csrf_field() }}  
            </form>
            <p class="my-2">Do have an account? <a href="{{ route('app.signin') }}">Sign in instead!</a></p>
        </div>
    </div>
@endsection