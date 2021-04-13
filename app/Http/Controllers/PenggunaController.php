<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use App\Models\Telepon;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
    // mengambil semua data pengguna
    $pengguna = Pengguna:: all();
    // return data ke view
    return view('pengguna.index' , [ 'pengguna' => $pengguna]);
    }
}
