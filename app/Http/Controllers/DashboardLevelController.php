<?php

namespace App\Http\Controllers;

use App\Models\Sej11_level;
use App\Models\Sej11_soal;
use Illuminate\Http\Request;

class DashboardLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.levels.index', [
            'sej11_levels' => Sej11_level::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.levels.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_sub_bab' => 'required',
            'gambar_utuh' => 'required',
            'materi' => 'required',
            'soal1' => 'required',
            'soal2' => 'required',
            'soal3' => 'required',
            'soal4' => 'required',
            'soal5' => 'required',
            'soal7' => 'required',
            'soal8' => 'required',
            'soal10' => 'required'
        ]);

        Sej11_level::create([
            'judul_sub_bab' => $request->judul_sub_bab,
            'gambar_utuh' => $request->gambar_utuh,
            'materi' => $request->materi
        ]);
  
        $id_terakhir=Sej11_level::latest('created_at')->first()->id;

        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal1,
        ]);

        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal2,
        ]);

        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal3,
        ]);

        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal4,
        ]);

        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal5,
        ]);

        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal6,
        ]);

        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal7,
        ]);

        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal8,
        ]);

        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal9,
        ]);


        Sej11_soal::create([
            'sej11__level_id' => $id_terakhir,
            'soal' => $request->soal10,
        ]);


        return redirect('/dashboard/levels')->with('success', 'Level ini telah ditambahkan horee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sej11_level  $sej11_level
     * @return \Illuminate\Http\Response
     */
    public function show(Sej11_level $level)
    {

        return view('dashboard.levels.show', [
            'sej11_level' => $level
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sej11_level  $sej11_level
     * @return \Illuminate\Http\Response
     */
    public function edit(Sej11_level $sej11_level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sej11_level  $sej11_level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sej11_level $sej11_level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sej11_level  $sej11_level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sej11_level $sej11_level)
    {
        //
    }
}
