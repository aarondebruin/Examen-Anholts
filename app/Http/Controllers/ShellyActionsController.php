<?php

namespace App\Http\Controllers;

use App\Events\shellypushed;
use App\Models\ButtonLog;
use App\Models\ShellyButton;
use Illuminate\Http\Request;



class ShellyActionsController extends Controller
{
    public function push(request $request, $id,) {
        // Zoekt naar de button id die je invult in de zoekbalk
        $ShellyButton = ShellyButton::where('buttonid', $id)->first();
        $Log = ButtonLog::where('buttonid', $id)->first();

     //   $history = ['button_location' => 'Tafel 4', 'battery' => 'Test', 'lastseen' => 'Bla'];

        $message = ['button_location' => $ShellyButton->button_location];

        event(new ShellyPushed($message));
    }
}

