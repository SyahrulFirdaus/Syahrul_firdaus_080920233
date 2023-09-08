<?php

namespace App\Http\Controllers;

use App\Exports\ReportsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Models\Mcoa;
use App\Models\Mkategori;
use App\Models\Mreport;
use App\Models\Mtransaction;
use Illuminate\Http\Request;


class McoaController extends Controller
{
    public function vdua()
    {
    
        return view('coa.dua');
    }

    // Pegawai
    public function vPegawai()
    {
        $roleName = Mkategori::all();
        return view('coa.pegawai', compact(['roleName']));
    }

    public function storePegawai(Request $request)
    {
        Mkategori::create($request->except(['_token', 'submit']));
        return redirect('/mcoa/vPegawai');
    }

    public function editPegawai($id)
    {
        $coa = Mkategori::find($id);
        return view('coa.editPegawai', compact(['coa']));
    }

    public function updatePegawai($id, Request $request)
    {
        $coa = Mkategori::find($id);
        $coa->update($request->except(['_token', 'submit']));
        return redirect('/mcoa/vPegawai');
    }

    public function destroyPegawai($id)
    {
        $delPegawai = Mkategori::find($id);
        $delPegawai->delete();
        return redirect('/mcoa/vPegawai');
    }
}
