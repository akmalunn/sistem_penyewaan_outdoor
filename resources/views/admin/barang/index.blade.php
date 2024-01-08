@extends('layout.layout')

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Barang
    </button>

    <div>
        <table class="table table-bordered mt-2">
            <tr>
                <th style="width: 5%">No</th>
                <th style="width: 25%">Nama Barang</th>
                <th style="width: 15%">Stok</th>
                <th style="width: 15%">Harga</th>
                <th style="width: 20%">Kategori</th>
                <th style="width: 20%">Aksi</th>
            </tr>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ ($barangs->currentPage() - 1) * $barangs->perPage() + $loop->index + 1 }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->stok_barang }}</td>
                    <td>Rp. {{ $barang->harga_barang }}</td>
                    <td>{{ $barang->kategori->nama }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#editModal{{ $barang->id }}">
                            <i class="bi bi-pencil-fill"></i> Edit
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{ $barang->id }}">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
                @include('admin.barang.edit', ['barang' => $barang])
                @include('admin.barang.delete', ['barang' => $barang])
            @endforeach
        </table>
    </div>
@endsection

@includeIf('admin.barang.create')
