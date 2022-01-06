<?php

namespace App\Http\Controllers;

use App\Models\sej11_pengerjaan;
use App\Http\Requests\Storesej11_pengerjaanRequest;
use App\Http\Requests\Updatesej11_pengerjaanRequest;
use App\Models\Sej11_opsi_pilgan;
use App\Models\Sej11_soal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Sej11PengerjaanController extends Controller
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
     * @param  \App\Http\Requests\Storesej11_pengerjaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_soal1(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
      
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_2'],  [$sej11_level_id]);
       

    }

    public function store_soal2(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
        dd($check);
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();
        //dd($pengerjaan->save());
     
        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_3'],  [$sej11_level_id]);
    }

    public function store_soal3(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
  
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_4'],  [$sej11_level_id]);
    }

    public function store_soal4(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
      
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_5'],  [$sej11_level_id]);
    }

    public function store_soal5(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
      
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_6'],  [$sej11_level_id]);
    }

    public function store_soal6(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
      
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_7'],  [$sej11_level_id]);
    }

    public function store_soal7(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
      
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_8'],  [$sej11_level_id]);
    }

    public function store_soal8(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
      
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_9'],  [$sej11_level_id]);
    }


    public function store_soal9(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
      
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_10'],  [$sej11_level_id]);
    }

    public function store_soal10(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
      
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');

        return redirect()->action([Sej11UserLevelController::class, 'show_akhir_soal'],  [$sej11_level_id]);
        
    }
    

    

    

   
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sej11_pengerjaan  $sej11_pengerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(sej11_pengerjaan $sej11_pengerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sej11_pengerjaan  $sej11_pengerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(sej11_pengerjaan $sej11_pengerjaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesej11_pengerjaanRequest  $request
     * @param  \App\Models\sej11_pengerjaan  $sej11_pengerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesej11_pengerjaanRequest $request, sej11_pengerjaan $sej11_pengerjaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sej11_pengerjaan  $sej11_pengerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(sej11_pengerjaan $sej11_pengerjaan)
    {
        //
    }
}
