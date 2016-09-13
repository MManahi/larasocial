@extends('master.layout')
@section('content')
    <br/><br/>
    <div class = 'container'>
        <h1>Edit Profile</h1>
        <br/>
        <form method = 'get' action = '{{url("profile")}}'>
            <button class = 'btn btn-danger'>My Profile</button>
        </form>
        <br>
        <form method = 'POST' action = '{{url("profile")}}/{{$profile->id}}/update'>
            <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

            <div class="form-group">
                <label for="name" style="color: #2e3436">Bio</label>
                <input id="name" name = "bio" type="text" class="form-control" value="{{$profile->name}}">
            </div>

            <div class="form-group">
                <label for="price" style="color: #2e3436">Info</label>
                <input id="price" name = "basic_info" type="text" class="form-control" value="{{$profile->price}}">
            </div>
            <button class = 'btn btn-primary' type ='submit'>Update</button>
        </form>
    </div>
    <br/><br/>
@stop
