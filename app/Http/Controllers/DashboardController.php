<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $x = $request->get('hello');
        $y = $request->get('y');

        $nama = ['Ucup', 'Dimas', 'Adi', 'Agus'];
        $nim = [
            105219001,
            105219002,
            105219003,
            105219004
        ];

        return view(
            'dashboard',
            compact('nama', 'nim')
        );
    }

    public function about($text)
    {
        $data = DB::table('mahasiswa')
                ->select('nama as name')->orderBy('nim', 'DESC')->get();

        // Select 'name' from 'mahasiswa' ORDER BY;
        echo $data;
    }
}