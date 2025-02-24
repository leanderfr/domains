<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $domains = Domains::query()->orderBy('domain','asc')->get();
        dd($domains); 
        return view('domain.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('domain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        return view('domain.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domains $domains)
    {
        return view('domain.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Domains $domains)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domains $domains)
    {
        //
    }
}
