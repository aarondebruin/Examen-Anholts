<?php

namespace App\Http\Controllers;

use App\Events\shellypushed;
use App\Models\ButtonLog;
use App\Models\ShellyButton;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ShellyActionsController extends Controller
{
    public function push(request $request, $id,) {
        // Zoekt naar de button id die je invult in de zoekbalk
        $ShellyButton = ShellyButton::where('buttonid', $id)->first();
        $message = ['button_location' => $ShellyButton->button_location];


        $Log = ButtonLog::where('buttonid', $id)->first();
        $lastseen = \Carbon\Carbon::now();
//        dd($lastseen);
        $buttonlog = ButtonLog::create(['button_location' => $ShellyButton->button_location, 'lastseen' => $lastseen, 'battery' => '77', 'buttonid' => $id ]);

        event(new ShellyPushed($message));
    }
}

