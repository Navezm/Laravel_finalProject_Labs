<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Newsletter;
use App\Models\Phone;
use App\Models\Placeholder;
use App\Models\Post;
use App\Models\Resource;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navs = Nav::all();
        $contacts = Contact::first();
        $placeholders = Placeholder::first();
        $logo = Logo::first();
        $footers = Footer::first();
        $services = Services::first();
        $resources = Resource::all();
        $phones = Phone::first();
        $posts = Post::all();
        $newsletters = Newsletter::first();

        $lastId = $resources->last()->id;
        $lastServices = $resources->whereBetween('id', [($lastId-5),($lastId)]);

        return view('pages.services', compact('navs', 'contacts', 'placeholders', 'logo', 'footers', 'services', 'resources', 'posts', 'newsletters', 'phones', 'lastServices'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }
}
