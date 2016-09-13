@extends('master.layout')
@section('content')
    <br/><br/>
    <div class='container'>
        <h1>Show Profile</h1>
        <br>
        <form method='get' action='{{url("profile")}}'>
            <button class='btn btn-primary'>My Profile</button>
        </form>
        <br>
        <table class='table table-bordered'>
            <tbody>
            <tr>
                <td>
                    <b><i>Bio : </i></b>
                </td>
                <td>{{$profile->bio}}</td>
            </tr>

            <tr>
                <td>
                    <b><i>Basic Info : </i></b>
                </td>
                <td>{{$profile->basic_info}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <br/><br/>
@stop
