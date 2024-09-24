<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionalRequest;
use App\Models\Regional;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regionales = Regional::all();
        return view('regionales.index', compact('regionales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('regionales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegionalRequest $request)
    {
        Regional::create($request->all());
        return redirect()->route('regionales.edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Regional $regional)
    {
        return view('regionales.edit',compact('regional'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegionalRequest $request, Regional $regional)
    {
        $regional->update($request->all());
        return redirect()->route('regionales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Regional $regional)
    {
        $regional->delete();
        return redirect()->route('regionales.index');
    }
}

