<?php

namespace App\Http\Controllers;

use App\Models\dash;
use Illuminate\Http\Request;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return true;
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
     * @param  \App\Models\dash  $dash
     * @return \Illuminate\Http\Response
     */
    public function show(dash $dash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dash  $dash
     * @return \Illuminate\Http\Response
     */
    public function edit(dash $dash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dash  $dash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dash $dash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dash  $dash
     * @return \Illuminate\Http\Response
     */
    public function destroy(dash $dash)
    {
        //
    }
}
