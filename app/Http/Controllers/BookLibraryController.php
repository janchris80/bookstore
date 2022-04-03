<?php

namespace App\Http\Controllers;

use App\Models\BookLibrary;
use App\Http\Requests\StoreBookLibraryRequest;
use App\Http\Requests\UpdateBookLibraryRequest;

class BookLibraryController extends Controller
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
     * @param  \App\Http\Requests\StoreBookLibraryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookLibraryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookLibrary  $bookLibrary
     * @return \Illuminate\Http\Response
     */
    public function show(BookLibrary $bookLibrary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookLibrary  $bookLibrary
     * @return \Illuminate\Http\Response
     */
    public function edit(BookLibrary $bookLibrary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookLibraryRequest  $request
     * @param  \App\Models\BookLibrary  $bookLibrary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookLibraryRequest $request, BookLibrary $bookLibrary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookLibrary  $bookLibrary
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookLibrary $bookLibrary)
    {
        //
    }
}
