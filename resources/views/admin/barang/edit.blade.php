<!-- edit_modal.blade.php (untuk Barang) -->

<div class="modal fade" id="editModal{{ $barang->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $barang->id }}"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Konten modal untuk edit -->
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $barang->id }}">Edit Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('barang.update', ['id' => $barang->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="editNama{{ $barang->id }}" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="editNama{{ $barang->id }}" name="nama_barang"
                            value="{{ $barang->nama_barang }}">
                    </div>
                    <div class="mb-3">
                        <label for="editStok{{ $barang->id }}" class="form-label">Stok Barang</label>
                        <input type="number" class="form-control" id="editStok{{ $barang->id }}" name="stok_barang"
                            value="{{ $barang->stok_barang }}">
                    </div>
                    <div class="mb-3">
                        <label for="editHarga{{ $barang->id }}" class="form-label">Harga Barang</label>
                        <input type="number" class="form-control" id="editHarga{{ $barang->id }}"
                            name="harga_barang" value="{{ $barang->harga_barang }}">
                    </div>
                    <div class="mb-3">
                        <label for="editKategori{{ $barang->id }}" class="form-label">Kategori</label>
                        <select class="form-control" id="editKategori{{ $barang->id }}" name="kategori_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $barang->kategori_id) selected @endif>
                                    {{ $category->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
