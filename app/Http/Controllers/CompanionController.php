<?php

namespace App\Http\Controllers;

use App\Models\Companion;
use App\Http\Requests\StoreCompanionRequest;
use App\Http\Requests\UpdateCompanionRequest;

class CompanionController extends Controller
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
     * @param  \App\Http\Requests\StoreCompanionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companion  $companion
     * @return \Illuminate\Http\Response
     */
    public function show(Companion $companion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companion  $companion
     * @return \Illuminate\Http\Response
     */
    public function edit(Companion $companion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanionRequest  $request
     * @param  \App\Models\Companion  $companion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanionRequest $request, Companion $companion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companion  $companion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companion $companion)
    {
        //
    }
}
