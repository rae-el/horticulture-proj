<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMotherRequest;
use App\Http\Requests\UpdateMotherRequest;
use App\Models\Mother;

class MotherController extends Controller
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
     * @param  \App\Http\Requests\StoreMotherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMotherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function show(Mother $mother)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function edit(Mother $mother)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMotherRequest  $request
     * @param  \App\Models\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMotherRequest $request, Mother $mother)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mother $mother)
    {
        //
    }
}
