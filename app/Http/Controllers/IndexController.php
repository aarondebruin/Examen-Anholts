<?php

namespace App\Http\Controllers;

use App\Models\ButtonLog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
     $buttonlogs =   ButtonLog::all();

        return view('index', compact(['buttonlogs']) );
    }
}
