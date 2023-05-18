<?php

namespace App\Http\Controllers;

use App\Models\FuelTypes;
use App\Http\Requests\StoreFuelTypesRequest;
use App\Http\Requests\UpdateFuelTypesRequest;

class FuelTypesController extends Controller
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
     * @param  \App\Http\Requests\StoreFuelTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFuelTypesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FuelTypes  $fuelTypes
     * @return \Illuminate\Http\Response
     */
    public function show(FuelTypes $fuelTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FuelTypes  $fuelTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(FuelTypes $fuelTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFuelTypesRequest  $request
     * @param  \App\Models\FuelTypes  $fuelTypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFuelTypesRequest $request, FuelTypes $fuelTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FuelTypes  $fuelTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuelTypes $fuelTypes)
    {
        //
    }
}
