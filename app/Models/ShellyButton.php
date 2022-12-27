<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShellyButton extends Model
{
    protected $table = 'shelly_buttons';
    protected $fillable = [
        'button_location',
        'buttonid',
        'battery',
        'lastseen',

    ];
}
