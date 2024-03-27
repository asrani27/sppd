<?php

namespace App\Http\Controllers;

use App\Models\Pengikut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = Pengikut::orderBy('id', 'DESC')->paginate(15);
        return view('admin.pembayaran.index', compact('data'));
    }

    public function print($id)
    {
        $data = Pengikut::find($id);
        return view('admin.pembayaran.print', compact('data'));
    }
    public function edit($id)
    {
        $data = Pengikut::find($id);
        return view('admin.pembayaran.edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = Pengikut::find($id)->update([
            'nomor_bukti' => $req->nomor_bukti,
            'tanggal_bayar' => $req->tanggal_bayar,
            'nip_bendahara' => $req->nip_bendahara,
            'nama_bendahara' => $req->nama_bendahara,
            'transfer_ke' => $req->transfer_ke,
        ]);
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pembayaran');
    }
}
