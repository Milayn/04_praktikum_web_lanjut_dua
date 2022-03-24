<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model pegawai
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai yang bernama Raditya Maulana
        // $pegawai = Pegawai::where('nama', 'Raditya Maulana')->get();
        //cara 2
        $pegawai = Pegawai::where('nama', '=' , 'Raditya Maulana')->get();
    	// mengirim data pegawai ke view pegawai
    	return view('pegawai', ['pegawai' => $pegawai]);
    }
}
