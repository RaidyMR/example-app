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


    public function create () {

        return view('create.index');        
    }

    public function submit (Request $request) {

        DB::table('mahasiswa')->insert([
            'nama' => $request->post('nama'),
            'nim' => $request->post('nim'),
            'deskripsi' => $request->post('deskripsi'),
        ]);
    }
}