<?php

namespace App\Http\Controllers;

use App\Attachment;
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
        $post->user_id = Auth::user()->id;
        $post->post_title = $request->post_title;
        $post->post_body = $request->post_body;
        $post->save();

        if($request->hasFile('image')){
            $destinationPath = 'public/images';
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(1111111, 99999999) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $image_attach = $destinationPath . '/' . $fileName;
            $this->Attach($post->id ,'image',$image_attach);
        }

        if($request->hasFile('video')){
            $destinationPath = 'public/videos';
            $image = $request->file('video');
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(1111111, 99999999) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $image_attach = $destinationPath . '/' . $fileName;
            $this->Attach($post->id ,'video',$image_attach);
        }

        return redirect('post');
    }

    public function Attach($post_id , $type , $image){

        $attachment = new Attachment();
        $attachment->type = $type;
        $attachment->post_id = $post_id;
        $attachment->attach_title = '';
        $attachment->path = $image;
        $attachment->save();
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