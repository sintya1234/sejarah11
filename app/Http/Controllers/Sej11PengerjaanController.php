<?php

namespace App\Http\Controllers;

use App\Models\sej11_pengerjaan;
use App\Http\Requests\Storesej11_pengerjaanRequest;
use App\Http\Requests\Updatesej11_pengerjaanRequest;
use App\Models\Sej11_Leaderboard;
use App\Models\Sej11_Level;
use App\Models\Sej11_opsi_pilgan;
use App\Models\Sej11_soal;
use App\Models\sej11_user_level;
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
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;
        //  dd($sepg);

        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg === 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_2'],  [$sej11_level_id]);
    }

    public function store_soal2(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg === 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
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
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg === 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_4'],  [$sej11_level_id]);
    }

    public function store_soal4(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg === 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_5'],  [$sej11_level_id]);
    }

    public function store_soal5(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg === 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_6'],  [$sej11_level_id]);
    }

    public function store_soal6(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg === 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_7'],  [$sej11_level_id]);
    }

    public function store_soal7(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg === 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_8'],  [$sej11_level_id]);
    }

    public function store_soal8(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg === 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_9'],  [$sej11_level_id]);
    }


    public function store_soal9(Storesej11_pengerjaanRequest $request)
    {
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg === 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        $sej11_level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');
        return redirect()->action([Sej11LevelController::class, 'quiz_soal_show_10'],  [$sej11_level_id]);
    }

    public function store_soal10(Storesej11_pengerjaanRequest $request)
    {


        $check = $request->input('opsi_pg');

        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->first()->status_benar;

        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');

        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg == 1) {
            $pengerjaan->status_pengerjaan  = 1;
        } else {
            $pengerjaan->status_pengerjaan  = 0;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        // 1. cari level yang dimainkan 
        $sej11__level_id = Sej11_soal::where('id', $sej11_soal)->value('sej11__level_id');

        //ini mau store data ke tabel sej11_user_level
        $sej11_user_level = new sej11_user_level();
        $sej11_user_level->sej11__level_id = $sej11__level_id;
        $sej11_user_level->user_id = auth()->user()->id;

        $jumlah_soal_benar = Sej11_soal::where('sej11__level_id', '=', $sej11__level_id)
            ->join('sej11_pengerjaans', 'sej11_pengerjaans.sej11_soal_id', '=', 'sej11_soals.id')
            ->where('sej11_pengerjaans.sej11_user_level_id', "=", null)
            ->where('sej11_pengerjaans.status_pengerjaan', '=', 1)
            ->get()->count();

        $score_level_ini = 0;
        $score_level_ini = $jumlah_soal_benar * 10;

        $sej11_user_level->score = $score_level_ini;
        $sej11_user_level->save();

        $ngitung_index = sej11_user_level::where('sej11__level_id', $sej11__level_id)
            ->where('user_id', auth()->user()->id)->count();

        if ($ngitung_index > 1) {
            $pertama = sej11_user_level::where('sej11__level_id', $sej11__level_id)
                ->where('user_id', auth()->user()->id)->first();
            sej11_user_level::destroy($pertama->id);
        }

        $sej11_user_level_id = value($sej11_user_level->id);

        sej11_pengerjaan::where('sej11_user_level_id', "=", null)
            ->update([
                'sej11_user_level_id' => $sej11_user_level_id
            ]);

        //   Mau simpen di leaderboard
        $User_score = User::where('id', auth()->user()->id)
            ->withSum('sej11__levels', 'sej11_user_levels.score')
            ->value('sej11__levels_sum_sej11_user_levelsscore');

        $sej11_leaderboard = new Sej11_Leaderboard();
        $sej11_leaderboard->user_id =  auth()->user()->id;
        $sej11_leaderboard->total_skor = $User_score;
        $sej11_leaderboard->save();

        //update di Leaderboard

        $ngitung_index_leaderboard = Sej11_Leaderboard::where('user_id', auth()->user()->id)->count();

        if ($ngitung_index_leaderboard > 1) {
            $pertama = Sej11_Leaderboard::where('user_id', auth()->user()->id)->first();
                Sej11_Leaderboard::destroy($pertama->id);
        }

        //return redirect()->action([Sej11UserLevelController::class, 'akhir_soal'],  [$sej11__level_id]);

        //kirim potongan gambar
        $last_id_sej_user_level = sej11_user_level::latest('created_at')->first()->id;


        $show_gambar = sej11_pengerjaan::where('sej11_user_level_id', '=', $last_id_sej_user_level)
            ->where('status_pengerjaan', '=', 1)
            ->join('sej11_soals', 'sej11_soals.id', '=', 'sej11_pengerjaans.sej11_soal_id')
            ->whereNotNull('sej11_soals.potongan_gambar')->get();

        $sej11_soal = Sej11_soal::where('id', $sej11_soal)->get();
        return view('quiz/soal/akhir_soal', [
            'show_gambars' => $show_gambar,
            'sej11_soal' => $sej11_soal,
            'sej11_user_level' => sej11_user_level::where('id', $last_id_sej_user_level)->value('score')
        ]);
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
