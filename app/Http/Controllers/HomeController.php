<?php

namespace App\Http\Controllers;

use App\Models\Mcoa;
use App\Models\Mkategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coa = Mcoa::all();
        $roleName = Mkategori::all();
        return view('coa.index', compact(['coa', 'roleName']));
    }
}
