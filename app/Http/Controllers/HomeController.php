<?php

namespace App\Http\Controllers;

use App\Models\Lurah;
use App\Models\Tpermohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function superadmin()
    {
        return view('admin.home');
    }

    public function pemohon()
    {
        return view('pemohon.home');
    }

    public function updatelurah(Request $request)
    {
        Lurah::first()->update($request->all());
        Session::flash('success', 'Berhasil Diupdate');
        return back();
    }
}
