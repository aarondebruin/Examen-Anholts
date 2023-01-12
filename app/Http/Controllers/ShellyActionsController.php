<?php

namespace App\Http\Controllers;

use App\Events\shellypushed;
use App\Models\ButtonLog;
use App\Models\ShellyButton;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;


class ShellyActionsController extends Controller
{
    public function push(request $request, $id,) {
        // Zoekt naar de button id die je invult in de zoekbalk
        $ShellyButton = ShellyButton::where('buttonid', $id)->first();
        $message = ['button_location' => $ShellyButton->button_location];

        // Haalt authkey uit .env
        $authkey  = env("SHELLY_AUTH_KEY");
        $deviceid = $ShellyButton->buttonid;
        // Maakt HTTP request naar shelly API
        $response = Http::post('https://shelly-43-eu.shelly.cloud/device/status?auth_key='. $authkey . '&id='. $deviceid);
        // Maakt van json naar php array
        json_decode($response);
        // Haalt battery percentage uit de response
        $button_battery = $response['data']['device_status']['bat']['value'];


        $Log = ButtonLog::where('buttonid', $id)->first();
        $lastseen = \Carbon\Carbon::now();
        // Maakt nieuwe log aan in database
        $buttonlog = ButtonLog::create(['button_location' => $ShellyButton->button_location, 'lastseen' => $lastseen, 'battery' => $button_battery, 'buttonid' => $id ]);
        // Roept ShellyPushed event aan
        event(new ShellyPushed($message));
    }
}

