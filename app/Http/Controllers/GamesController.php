<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GamesController extends Controller
{
    public function index()
    {
        return view('games.index')->with('games', Game::all());
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $game = new Game();
        $game->name = $request->name;
        $game->save();
        Session::flash('message', 'Data successfully recorded');
        Session::flash('alert-class', 'alert-success');
        return redirect()->action('GamesController@index');
    }

    public function show(Game $game)
    {
        //
    }

    public function edit($id)
    {
        $game = Game::find($id);
        return view('games.edit')->with('game', $game);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $game = Game::find($request->id);
        $game->name = $request->name;
        $game->save();

        Session::flash('message', 'Data successfully updated');
        Session::flash('alert-class', 'alert-success');

        return redirect()->action('GamesController@index');
    }

    public function destroy($id)
    {
        Game::where('id', $id)->delete();
    }

    public function viewPlayers($id)
    {
        $game = Game::find($id);
        return view('games.viewplayers')->with('game', $game);
    }

    public function deletePlayerGame($pid, $gid)
    {
        DB::delete("delete from playergames where Player_ID=$pid and Game_ID=$gid");
    }
}
