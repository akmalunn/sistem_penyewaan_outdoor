<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Http\Requests\StorekategoriRequest;
use App\Http\Requests\UpdatekategoriRequest;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'kategori';
        $kategori = kategori::paginate(6);
        return view('admin.kategori.index', compact('title', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'kategori';

        return view('admin.kategori.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validasi data jika dibutuhkan
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        Kategori::create($validatedData);

        // Redirect ke halaman yang sesuai atau berikan respons yang tepat
        return redirect('/kategori')->with('success', 'Kategori berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $request->input('nama');
        $kategori->save();

        return redirect()->route('kategori.home')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.home')->with('success', 'Kategori berhasil dihapus!');
    }
}
