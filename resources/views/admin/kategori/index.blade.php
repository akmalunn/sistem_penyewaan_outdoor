@extends('layout.layout')

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
    </button>

    <div>
        <table class="table table-bordered mt-2">
            <tr>
                <th style="width: 5%">No</th>
                <th style="width: 25%">Nama Kategori</th>
                <th style="width: 15%">Aksi</th>
            </tr>
            @foreach ($kategori as $item)
                <tr>
                    <td>{{ ($kategori->currentpage() - 1) * $kategori->perpage() + $loop->index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td> <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#editModal{{ $item->id }}">
                            <i class="bi bi-pencil-fill"></i> Edit
                        </button>
                        <!-- Delete button -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{ $item->id }}">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
                @include('admin.kategori.edit', ['item' => $item])
                @include('admin.kategori.delete', ['item' => $item])
            @endforeach
        </table>
    </div>
@endsection

@includeIf('admin.kategori.create')
