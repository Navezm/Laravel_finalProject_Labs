<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::first();
        return view('pages.bo.logo',compact('logo'));
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
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logo $logo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
