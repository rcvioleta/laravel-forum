<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use Session;
use Auth;

class DiscussionController extends Controller
{
    public function create() 
    {
        return view('discuss');
    }

    public function store()
    {
        $request = request();
        $request->validate([
            'title' => 'required',
            'channel_id' => 'required',
            'content' => 'required'
        ]);

        $discussion = Discussion::create([
            'user_id' => Auth::id(),
            'channel_id' => $request->channel_id,
            'title' => $request->title,
            'content' => $request->content,
            'slug' => str_slug($request->title)
        ]);

        Session::flash('success', 'Discussion was added successfully!');
        return redirect()->route('discussions.show', ['slug' => $discussion->slug]);
    }

    public function show($slug)
    {
        $discussion = Discussion::where('slug', $slug)->first();
        return view('discussions.show')->with('discussion', $discussion);
    }
}
