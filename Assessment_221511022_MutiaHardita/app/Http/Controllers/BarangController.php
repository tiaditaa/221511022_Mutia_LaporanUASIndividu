<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function viewData()
    {
        $barang = Barang::all();
        return view('barang.view', ['barang' => $barang]);
    }

    public function formInput()
    {
        return view('barang.input');
    }

    public function inputData(Request $request)
    {
        // Validasi input data
        $validatedData = $request->validate([
            'NamaBarang' => 'required|string|max:255',
            'Satuan' => 'required|string|max:255',
            'HargaSatuan' => 'required|numeric|min:0',
            'Stok' => 'required|integer|min:0',
        ]);

        // Simpan data ke database
        Barang::create($validatedData);

        return redirect()->route('barang.view')->with('success', 'Data barang berhasil ditambahkan.');
    }

    public function formUpdate($id)
    {
        $barang = Barang::find($id);
        return view('barang.update', ['barang' => $barang]);
    }

    public function updateData(Request $request, $id)
    {
        // Validasi input data
        $validatedData = $request->validate([
            'NamaBarang' => 'required|string|max:255',
            'Satuan' => 'required|string|max:255',
            'HargaSatuan' => 'required|numeric|min:0',
            'Stok' => 'required|integer|min:0',
        ]);

        // Update data di database
        Barang::find($id)->update($validatedData);

        return redirect()->route('barang.view')->with('success', 'Data barang berhasil diupdate.');
    }

    public function deleteData($id)
    {
        // Hapus data dari database
        Barang::destroy($id);

        return redirect()->route('barang.view')->with('success', 'Data barang berhasil dihapus.');
    }
}
