<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswas')->get();
        return view('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }


    public function store(Request $request)
    {
        DB::table('mahasiswas')->insert([
            'name' => request('name'),
            'email' => request('email'),
            'dob' => request('dob'),
            'address' => request('address')
        ]);

        return redirect(route('index_mahasiswa'));
    }

    public function edit($name)
    {
        $mahasiswa = DB::table('mahasiswas')->where('name', $name)->get();
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        $mahasiswa = DB::table('mahasiswas')->where('name', $request->name)->update([
            'name' => request('name'),
            'email' => request('email'),
            'dob' => request('dob'),
            'address' => request('address')
        ]);
        return redirect('/mahasiswa.index');
    }
}
