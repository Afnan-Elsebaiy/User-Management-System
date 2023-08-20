@extends('layouts.auth-master')

@section('content')
<a class="btn btn-outline-danger m-4" href="{{route('logout.perform')}}">Logout</a>
<div class="container">
  <div class="card align-self-center m-auto" style="width: 40rem;">
    <div class="card-body d-flex justify-content-center ">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Role</th>
            <th scope="col-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users As $user)
          @if(auth()->user()->role == 'Admin')
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td class="">
             
                <a class="btn btn-outline-success" href="{{ route('profile.edit',$user->id) }}">Edit</a>
             
              <form action="{{ route('profile.destroy',$user->id) }}" method="Post">
                @csrf
                @method('DELETE')
                <a class="btn btn-outline-danger" onclick="return confirm('Are You Sure You Want To Proceed With The Current Request!') || event.stopImmediatePropagation()">Delete</a>
              </form>
            </td>
          </tr>
          @elseif(auth()->user()->email == $user->email)
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td class="">
             
                <a class="btn btn-outline-success" href="{{ route('profile.edit',$user->id) }}">Edit</a>
                @if(auth()->user()->role == 'Admin')
              <form action="{{ route('profile.destroy',$user->id) }}" method="Post">
                @csrf
                @method('DELETE')
                <a class="btn btn-outline-danger" onclick="return confirm('Are You Sure You Want To Proceed With The Current Request!') || event.stopImmediatePropagation()">Delete</a>
              </form>
              @endif
            </td>
          </tr>
          @endif
          @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
</div>


@endsection