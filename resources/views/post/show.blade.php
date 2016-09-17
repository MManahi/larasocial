@extends('master.layout')
@section('content')
    <br/><br/>
    <div class='container'>
        <h3>Post Info</h3>
        <br>
        <form method='get' action='{{url("post")}}'>
            <button class='btn btn-primary'>Timeline</button>
        </form>
        <br>
        <div class="jumbotron">
            <p> {{$post->post_title}}</p>

            <h4>{{$post->post_body}}</h4><br/>

            @if(isset($post->attachment->path))

                @if($post->attachment->type =='image')
                    <img width="300" height="300" class="img-responsive" src="{{url($post->attachment->path)}}">
                @else
                    <video width="400" controls>
                        <source src="{{url($post->attachment->path)}}" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                @endif

            @endif
            @foreach($post->comments as $comment)
                <div class="panel-heading"><h4 class="form-control input-lg">{{$comment->comment_body}}</h4></div>
                @foreach($comment->replies as $replay)
                    <div class="panel-body col-md-offset-1"><h5
                                class="form-control input-sm">{{$replay->comment_body}}</h5></div>
                @endforeach
            @endforeach

        </div>
    </div>
    <br/><br/>
@stop
