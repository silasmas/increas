<?php

namespace App\Http\Controllers;

use App\Models\Favorie;
use App\Http\Requests\StoreFavorieRequest;
use App\Http\Requests\UpdateFavorieRequest;

class FavorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreFavorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorie $favorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorie $favorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavorieRequest $request, Favorie $favorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorie $favorie)
    {
        //
    }
}
