@extends('master.layout')
@section('content')
    <br/><br/>
    <h3>{{ucfirst(Auth::user()->name)}} <span>Profile</span></h3>
@stop