@extends('layouts.auth-master')

@section('content')
<a class="btn btn-outline-info m-4" href="{{route('login.perform')}}">Sign in</a>
<div class="container">
    <div class="card align-self-center m-auto" style="width: 40rem;">
        <div class="card-body d-flex justify-content-center ">
            <form method="post" action="{{ route('register.perform') }}" class="">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <!-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> -->

                <h1 class="h3 mb-3 fw-normal ">Register</h1>
                <div class="form-group row">
                    <label for="floatingEmail" class="col-sm-6  col-form-label">Email address</label>
                    <div class="form-group form-floating mb-3 col-sm-6 ">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                        @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="floatingName" class="col-sm-6 col-form-label">Name</label>
                    <div class="form-group form-floating mb-3 col-sm-6 ">

                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name" required="required" autofocus>
                        @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="floatingPassword" class="col-sm-6  col-form-label ">Password</label>
                    <div class="form-group form-floating mb-3 col-sm-6">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="floatingConfirmPassword" class="col-sm-6  col-form-label">Confirm Password</label>
                    <div class="form-group form-floating mb-3 col-sm-6 ">
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                        @if ($errors->has('password_confirmation'))
                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="floatingrole" class="col-sm-6  col-form-label">Role</label>
                    <div class="form-group form-floating mb-3 col-sm-6 ">
                        <input type="text" class="form-control" name="role" value="{{ old('role') }}" placeholder="role" required="required" autofocus>
                        @if ($errors->has('role'))
                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                        @endif
                    </div>
                </div>
                <button  class="btn btn-outline-primary" type="submit">Register</button>
                @include('auth.partials.copy')
            </form>
        </div>
    </div>
</div>


@endsection