<?php

namespace App\Http\Controllers;

use App\Models\ShellyButton;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $shellybuttons =   ShellyButton::all();
        return view('dashboard', compact(['shellybuttons']) );
    }

    public function store(Request $request) {
        $button = new ShellyButton;
        $button->button_location = $request->button_location;
        $button->buttonid = $request->buttonid;
        $button->save();
        return redirect()->back()->with('success', 'Knop toegevoegd');

    }

    public function destroy($id){
        $shellybutton = ShellyButton::where('id', $id)->firstorfail()->delete();
        return redirect()->back()->with('danger', 'Knop verwijdert');

    }

}
