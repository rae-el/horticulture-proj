<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;
use App\Models\Plant;

class PlantController extends Controller
{
    // Define middleware permissions

    function __construct()
    {
        $this->middleware('permission:plant-list|plant-create|plant-edit|plant-delete',
            ['only' => ['index', 'show']]);
        $this->middleware('permission:plant-create',
            ['only' => ['create', 'store']]);
        $this->middleware('permission:plant-edit',
            ['only' => ['edit', 'update']]);
        $this->middleware('permission:plant-delete',
            ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::latest()->paginate(5);
        return view('plants.index' . compact('plants'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePlantRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlantRequest $request)
    {
        request()->validate([
            'genus' => 'required',
            'species' => 'required',
        ]);

        Plant::create($request->all());

        return redirect()->route('plants.index')->with('success', 'Plant created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Plant $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        return view('plants.show', compact('plant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Plant $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        return view('plants.edit', compact('plant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePlantRequest $request
     * @param \App\Models\Plant $plant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlantRequest $request, Plant $plant)
    {
        request()->validate([
            'genus' => 'required',
            'species' => 'required',
        ]);

        $plant->update($request->all());

        return redirect()->route('plants.index')->with('success', 'Plant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Plant $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();

        return redirect()->route('products.index')->with('success', 'Plant deleted successfully');
    }
}
