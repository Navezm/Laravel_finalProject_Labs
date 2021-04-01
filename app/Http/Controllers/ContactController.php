<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\EmailSubject;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Nav;
use App\Models\Placeholder;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $map = Map::first();
        $emailSubjects = EmailSubject::all();
        return view('pages.contact', compact('navs', 'emailSubjects', 'contacts', 'placeholders', 'logo', 'footers', 'map'));
    }

    public function backoffice()
    {
        $logo = Logo::first();
        $placeholders = Placeholder::first();
        $contacts = Contact::first();
        $emailSubjects = EmailSubject::all();
        return view('pages.bo.contact.contact', compact('logo', 'placeholders', 'contacts', 'emailSubjects'));
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
