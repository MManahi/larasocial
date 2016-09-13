@extends('master.layout')
@section('content')
    <br/><br/>
    <div class = 'container'>
        <h1>Edit Post</h1>
        <form method = 'get' action = '{{url("post")}}'>
            <button class = 'btn btn-danger'>Post Index</button>
        </form>
        <br>
        <form method = 'POST' action = '{{url("post")}}/{{$post->id}}/update'>
            <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

            <div class="form-group">
                <label for="name">Title</label>
                <input id="name" name = "post_title" type="text" class="form-control" value="{{$post->name}}">
            </div>

            <div class="form-group">
                <label for="price">Content</label>
                <input id="price" name = "post_body" type="text" class="form-control" value="{{$post->price}}">
            </div>
            <button class = 'btn btn-primary' type ='submit'>Update</button>
        </form>
    </div>
    <br/><br/>
@stop
