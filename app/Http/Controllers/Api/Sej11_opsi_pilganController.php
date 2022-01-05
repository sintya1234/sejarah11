<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\sej11_opsi_pilganResources;
use App\Models\sej11_opsi_pilgan;
use Illuminate\Http\Request;

class Sej11_opsi_pilganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sej11_opsi_pilgan=sej11_opsi_pilgan::all();
        return sej11_opsi_pilganResources::collection($Sej11_opsi_pilgan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sej11_opsi_pilgan = sej11_opsi_pilgan::all()->where('sej11_soal_id', $id);
        return ['sej11_opsi_pilgan' => sej11_opsi_pilganResources::collection($sej11_opsi_pilgan)];
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
