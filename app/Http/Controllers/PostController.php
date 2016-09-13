<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Query\Builder;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }


    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $post = new Post();
        $post->post_title = $request->post_title;
        $post->post_body = $request->post_body;
        $post->save();
        return redirect('post');
    }

    public function show($id, Request $request)
    {
        if ($request->ajax()) {
            return URL::to('post/' . $id);
        }

        $post = Post::findOrfail($id);
        return view('post.show', compact('post'));
    }

    public function edit($id, Request $request)
    {
        if ($request->ajax()) {
            return URL::to('post/' . $id . '/edit');
        }


        $post = Post::findOrfail($id);
        return view('post.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $post = Post::findOrfail($id);
        $post->post_title = $request->post_title;
        $post->post_body = $request->post_body;
        $post->save();

        return redirect('post');
    }

    public function destroy($id)
    {
        $post = Post::findOrfail($id);
        $post->delete();
        return redirect('post');
    }


}