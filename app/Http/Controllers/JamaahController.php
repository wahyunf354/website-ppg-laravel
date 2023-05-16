<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJamaahRequest;
use App\Http\Requests\UpdateJamaahRequest;
use App\Models\Jamaah;

class JamaahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.jamaah.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJamaahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jamaah $jamaah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jamaah $jamaah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJamaahRequest $request, Jamaah $jamaah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jamaah $jamaah)
    {
        //
    }
}
