<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model pegawai
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        // menampilkan 10 data pegawai per halaman
        $pegawai = Pegawai::paginate(10);
    	// mengirim data pegawai ke view pegawai
    	return view('pegawai', ['pegawai' => $pegawai]);
    }
}
