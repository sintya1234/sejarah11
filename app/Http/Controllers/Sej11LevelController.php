<?php

namespace App\Http\Controllers;

use App\Models\Sej11_Level;
use App\Http\Requests\StoreSej11_LevelRequest;
use App\Http\Requests\UpdateSej11_LevelRequest;
use App\Models\Sej11_gambar_materi;
use App\Models\Sej11_opsi_pilgan;
use App\Models\Sej11_soal;

class Sej11LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sej11_level =  Sej11_Level::all();
        $sej11_gambar_materi= Sej11_gambar_materi::all();
        return view('/materis',compact('sej11_level','sej11_gambar_materi'));
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
        
        $sej11_gambar_materi= Sej11_gambar_materi::where('sej11__level_id',$sej11_Level->id)->get();
        
        return view('/materi', [
            "sej11_level" => $sej11_Level,
            "gambar_materi"=> $sej11_gambar_materi
            
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

    
    //untuk quiz soal
    public function quiz_soal_show_1(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal1', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_2(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal2', [  
            "sej11_soal" => $sej11_soal
        ]);
    }
    public function quiz_soal_show_3(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal3', [  
            "sej11_soal" => $sej11_soal
        ]);
    }
    public function quiz_soal_show_4(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal4', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_5(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal5', [  
            "sej11_soal" => $sej11_soal
        ]);
    }
    public function quiz_soal_show_6(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal6', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_7(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal7', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_8(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal8', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_9(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal9', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_10(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal10', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_11(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal11', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_12(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal12', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_13(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal13', [  
            "sej11_soal" => $sej11_soal
        ]);
    }

    public function quiz_soal_show_14(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal14', [  
            "sej11_soal" => $sej11_soal
        ]);
    }
    public function quiz_soal_show_15(Sej11_Level $sej11_Level)
    {
        $sej11_soal=Sej11_soal::where('sej11__level_id',$sej11_Level->id)->get();      
        return view('quiz/soal/soal15', [  
            "sej11_soal" => $sej11_soal
        ]);
    }
}
