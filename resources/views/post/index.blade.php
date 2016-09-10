@extends('master.layout')
@section('content')
    <br/><br/>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Posts</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('post.create') }}"> Create a new post</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

    @foreach ($posts as $key => $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->post_title }}</td>
            <td>{{ $post->post_body }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('post.show',$post->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('post.edit',$post->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['post.destroy', $post->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach


{!! $posts->render() !!}
    <br/><br/>
@stop