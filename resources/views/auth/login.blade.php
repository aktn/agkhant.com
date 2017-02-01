@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <form class="form-horizontal" action="{{ url('/login') }}" method="POST" role="form">
            {{ csrf_field() }}

            <label for="email" class="col-md-4 control-label">Email</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            </div>
       		
        	</br></br>
       
            <label for="password" class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
            </div>
        </form>
                
    </div>
</div>
@endsection
