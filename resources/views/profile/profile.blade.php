
@extends('layouts.auth-master')

@section('content')
<div class="container">
    <div class="card align-self-center m-auto" style="width: 40rem;">
        <div class="card-body d-flex justify-content-center ">
            <form method="post" action="{{ route('profile.update',$user->id) }}" class="">

                @csrf
                @method('PUT')
                <!-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> -->

                <div class="card-header">{{$user->name}}'s Profile</div>
                <div class="form-group row">
                    <label for="floatingEmail" class="col-sm-6  col-form-label" >Email address</label>
                    <div class="form-group form-floating mb-3 col-sm-6 ">
                        <input type="email" class="form-control" name="email" value="{{$user->email}}"  placeholder="name@example.com" required="required" autofocus disabled>
                        @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="floatingName" class="col-sm-6 col-form-label">Name</label>
                    <div class="form-group form-floating mb-3 col-sm-6 ">

                        <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="name" required="required" autofocus>
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
                        <input type="text" class="form-control" name="role" value="{{$user->role}}" placeholder="role" required="required" autofocus disabled>
                        @if ($errors->has('role'))
                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success">Update</button>
                @include('auth.partials.copy')
            </form>
        </div>
    </div>
</div>


@endsection