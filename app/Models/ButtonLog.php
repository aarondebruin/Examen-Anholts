<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtonLog extends Model
{
    use HasFactory;

    protected $fillable = ['button_location', 'buttonid', 'battery', 'lastseen'];


}
