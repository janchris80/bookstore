<?php

namespace App\Http\Controllers;

use App\Models\BookLend;
use App\Http\Requests\StoreBookLendRequest;
use App\Http\Requests\UpdateBookLendRequest;

class BookLendController extends Controller
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
     * @param  \App\Http\Requests\StoreBookLendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookLendRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookLend  $bookLend
     * @return \Illuminate\Http\Response
     */
    public function show(BookLend $bookLend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookLend  $bookLend
     * @return \Illuminate\Http\Response
     */
    public function edit(BookLend $bookLend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookLendRequest  $request
     * @param  \App\Models\BookLend  $bookLend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookLendRequest $request, BookLend $bookLend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookLend  $bookLend
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookLend $bookLend)
    {
        //
    }
}
