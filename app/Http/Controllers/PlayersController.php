<?php

namespace App\Http\Controllers;

use App\Card;
use App\Game;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('players.index')->with('players',Player::all());

    }


    public function show($id)
    {

        return view('players.show')
            ->with('games',Game::all())
            ->with('player',Player::find($id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function playerGamesStore(Request $request)
    {

        DB::delete("delete from  playergames where Player_ID=$request->pid");
        if(isset($request->games))
            {
        foreach ($request->games as $game)
        {
            DB::insert("insert into playergames values($request->pid,$game)");
        }}
        Session::flash('message', 'تم تسجيل تحديث الببانات بنجاح');
        Session::flash('alert-class', 'alert-success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        return view('players.edit')->with('player',Player::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $player=Player::find($request->id);
        $player->name=$request->name;
        if($request->file('img'))
        {
            unlink("imgs/$player->Img");
            $Img=$player->id.time()."Img".$request->file("img")->getClientOriginalName();
            $request->file("img")->move('imgs',$Img);
            $player->Img=$Img;
        }
        if($request->file('nidimg'))
        {
            unlink("imgs/$player->NIDImg");
            $Img=$player->id.time()."NIDImg".$request->file("nidimg")->getClientOriginalName();
            $request->file("nidimg")->move('imgs',$Img);
            $player->NIDImg=$Img;
        }
        $player->save();
        Session::flash('message', 'تم تحديث البيانات بنجاح');
        Session::flash('alert-class', 'alert-success');

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Player::find("$id")->delete();
    }
}
