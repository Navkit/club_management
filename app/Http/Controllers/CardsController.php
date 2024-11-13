<?php

namespace App\Http\Controllers;

use App\Card;
use App\Partner;
use App\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CardsController extends Controller
{
    public function index()
    {
        return view('cards.index')->with('cards', Card::all());
    }

    public function create()
    {
        return view('cards.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        $card = new Card();
        $card->MainMemberName = $request->MainMemberName;
        $card->NationalID = $request->NationalID;
        $card->Mobile = $request->Mobile;
        $card->Certificate = $request->Certificate;
        $card->Job = $request->Job;
        $card->Address = $request->Address;
        $card->State = 1;

        if ($request->file('IDcardImg1')) {
            $IDCardImg1 = time() . "IDcardImg1" . $request->file('IDcardImg1')->getClientOriginalName();
            $request->file('IDcardImg1')->move('imgs', $IDCardImg1);
            $card->IDcardImg1 = $IDCardImg1;
        }

        if ($request->file('IDcardImg2')) {
            $IDCardImg2 = time() . "IDcardImg2" . $request->file('IDcardImg2')->getClientOriginalName();
            $request->file('IDcardImg2')->move('imgs', $IDCardImg2);
            $card->IDcardImg2 = $IDCardImg2;
        }

        $card->save();

        for ($i = 1; $i <= $request->plcount; $i++) {
            $player = new Player();
            $player->name = $request->input("PlayerName_$i");
            if ($request->file("PlayerImg_$i")) {
                $Img = $card->id . $i . time() . "Img" . $request->file("PlayerImg_$i")->getClientOriginalName();
                $request->file("PlayerImg_$i")->move('imgs', $Img);
                $player->Img = $Img;
            }
            if ($request->file("PlayerNIDImg_$i")) {
                $NIDImg = $card->id . $i . time() . "NIDImg" . $request->file("PlayerNIDImg_$i")->getClientOriginalName();
                $request->file("PlayerNIDImg_$i")->move('imgs', $NIDImg);
                $player->NIDImg = $NIDImg;
            }

            $player->Card_ID = $card->id;
            $player->save();
        }

        for ($i = 1; $i <= $request->pacount; $i++) {
            $partner = new Partner();
            $partner->name = $request->input("PartnerName_$i");
            if ($request->file("PartnerImg_$i")) {
                $Img = $card->id . $i . time() . "Img" . $request->file("PartnerImg_$i")->getClientOriginalName();
                $request->file("PartnerImg_$i")->move('imgs', $Img);
                $partner->Img = $Img;
            }
            if ($request->file("PartnerNIDImg_$i")) {
                $NIDImg = $card->id . $i . time() . "NIDImg" . $request->file("PartnerNIDImg_$i")->getClientOriginalName();
                $request->file("PartnerNIDImg_$i")->move('imgs', $NIDImg);
                $partner->NIDImg = $NIDImg;
            }
            $partner->Card_ID = $card->id;
            $partner->save();
        }

        Session::flash('message', 'Membership has been successfully registered');
        Session::flash('alert-class', 'alert-success');
        DB::commit();
        return view('cards.show')->with('card', Card::find($card->id));
    }

    public function showPlayers($id)
    {
        $card = Card::find($id);
        return view('cards.cardplayers')->with('card', $card);
    }

    public function showPartners($id)
    {
        $card = Card::find($id);
        return view('cards.cardpartners')->with('card', $card);
    }

    public function show($id)
    {
        return view('cards.show')->with('card', Card::find($id));
    }

    public function edit($id)
    {
        $card = Card::find($id);
        return view('cards.edit', compact('card'));
    }

    public function update(Request $request, $id)
    {
        $card = Card::find($id);
        $card->MainMemberName = $request->MainMemberName;
        $card->NationalID = $request->NationalID;
        $card->Mobile = $request->Mobile;
        $card->Certificate = $request->Certificate;
        $card->Job = $request->Job;
        $card->Address = $request->Address;
        $card->Notes = $request->Notes;
        $card->State = $request->State == 'on' ? 1 : 0;

        if ($request->file('IDcardImg1')) {
            if ($card->IDcardImg1 != 'default-image.PNG' && file_exists("imgs/$card->IDcardImg1")) {
                unlink("imgs/$card->IDcardImg1");
            }
            $IDCardImg1 = time() . "IDcardImg1" . $request->file('IDcardImg1')->getClientOriginalName();
            $request->file('IDcardImg1')->move('imgs', $IDCardImg1);
            $card->IDcardImg1 = $IDCardImg1;
        }

        if ($request->file('IDcardImg2')) {
            if ($card->IDcardImg2 != 'default-image.PNG' && file_exists("imgs/$card->IDcardImg2")) {
                unlink("imgs/$card->IDcardImg2");
            }
            $IDCardImg2 = time() . "IDcardImg2" . $request->file('IDcardImg2')->getClientOriginalName();
            $request->file('IDcardImg2')->move('imgs', $IDCardImg2);
            $card->IDcardImg2 = $IDCardImg2;
        }

        $card->save();

        Session::flash('message', 'Membership has been successfully updated');
        Session::flash('alert-class', 'alert-success');
        return redirect("showcard/$id");
    }

    public function destroy($id)
    {
        Card::find($id)->delete();
    }
}
