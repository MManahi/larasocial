@extends('master.layout')
@section('content')
    <br/><br/>
    <div class = 'container'>
        <h1>Create New Post</h1> <br/>
        <form method = 'get' action = '{{url("post")}}'>
            <button class = 'btn btn-danger' style="color: white">Post Index</button>
        </form>
        <br>
        <form method = 'POST' action = '{{url("post")}}'>
            <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

            <div class="form-group">
                <label for="name" style="color:#2e3436">Title</label>
                <input id="name" name = "post_title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="price" style="color:#2e3436">Content</label>
                <input id="price" name = "post_body" type="text" class="form-control">
            </div>
            <button class = 'btn btn-primary' type ='submit'>Create</button>
        </form>
    </div>
    <br/><br/>
@stop
