<?php

namespace App\Http\Controllers;

use App\Models\SPPD;
use App\Models\Pengikut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RincianController extends Controller
{
    public function index()
    {
        $data = Pengikut::orderBy('id', 'DESC')->paginate(15);
        return view('admin.rincian.index', compact('data'));
    }
    public function edit($id)
    {
        $data = Pengikut::find($id);
        return view('admin.rincian.edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = Pengikut::find($id)->update(
            'uang_transport' => $req->uang_transport,
            'uang_penginapan' => $req->uang_penginapan,
            'uang_harian' => $req->uang_harian,
        );
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/rincian');
    }
}
