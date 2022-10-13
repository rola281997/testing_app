<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC')->limit(5)->get();
        return view('posts.index', compact('posts'));
    }

    public function create(Request $request)
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = [
            'headline' => $request->headline,
            'published_date' => Carbon::now()
        ];
        if (Post::create($post)) {
            return redirect()->route('posts.create')->with('success', 'post created successfully.');
        }
        return redirect()->route('posts.create')->with('error', 'error happens during saving please try again.');
    }
}
