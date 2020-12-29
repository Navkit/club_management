<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('games.index')->with('games', Game::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
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
            'name' => 'required',
        ]);

        $game = new Game();
        $game->name = $request->name;
        $game->save();
        Session::flash('message', 'تم تسجيل البيانات بنجاح');
        Session::flash('alert-class', 'alert-success');
        return redirect()->action('GamesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::find($id);
        return view('games.edit')->with('game', $game);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $game = Game::find($request->id);

        $game->Name =$request->name;
        $game->save();

        Session::flash('message', 'تم تحديث البيانات بنجاح');
        Session::flash('alert-class', 'alert-success');

        return redirect()->action('GamesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Game::where('id', $id)->delete();

    }
    public function  viewPlayers($id)
    {
        $game=Game::find($id);
//        $players=$game->players;
//        dd($players);
        return view('games.viewplayers')->with('game', $game);
    }
    public function  deletePlayerGame($pid,$gid)
    {
        DB::delete("delete from playergames where Player_ID=$pid and Game_ID=$gid");
    }

}
