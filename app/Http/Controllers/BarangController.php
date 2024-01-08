<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\kategori;
use App\Http\Requests\StorebarangRequest;
use App\Http\Requests\UpdatebarangRequest;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'barang';
        $categories = Kategori::all();
        $barangs = Barang::paginate(6);
        return view('admin.barang.index', compact('barangs', 'title', 'categories'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'stok_barang' => 'required|numeric',
            'harga_barang' => 'required|numeric',
            'kategori_id' => 'required|exists:kategori,id',
        ]);

        Barang::create($validatedData);

        return redirect()->route('barang.home')->with('success', 'Barang berhasil disimpan!');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'stok_barang' => 'required|numeric',
            'harga_barang' => 'required|numeric',
            'kategori_id' => 'required|exists:kategori,id',
        ]);

        $barang->update($validatedData);

        return redirect()->route('barang.home')->with('success', 'Barang berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.home')->with('success', 'Barang berhasil dihapus!');
    }
}
