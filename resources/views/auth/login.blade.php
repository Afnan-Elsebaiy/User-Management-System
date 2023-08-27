@extends('layouts.auth-master')

@section('content')
    <div class="container">
        <div class="card align-self-center m-auto" style="width: 40rem;">
            <div class="card-body d-flex justify-content-center ">
                <form method="post" action="{{ route('login.perform') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <!-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> -->

                    <h1 class="h3 mb-3 fw-normal">Login</h1>

                    @include('layouts.partials.messages')
                    <div class="form-group row">
                        <label for="floatingName" class="col-sm-6  col-form-label">Email</label>
                        <div class="form-group form-floating mb-3">
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="email" required="required" autofocus>

                            @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="floatingPassword" class="col-sm-6  col-form-label">Password</label>
                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">

                            @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-outline-primary" type="submit">Login</button>
                    <p><a class="link-opacity-75" href="{{route('register.perform')}}">Create a new account</a></p>
                    @include('auth.partials.copy')
                </form>
            </div>
        </div>
    </div>


@endsection