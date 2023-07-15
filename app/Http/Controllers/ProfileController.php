<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showProfile(Request $request)
    {
        return view('guru.edit',[
            'request' => $request,
            'user' => $request->user(),
        ]);
    }

    public function showProfilesiswa(Request $request)
    {
        return view('siswa.edit',[
            'request' => $request,
            'user' => $request->user(),
        ]);
    }

    public function showProfilekoor(Request $request)
    {
        return view('koor.edit',[
            'request' => $request,
            'user' => $request->user(),
        ]);
    }

    public function showProfilewalas(Request $request)
    {
        return view('walas.edit',[
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}
