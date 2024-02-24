<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        return view('makanan', ['makanans' => $makanans]);
    }

    // tambahkan method lain sesuai kebutuhan
}