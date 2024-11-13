<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index()
    {
        return view('partners.index')->with('partners', Partner::all());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Partner $partner)
    {
        //
    }

    public function edit(Partner $partner)
    {
        //
    }

    public function update(Request $request, Partner $partner)
    {
        //
    }

    public function destroy($id)
    {
        Partner::find("$id")->delete();
    }
}
