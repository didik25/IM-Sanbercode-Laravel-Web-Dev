<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = \DB::table('cast')->get();
        return view('cast.index', compact('cast')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');//
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);
        \DB::table('cast')->insert([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' => $request['bio']
        ]);
        return redirect('/cast');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

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
       $cast = DB::table('cast')-where('id', $id)->first();
       return view('cast.edit', ['cast' => $cast]); //
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
       $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);
        
        DB::table('cast')
        ->where('id',$id)
        ->update (
            ['nama' => $request->nama],
            ['umur' => $request->umur],
            ['bio' => $request->bio]//
    );
        return redirect('/cast');

}       
}
