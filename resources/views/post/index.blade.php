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
                <p>{{$Post->post_body}}</p>
                <i>Date: <span>{{date_format($Post->created_at, "Y/m/d")}}</span></i>
                <br/><hr>
                <a href="/post/{{$Post->id}}/delete" class='btn btn-danger btn-md'><i>delete</i></a>
                <a href='{{url('/post/'.$Post->id.'/edit')}}' class=' btn btn-primary btn-md'><i
                    >edit</i></a>
                <a href='{{url('/post/'.$Post->id)}}' class=' btn btn-warning btn-md'><i
                    >info</i></a>

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
