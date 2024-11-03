<?php

namespace App\Http\Controllers;

use App\Models\postdb;
use Illuminate\Http\Request;

class PostdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "nnnnnn";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postdb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=New postdb;
        $post->title= $request->title;
        $post->body= $request->body;
        $post->save();
        return response("jl hgh");
    }

    /**
     * Display the specified resource.
     */
    public function show(postdb $postdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(postdb $postdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, postdb $postdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(postdb $postdb)
    {
        //
    }
}
