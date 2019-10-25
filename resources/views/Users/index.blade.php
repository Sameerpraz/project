@extends('dashboardhome')

@section('main')

@if($message= Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif

<div class="row">
<div class="col-sm-12">
<div>
    <a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary">Add new users</a>
    </div> 
    <h1 class="display-3">Users</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Password</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

<div class="row">
<div class="col-12 text-center">
{{$users->links()}}
</div>
</div>
@endsection