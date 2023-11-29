<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenan;

class TenanController extends Controller
{
    public function viewData()
    {
        $tenan = Tenan::all();
        return view('tenan.view', ['tenan' => $tenan]);
    }
}
