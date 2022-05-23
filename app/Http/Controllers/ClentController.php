<?php

namespace App\Http\Controllers;

use App\Models\Clent;
use App\Http\Requests\StoreClentRequest;
use App\Http\Requests\UpdateClentRequest;

class ClentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreClentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clent  $clent
     * @return \Illuminate\Http\Response
     */
    public function show(Clent $clent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clent  $clent
     * @return \Illuminate\Http\Response
     */
    public function edit(Clent $clent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClentRequest  $request
     * @param  \App\Models\Clent  $clent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClentRequest $request, Clent $clent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clent  $clent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clent $clent)
    {
        //
    }
}
