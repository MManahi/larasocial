@extends('master.layout')
@section('content')
    <br/>
    <div><h3 class="col-lg-offset-5">{{ucfirst(Auth::user()->name)}} <span>Profile</span></h3></div>
    <div class='container'>
        <h1 style="color: white">Index</h1>
        @foreach($profiles as $Profile)
            <div class="container-fluid">
                <div class="jumbotron">
                    <form class='col s3 col-lg-offset-8' method='get' action='{{url("profile")}}/create'>
                        <button class='btn btn-primary' type='submit'>Add your bio and info</button>
                    </form>
                    <h4>Username</h4>
                    <p>{{ucfirst(Auth::user()->name)}}</p>
                    <hr>
                    <h4>Registration</h4>
                    <p>{{date_format($Profile->created_at, "Y/m/d")}}</p>
                    <hr>
                    <h4>Bio</h4>
                    <p>{{$Profile->bio}}</p>
                    <hr>
                    <h4>Info</h4>
                    <p>{{$Profile->basic_info}}</p>
                    <a href="/profile/{{$Profile->id}}/delete" class='btn btn-danger btn-md'><i>delete</i></a>
                    <a href='{{url('/profile/'.$Profile->id.'/edit')}}' class=' btn btn-primary btn-md'><i
                        >edit</i></a>
                    <a href='{{url('/profile/'.$Profile->id)}}' class=' btn btn-warning btn-md'><i
                        >info</i></a>

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

