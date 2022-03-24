<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model pegawai
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
    	/// mengambil data pegawai yang id nya lebih besar dari 10
            $pegawai = Pegawai::where('id', '>' , 10)->get();
    	// mengirim data pegawai ke view pegawai
    	return view('pegawai', ['pegawai' => $pegawai]);
    }
}
