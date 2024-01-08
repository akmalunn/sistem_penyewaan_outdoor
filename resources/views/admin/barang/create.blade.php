<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('barang.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">{{ __('Nama Barang') }} <span class="required"
                                style="color: #dd4b39;">*</span></label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{{ __('Stok Barang') }} <span class="required"
                                style="color: #dd4b39;">*</span></label>
                        <input type="number" class="form-control" id="stok_barang" name="stok_barang" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{{ __('Harga Barang') }} <span class="required"
                                style="color: #dd4b39;">*</span></label>
                        <input type="number" class="form-control" id="harga_barang" name="harga_barang" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{{ __('Kategori') }} <span class="required"
                                style="color: #dd4b39;">*</span></label>
                        <select class="form-control" id="kategori_id" name="kategori_id" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama }}</option>
                            @endforeach
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
