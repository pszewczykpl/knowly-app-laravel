<?php

namespace App\Http\Controllers;

use App\Models\FileCategory;
use App\Http\Requests\StoreFileCategoryRequest;
use App\Http\Requests\UpdateFileCategoryRequest;

class FileCategoryController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFileCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileCategory  $fileCategory
     * @return \Illuminate\Http\Response
     */
    public function show(FileCategory $fileCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileCategoryRequest  $request
     * @param  \App\Models\FileCategory  $fileCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileCategoryRequest $request, FileCategory $fileCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileCategory  $fileCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileCategory $fileCategory)
    {
        //
    }
}
