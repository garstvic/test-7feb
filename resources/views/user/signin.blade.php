<div class="row my-5 justify-content-md-center">
    <div class="col-md-4">
        <h1>Sign In</h1>
        @if (count($errors))
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('app.signin') }}" method="post">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" id="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password">
            </div>
                <button type="submit" class="btn btn-success">Sign In</button>
                {{ csrf_field() }}  
        </form>
        <p class="my-2">Don't have an account? <a href="{{ route('app.signup') }}">Sign up instead!</a></p>
    </div>
</div>
