<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function index()
    {
        $minumans = Minuman::all();
        return view('minuman', ['minumans' => $minumans]);
    }

    // tambahkan method lain sesuai kebutuhan
}