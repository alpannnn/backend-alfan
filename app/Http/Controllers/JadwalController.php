<?php
namespace App\Http\Controllers;

use App\Models\Jadwals;
use Illuminate\Http\Request;
use App\Exports\ExportPositions;
use Maatwebsite\Excel\Facades\Excel;
use App\Charts\JadwalLineChart;

class JadwalController extends Controller
{
    public function index()
    {
        $title = "Data Jadwal";
        $jadwal = Jadwals::orderBy('id', 'asc')->paginate(5);
        return view('jadwal.index', compact(['jadwal', 'title']));
    }

    public function create()
    {
        $title = "Tambah Data Position";
        return view('jadwal.create', compact('title'));
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
        return view('jadwal.edit', compact(['jadwal', 'title']));
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

    public function chartLine()
    {
        $api = route('jadwal.chartLineAjax');
   
        $chart = new JadwalLineChart;
        $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'])->load($api);
        $title = "Beranda";
        return view('chartLine', compact('chart', 'title'));
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function chartLineAjax(Request $request)
    {
        $year = $request->has('year') ? $request->year : date('Y');
        $jadwal = Jadwals::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', $year)
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
  
        $chart = new JadwalLineChart;
  
        $chart->dataset('New User Register Chart', 'line', $jadwal)->options([
                    'fill' => 'true',
                    'borderColor' => '#51C1C0'
                ]);
  
        return $chart->api();
    }
}
