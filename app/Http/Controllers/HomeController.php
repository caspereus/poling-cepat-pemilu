<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caleg;
use App\Models\Partai;
use App\Models\Tps;
use App\Models\Volunteer;
use App\Models\PemiluSetting;
use App\Models\Provinsi;
use App\Models\Kokab;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',[
            'total_caleg' => Caleg::count(),
            'total_partai' => Partai::count(),
            'total_tps' => Tps::count(),
            'total_volunteer' => Volunteer::count(),
            'total_pemilu_setting' => PemiluSetting::count(),
            'total_provinsi' => Provinsi::count(),
            'total_kokab' => Kokab::count(),
            'total_kecamatan' => Kecamatan::count(),
            'total_kelurahan' => Kelurahan::count(),
            'total_transaction' => Transaction::count(),
        ]);
    }
}
