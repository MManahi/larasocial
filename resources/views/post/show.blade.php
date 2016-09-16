@extends('master.layout')
@section('content')
    <br/><br/>
    <div class='container'>
        <h1>Show Post</h1>
        <br>
        <form method='get' action='{{url("post")}}'>
            <button class='btn btn-primary'>Posts Index</button>
        </form>
        <br>
        <table class='table table-bordered'>
            <tbody>
            <tr>
                <td>
                    <b><i>Title : </i></b>
                </td>
                <td>{{$post->post_title}}</td>
            </tr>

            <tr>
                <td>
                    <b><i>Content : </i></b>
                </td>
                <td>{{$post->post_body}}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Attachment : </i></b>
                </td>
                <td>
                    @if(isset($post->attachment->path))

                        @if($post->attachment->type =='image')
                            <img width="300" height="300"  class="img-responsive" src="{{url($post->attachment->path)}}">
                        @else
                            <video width="400" controls>
                                <source src="{{url($post->attachment->path)}}" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                        @endif

                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <br/><br/>
@stop
