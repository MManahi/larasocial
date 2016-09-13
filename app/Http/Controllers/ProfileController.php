<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $profiles = Profile::all();
            return view('profile.index', compact('profiles'));
        } else {
            return redirect('/login');
        }
    }

    public function create()
    {
        return view('profile.create');
    }


    public function store(Request $request)
    {

        $profile = new Profile();
        $profile->bio = $request->bio;
        $profile->basic_info = $request->basic_info;
        $profile->save();

        return redirect('profile');
    }

    public function show($id, Request $request)
    {
        if ($request->ajax()) {
            return URL::to('profile/' . $id);
        }

        $profile = Profile::findOrfail($id);
        return view('profile.show', compact('profile'));
    }

    public function edit($id, Request $request)
    {
        if ($request->ajax()) {
            return URL::to('profile/' . $id . '/edit');
        }


        $profile = Profile::findOrfail($id);
        return view('profile.edit', compact('profile'));
    }

    public function update($id, Request $request)
    {
        $profile = Profile::findOrfail($id);
        $profile->bio = $request->bio;
        $profile->basic_info = $request->basic_info;
        $profile->save();

        return redirect('profile');
    }

    public function destroy($id)
    {
        $profile = Profile::findOrfail($id);
        $profile->delete();
        return redirect('profile');
    }

}
