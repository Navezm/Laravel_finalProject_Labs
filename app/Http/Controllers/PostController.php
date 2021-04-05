<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Newsletter;
use App\Models\Placeholder;
use App\Models\Post;
use App\Models\Search;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('pages.bo.blog.article',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEntry = new Post;
        $newEntry->title = $request->title;
        $newEntry->content = $request->content;
        $newEntry->author_id = Auth::id();
        $newEntry->category_id = $request->category_id;
        $newEntry->approuved = false;
        $request->file('src')->storePublicly('img/blog/', 'public');
        $newEntry->src = $request->file('src')->hashName();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $paragraphs = explode('/', $post->content);
        $footers = Footer::first();
        $logo = Logo::first();
        $navs = Nav::all();
        $newsletters = Newsletter::first();
        $categories = Category::all();
        $searches = Search::first();
        $tags = Tag::all();
        $placeholders = Placeholder::first();
        $commentGood = Comment::where('approuved', true)->get();
        $comments = $commentGood->where('post_id', $post->id);
        $nbrComment = count($comments);
        return view('pages.blog-post',compact('post', 'footers', 'logo', 'navs', 'newsletters', 'categories', 'searches', 'tags', 'placeholders', 'paragraphs', 'comments', 'nbrComment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $paragraphs = explode('/', $post->content);
        $categories = Category::all();
        $tags = Tag::all();
        $commentGood = Comment::where('approuved', true)->get();
        $comments = $commentGood->where('post_id', $post->id);
        $nbrComment = count($comments);
        return view('pages.bo.blog.articleEdit',compact('post', 'categories','tags', 'paragraphs', 'comments', 'nbrComment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Storage::disk('public')->delete('img/blog'.$post->src);
        return redirect()->back();
    }
}
