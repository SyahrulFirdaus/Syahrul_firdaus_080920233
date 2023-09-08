<?php

namespace App\Http\Controllers;

use App\Exports\ReportsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Models\Mcoa;

use App\Models\Mtransaction;
use Illuminate\Http\Request;


class McoaController extends Controller
{
    //
    public function index()
    {
        $roleTransaction = Mtransaction::all();
        $roleCoa = Mcoa::all();
        return view('coa.transaction', compact(['roleTransaction', 'roleCoa']));
    }

    // Transaction
    public function vtransaction()
    {
        $roleTransaction = Mtransaction::all();
        $roleCoa = Mcoa::all();
        return view('coa.transaction', compact(['roleTransaction', 'roleCoa']));
    }

    public function storeTransaction(Request $request)
    {
        Mtransaction::create($request->except(['_token', 'submit']));
        return redirect('/mcoa/vtransaction');
    }

    public function destroyTransaction($id)
    {
        $delTransaction = Mtransaction::find($id);
        $delTransaction->delete();
        return redirect('/mcoa/vtransaction');
    }


    public function editTransaction($id)
    {
        $coa = Mtransaction::find($id);
        $roleCoa = Mcoa::all();
        return view('coa.editTransaction', compact(['coa', 'roleName', 'roleCoa']));
    }

    public function updateTransaction($id, Request $request)
    {
        $coa = Mtransaction::find($id);
        $coa->update($request->except(['_token', 'submit']));
        return redirect('/mcoa/vtransaction');
    }
}
