@extends('master.layout')
@section('content')
    <br/><br/>
    <div class='container'>
        <h1>Create New Post</h1> <br/>
        <form method='get' action='{{url("post")}}'>
            <input type='hidden' name='_token' value='{{Session::token()}}'>
            <button class='btn btn-danger' style="color: white">Post Index</button>
        </form>
        <br>
        <form method='POST' enctype="multipart/form-data" action='{{url("post")}}'>
            <input type='hidden' name='_token' value='{{Session::token()}}'>

            <div class="form-group">
                <label for="name" style="color:#2e3436">Title</label>
                <input id="name" name="post_title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="price" style="color:#2e3436">Content</label>
                <input id="price" name="post_body" type="text" class="form-control">
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <label>image</label>
                    <p>Upload an image</p>
                    <input type="file" accept="image/*" name="image" placeholder="upload an image"/>
                </div>
                <div class="col-sm-3">
                    <label>image</label>
                    <p>Upload a video</p>
                    <input type="file" accept="video/*" name="video" placeholder="upload a video"/>
                </div>
                <div class="col-sm-3">
                    <br/>
                    <br/>
                    <p class="well-sm alert-danger">Available media types: jpg, gif, hp2, png and mp4</p></div>
                </div>

            <br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                <img class="img-responsive" src="/images/{{ Session::get('path') }}">
            @endif
            <button class='btn btn-primary' type='submit'>Create</button>
        </form>
    </div>
    <br/><br/>
@stop
