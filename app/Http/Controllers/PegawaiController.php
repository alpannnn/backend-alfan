<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwals;
use App\Models\Pegawais;
class PegawaiController extends Controller
{
    public function index()
{
    $title = "Data Master Pegawai";
    $pegawais = \App\Models\Pegawai::orderBy('id', 'asc')->paginate(5);
    return view('pegawais.index', compact('pegawais', 'title'));
}


    public function create()
    {
        $title = "Tambah Data Pegawai";
        $pegawais = Pegawais::all();
        return view('pegawais.create', compact('title', 'jadwals'));
    }

    public function store(Request $request)
    {
        $request->validate
        (['name' => 'required',
            'alamat',
            'no_hp',
            'shift',
            'jadwal',
        
        ]);

        Pegawais::create($request->post());

        return redirect()->route('pegawais.index')->with('success', 'Pegawai has been created successfully.');
    }


    public function show(Pegawais $pegawai)
    {
        return view('pegawais.show', compact('pegawai'));
    }


    public function edit(Pegawais $pegawai)
    {
        $title = "Edit Data user";
        $jadwals = Jadwals::all();
        return view('pegawais.edit', compact('pegawai', 'title', 'jadwals'));
    }


    public function update(Request $request, Pegawais $pegawai)
    {
        $request->validate(['name' => 'required',
            'alamat',
            'no_hp',
            'shift',
            'jadwal',
        ]);

        $pegawai->fill($request->post())->save();

        return redirect()->route('pegawais.index')->with('success', 'Pegawai Has Been updated successfully');
    }


    public function destroy(Pegawais $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawais.index')->with('success', 'Position has been deleted successfully');
    }
    public function exportExcel()
    {
        return Excel::download(new ExportPegawais, 'pegawais.xlsx');
    }   
}
