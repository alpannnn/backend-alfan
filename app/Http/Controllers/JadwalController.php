<?php

namespace App\Http\Controllers;

use App\Models\Jadwals;
use Illuminate\Http\Request;
use App\Exports\ExportPositions;
use Maatwebsite\Excel\Facades\Excel;

class JadwalController extends Controller
{
    public function index()
    {
        $title = "Data Jadwal";
        $jadwals = Jadwals::orderBy('id', 'asc')->paginate(5);
        return view('jadwals.index', compact(['jadwals', 'title']));
    }

    public function create()
    {
        $title = "Tambah Data Position";
        return view('jadwals.create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            'jabatan',
            'jam_kerja',
        ]);

        Jadwals::create($request->post());

        return redirect()->route('jadwals.index')->with('success', 'Jadwal has been created successfully.');
    }


    public function show(Jadwals $jadwal)
    {
        return view('jadwals.show', compact('jadwal'));
    }


    public function edit(Jadwals $jadwal)
    {
        $title = "Edit Data Jadwal";
        return view('jadwals.edit', compact(['jadwal', 'title']));
    }


    public function update(Request $request, Jadwals $jadwal)
    {
        $request->validate([
            'hari' => 'required',
            'jabatan',
            'jam_kerja'
        ]);

        $jadwal->fill($request->post())->save();

        return redirect()->route('jadwals.index')->with('success', 'jadwal Has Been updated successfully');
    }


    public function destroy(Jadwals $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('jadwals.index')->with('success', 'jadwal has been deleted successfully');
    }
    public function exportExcel()
    {
        return Excel::download(new ExportPositions, 'positions.xlsx');
    }
}
