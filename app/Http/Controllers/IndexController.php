<?php

namespace App\Http\Controllers;

use App\Models\ButtonLog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $buttonlogs =   ButtonLog::all()->sortByDesc('created_at');
        return view('index', compact(['buttonlogs']) );
    }
}
