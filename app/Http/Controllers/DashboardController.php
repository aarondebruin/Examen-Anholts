<?php

namespace App\Http\Controllers;

use App\Models\ShellyButton;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function store(Request $request) {
        $button = new ShellyButton;
        $button->button_location = $request->button_location;
        $button->buttonid = $request->buttonid;
        $button->save();
    }

}
