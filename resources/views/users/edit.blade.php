@extends('users.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User</h2>
        </div>
        <div class="pull-right">
            <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>

        </div>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input. <br><br>

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('users.update', $user->id)}} method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="Email">

            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
</form>
@endsection