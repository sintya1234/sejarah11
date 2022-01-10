<?php

namespace App\Http\Controllers;

use App\Models\Sej11_Leaderboard;
use App\Http\Requests\StoreSej11_LeaderboardRequest;
use App\Http\Requests\UpdateSej11_LeaderboardRequest;
use App\Models\sej11_user_level;
use App\Models\User;

class Sej11LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sej11_Leaderboards=Sej11_Leaderboard::orderByDesc('total_skor')
        ->get();

        //dd($sej11_Leaderboards);

        $sej11_user_levels=sej11_user_level::max('sej11__level_id');

        return view('/leaderboard_utama', [
            'sej11_Leaderboards' => $sej11_Leaderboards,
            'sej11_user_levels'=> $sej11_user_levels
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
     * @param  \App\Http\Requests\StoreSej11_LeaderboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSej11_LeaderboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sej11_Leaderboard  $sej11_Leaderboard
     * @return \Illuminate\Http\Response
     */
    public function show(Sej11_Leaderboard $sej11_Leaderboard)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sej11_Leaderboard  $sej11_Leaderboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Sej11_Leaderboard $sej11_Leaderboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSej11_LeaderboardRequest  $request
     * @param  \App\Models\Sej11_Leaderboard  $sej11_Leaderboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSej11_LeaderboardRequest $request, Sej11_Leaderboard $sej11_Leaderboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sej11_Leaderboard  $sej11_Leaderboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sej11_Leaderboard $sej11_Leaderboard)
    {
        //
    }
}
