<?php

namespace App\Http\Controllers;

use App\Models\DetailSPPD;
use App\Models\SPPD;
use App\Models\Pegawai;
use App\Models\Pengikut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SPPDController extends Controller
{
    public function index()
    {
        $data = SPPD::orderBy('id', 'DESC')->paginate(15);
        return view('admin.sppd.index', compact('data'));
    }

    public function create()
    {
        return view('admin.sppd.create');
    }
    public function edit($id)
    {
        $data = SPPD::find($id);
        return view('admin.sppd.edit', compact('data'));
    }
    public function pengikut($id)
    {
        $data = SPPD::find($id);
        $pegawai = Pegawai::get();
        return view('admin.sppd.pengikut', compact('data', 'pegawai'));
    }
    public function simpanPengikut(Request $req, $id)
    {
        $param['sppd_id'] = $id;
        $param['nama']    = Pegawai::find($req->pegawai_id)->nama;
        $param['nip']     = Pegawai::find($req->pegawai_id)->nip;
        $param['jabatan'] = Pegawai::find($req->pegawai_id)->jabatan == null ? null : Pegawai::find($req->pegawai_id)->jabatan->nama;

        $check = Pengikut::where('sppd_id', $id)->where('nip', $param['nip'])->first();
        if ($check == null) {
            $data = Pengikut::create($param);
            Session::flash('success', 'Berhasil');
            return back();
        } else {
            Session::flash('info', 'Sudah ada');
            return back();
        }
    }
    public function store(Request $req)
    {
        $check = SPPD::where('nomor_surat', $req->nomor_surat)->first();
        //dd($req->all());
        if ($check != null) {
            Session::flash('info', 'Data dengan nomor ini sudah ada');
            return back();
        } else {
            SPPD::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/sppd');
        }
    }
    public function update(Request $req, $id)
    {
        $data = SPPD::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/sppd');
    }
    public function delete($id)
    {
        SPPD::find($id)->pengikut->map->delete();
        SPPD::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/sppd');
    }
    public function deletePengikut($id)
    {
        $data = Pengikut::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return back();
    }
}
