<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $comments = Comment::all();
            return view('comment.index', compact('comments'));
        } else {
            return redirect('/post');
        }
    }

    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $comment = new comment();
        $comment->comment_body = $request->get('comment_body');
        $comment->type = $request->get('type');
        $comment->type_id = $request->get('type_id');
        $comment->save();
        return redirect('post');
    }

    public function show($id, Request $request)
    {
        if ($request->ajax()) {
            return URL::to('post/' . $id);
        }

        $comment = comment::findOrfail($id);
        return view('post.show', compact('comment'));
    }

    public function edit($id, Request $request)
    {
        if ($request->ajax()) {
            return URL::to('post/' . $id . '/edit');
        }


        $comment = comment::findOrfail($id);
        return view('post.edit', compact('comment'));
    }

    public function update($id, Request $request)
    {
        $comment = comment::findOrfail($id);
        $comment->bio = $request->bio;
        $comment->basic_info = $request->basic_info;
        $comment->save();

        return redirect('post');
    }

    public function destroy($id)
    {
        $comment = comment::findOrfail($id);
        $comment->delete();
        return redirect('post');
    }
}
