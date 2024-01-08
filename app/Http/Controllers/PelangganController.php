<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'pelanggan';
        $pelanggans = Pelanggan::paginate(6);
        return view('admin.pelanggan.index', compact('pelanggans', 'title'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',

        ]);

        Pelanggan::create($validatedData);

        return redirect()->route('pelanggan.home')->with('success', 'Pelanggan berhasil disimpan!');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',

        ]);

        $pelanggan->update($validatedData);

        return redirect()->route('pelanggan.home')->with('success', 'Pelanggan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.home')->with('success', 'Pelanggan berhasil dihapus!');
    }
}
