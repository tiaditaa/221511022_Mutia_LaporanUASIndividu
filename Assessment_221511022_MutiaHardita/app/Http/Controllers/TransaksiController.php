<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use App\Models\BarangNota;
use App\Models\Barang;

class TransaksiController extends Controller
{
    public function formInput()
    {
        // Tambahkan logika untuk menampilkan form input transaksi
        $barang = Barang::all(); // Sesuaikan dengan model dan kolom yang sesuai
        return view('transaksi.input', ['barang' => $barang]);
    }

    public function inputData(Request $request)
    {
        // Tambahkan logika untuk menyimpan data transaksi baru

        // Contoh validasi dan penyimpanan data
        $validatedData = $request->validate([
            'KodeTenan' => 'required|exists:tenans,id',
            'KodeKasir' => 'required|exists:kasiirs,id',
            'TglNota' => 'required|date',
            'JamNota' => 'required|date_format:H:i:s',
            'JumlahBelanja' => 'required|numeric|min:0',
            'Diskon' => 'required|numeric|min:0',
            'Total' => 'required|numeric|min:0',
            'barangNota.*.KodeBarang' => 'required|exists:barangs,id',
            'barangNota.*.JumlahBarang' => 'required|integer|min:0',
            'barangNota.*.HargaSatuan' => 'required|numeric|min:0',
            'barangNota.*.Jumlah' => 'required|numeric|min:0',
        ]);

        $nota = Nota::create($validatedData);

        // Jika berhasil menyimpan Nota, lanjutkan dengan menyimpan BarangNota
        foreach ($request->barangNota as $barangNotaData) {
            $barangNota = new BarangNota($barangNotaData);
            $nota->barangNota()->save($barangNota);
        }

        return redirect()->route('transaksi.view')->with('success', 'Data transaksi berhasil ditambahkan.');
    }

    public function viewStruk($kodeNota)
    {
        // Tambahkan logika untuk menampilkan struk berdasarkan kodeNota
        $nota = Nota::where('KodeNota', $kodeNota)->first();
        $barangNota = BarangNota::where('KodeNota', $kodeNota)->get();
        return view('struk.view', ['nota' => $nota, 'barangNota' => $barangNota]);
    }

    public function viewData()
    {
        $transaksi = Nota::all();
        return view('transaksi.view', ['transaksi' => $transaksi]);
    }
}

