<?php

namespace App\Http\Controllers;

use App\Models\Bloodpresure;
use App\Http\Requests\StoreBloodpresureRequest;
use App\Http\Requests\UpdateBloodpresureRequest;
use App\Charts\Blood;


class BloodpresureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bp = Bloodpresure::all();
        $Blood = new Blood();
        /* $Blood::build()->dataset($bp); */

        return view('welcome', compact('Blood'));
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
     * @param  \App\Http\Requests\StoreBloodpresureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBloodpresureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bloodpresure  $bloodpresure
     * @return \Illuminate\Http\Response
     */
    public function show(Bloodpresure $bloodpresure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bloodpresure  $bloodpresure
     * @return \Illuminate\Http\Response
     */
    public function edit(Bloodpresure $bloodpresure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBloodpresureRequest  $request
     * @param  \App\Models\Bloodpresure  $bloodpresure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBloodpresureRequest $request, Bloodpresure $bloodpresure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bloodpresure  $bloodpresure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bloodpresure $bloodpresure)
    {
        //
    }
}