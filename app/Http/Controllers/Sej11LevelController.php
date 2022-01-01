<?php

namespace App\Http\Controllers;

use App\Models\Sej11_Level;
use App\Http\Requests\StoreSej11_LevelRequest;
use App\Http\Requests\UpdateSej11_LevelRequest;

class Sej11LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/materis', [
            'sej11_level' => Sej11_Level::all()
        ]);
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
     * @param  \App\Http\Requests\StoreSej11_LevelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSej11_LevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sej11_Level  $sej11_Level
     * @return \Illuminate\Http\Response
     */
    public function show(Sej11_Level $sej11_Level)
    {
        return view('/materi', [
            "sej11_level" => $sej11_Level
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sej11_Level  $sej11_Level
     * @return \Illuminate\Http\Response
     */
    public function edit(Sej11_Level $sej11_Level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSej11_LevelRequest  $request
     * @param  \App\Models\Sej11_Level  $sej11_Level
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSej11_LevelRequest $request, Sej11_Level $sej11_Level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sej11_Level  $sej11_Level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sej11_Level $sej11_Level)
    {
        //
    }

    public function quiz_index(){
        return view('/quiz/pilihan_level', [
            'sej11_level' => Sej11_Level::all()
        ]);
    }

    public function menu_play_show(Sej11_Level $sej11_Level)
    {
        return view('quiz/menu_play', [
            "sej11_level" => $sej11_Level
        ]);
    }
}
