@extends('master.layout')
@section('content')
    <br/><br/>
    <div class='container'>
        <h1 style="color: white">Posts Index</h1>
        <form class='col s3' method='get' action='{{url("post")}}/create'>
            <button class='btn btn-primary' type='submit'>Create New Post</button>
        </form>
        <br>

        <br>
        @foreach($posts as $Post)
            <div class="jumbotron">
                <h4>{{$Post->post_title}}</h4>
                <div class="col-md-3 col-md-offset-9">

                    <a role="menuitem" tabindex="-1" href="{{url('/post/'.$Post->id)}}"
                       class='btn btn-warning btn-md'>info</a>
                    <a role="menuitem" tabindex="-1" href="{{url('/post/'.$Post->id.'/edit')}}"
                       class='btn btn-primary btn-md'>edit</a>
                    <a role="menuitem" tabindex="-1" href="{{url('post/'.$Post->id.'/delete')}}"
                       class='btn btn-danger btn-md'>delete</a>
                </div>
                <br/>
                <p>{{$Post->post_body}}</p>
                <h6 style="font-size:x-small ">Posted: <span>{{date_format($Post->created_at, "Y/m/d")}}</span></h6>
                @if(isset($Post->attachment->path))

                    @if($Post->attachment->type =='image')
                        <img width="480" height="360" class="img-responsive img-rounded col-md-offset-2"
                             src="{{url($Post->attachment->path)}}">
                    @else
                        <video width="400" controls>
                            <source src="{{url($Post->attachment->path)}}" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    @endif

                @endif
                <br/>
                <hr>
                <div class="container">

                    @foreach($Post->comments as $comment)
                        <div class="panel-heading"><h4 class="form-control input-lg">{{$comment->comment_body}}</h4></div>
                        @foreach($comment->replies as $replay)
                            <div class="panel-body col-md-offset-1"><h5 class="form-control input-sm">{{$replay->comment_body}}</h5></div>
                        @endforeach
                        <div class="input-group col-sm-offset-1"><br/>
                            <form action={{url('comment')}} method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="text" name="comment_body" class="form-control new-comment"
                                       placeholder="Add a replay">
                                <input type="hidden" name="type_id" value="{{$comment->id}}">
                                <input type="hidden" name="type" value="comment">

                                <span class="input-group-btn">

                                 <button class="btn btn-secondary  btn-warning add-comment" type="submit"
                                         name="Add a replay">Replay</button>
                                </span>
                            </form>
                        </div>
                        <br/>

                    @endforeach

                    <div class="input-group"><br/>
                        <form action={{url('comment')}} method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="text" name="comment_body" class="form-control new-comment"
                                   placeholder="Add new comment">
                            <input type="hidden" name="type_id" value="{{$Post->id}}">
                            <input type="hidden" name="type" value="post">
                            <br/>
                            <span class="input-group-btn">
                                 <button class="btn btn-secondary add-comment btn-primary"
                                         type="submit">Comment</button>
                                </span>
                        </form>
                    </div>
                    <br/>
                </div>
            </div>
        @endforeach
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class='AjaxisModal'>
        </div>
    </div>
    <script> var baseURL = "{{URL::to('/')}}"</script>
    <script src="{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
    <script src="{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
    <br/><br/>
@stop
