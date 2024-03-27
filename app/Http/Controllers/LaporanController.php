<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Bibit;
use App\Models\Jabatan;
use App\Models\MerkOli;
use App\Models\Nasabah;
use App\Models\Pegawai;
use App\Models\Setoran;
use App\Models\Deposito;
use App\Models\JenisOli;
use App\Models\Karyawan;
use App\Models\Pengikut;
use Carbon\CarbonPeriod;
use App\Models\Pencairan;
use App\Models\Pengajuan;
use App\Models\Penjualan;
use App\Models\Sertifikat;
use App\Models\JenisLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{

    public function index()
    {
        return view('admin.laporan.index');
    }
    public function pegawai()
    {
        $data = Pegawai::get();
        return view('admin.laporan.pegawai', compact('data'));
    }
    public function jabatan()
    {
        $data = Jabatan::get();
        return view('admin.laporan.jabatan', compact('data'));
    }

    public function kuitansi($id)
    {
        $data = Penjualan::find($id);
        return view('admin.laporan.kuitansi', compact('data'));
    }

    public function bulanan()
    {
        $data = Pengikut::select(
            DB::raw("(sum(uang_transport)) as uang_transport"),
            DB::raw("(sum(uang_penginapan)) as uang_penginapan"),
            DB::raw("(sum(uang_harian)) as uang_harian"),
            DB::raw("(DATE_FORMAT(tanggal_bayar, '%m-%Y')) as month_year"),
        )->groupBy(DB::raw("DATE_FORMAT(tanggal_bayar, '%m-%Y')"))->get()->map(function ($item) {
            $item->bulan = Carbon::createFromFormat('m-Y', $item->month_year)->format('M');
            $item->tahun = Carbon::createFromFormat('m-Y', $item->month_year)->format('Y');
            $item->total = $item->uang_transport + $item->uang_penginapan + $item->uang_harian;
            return $item;
        });
        return view('admin.laporan.pengeluaran', compact('data'));
    }
    public function periode(Request $req)
    {
        $from = $req->mulai;
        $to = $req->sampai;

        if ($req->jenis == 'keuangan') {
            $data = Pengikut::whereBetween('created_at', [$from, $to])->get();
            return view('admin.laporan.keuangan', compact('data', 'from', 'to'));
        }
    }
}
