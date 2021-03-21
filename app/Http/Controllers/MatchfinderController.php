<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchfinderController extends Controller
{
    public function cash_index() {
        return view('cash');
    }

    public function xp_index() {
        return view('xp');
    }
}
