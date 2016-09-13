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
            </tbody>
        </table>
    </div>
    <br/><br/>
@stop
