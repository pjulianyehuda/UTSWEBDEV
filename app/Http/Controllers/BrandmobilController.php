<?php

namespace App\Http\Controllers;

use App\Models\brandmobil;
use Illuminate\Http\Request;

class BrandmobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brandmobil = brandmobil::all();
        return view('brandmobil.index', compact('brandmobil'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brandmobil = brandmobil::all();
        return view('brandmobil.index', compact('brandmobil'));
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
     * @param  \App\Models\brandmobil  $brandmobil
     * @return \Illuminate\Http\Response
     */
    public function show(brandmobil $brandmobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brandmobil  $brandmobil
     * @return \Illuminate\Http\Response
     */
    public function edit(brandmobil $brandmobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brandmobil  $brandmobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, brandmobil $brandmobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brandmobil  $brandmobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(brandmobil $brandmobil)
    {
        //
    }
}
