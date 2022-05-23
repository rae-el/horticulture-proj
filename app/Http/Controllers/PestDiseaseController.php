<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePestDiseaseRequest;
use App\Http\Requests\UpdatePestDiseaseRequest;
use App\Models\PestDisease;

class PestDiseaseController extends Controller
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
     * @param  \App\Http\Requests\StorePestDiseaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePestDiseaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PestDisease  $pestDisease
     * @return \Illuminate\Http\Response
     */
    public function show(PestDisease $pestDisease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PestDisease  $pestDisease
     * @return \Illuminate\Http\Response
     */
    public function edit(PestDisease $pestDisease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePestDiseaseRequest  $request
     * @param  \App\Models\PestDisease  $pestDisease
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePestDiseaseRequest $request, PestDisease $pestDisease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PestDisease  $pestDisease
     * @return \Illuminate\Http\Response
     */
    public function destroy(PestDisease $pestDisease)
    {
        //
    }
}
