<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;

class KasirController extends Controller
{
    public function viewData()
    {
        $kasir = Kasir::all();
        return view('kasir.view', ['kasir' => $kasir]);
    }
}
