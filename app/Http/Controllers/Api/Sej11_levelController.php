<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\sej11_levelResources;
use App\Models\Sej11_Level;
use Illuminate\Http\Request;

class Sej11_levelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sej11_level=Sej11_Level::all();
        return sej11_levelResources::collection($Sej11_level);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sej11_Level::create([
            'id' => $request->id,
            'gambar_utuh' => $request->gambar_utuh,
            'judul_sub_bab' => $request->judul_sub_bab,
            'materi' => $request->materi
        ]);
        return ['message' => 'Data has been saved'];
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sej11_Level = Sej11_Level::all()->where('id', $id);
        return ['Sej11_Levels' => sej11_levelResources::collection($Sej11_Level)];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Sej11_Level = Sej11_Level::findOrFail($id);
        $Sej11_Level->update([
           'gambar_utuh'=>$request->gambar_utuh,
            'judul_sub_bab'=>$request->judul_sub_bab,
            'materi'=>$request->materi,
        ]);

        return ['message' => 'Data has been updated'];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Sej11_Level = Sej11_Level::findOrFail($id);
        $Sej11_Level->delete();
        return ['message' => 'Data has been deleted'];
    }
}
