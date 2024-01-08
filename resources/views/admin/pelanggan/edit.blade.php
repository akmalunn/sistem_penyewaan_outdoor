<!-- edit_modal.blade.php -->

<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Konten modal untuk edit -->
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Pelanggan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pelanggan.update', ['id' => $item->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="editNama{{ $item->id }}" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="editNama{{ $item->id }}" name="nama"
                            value="{{ $item->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="editNohp{{ $item->id }}" class="form-label">No HP Pelanggan</label>
                        <input type="text" class="form-control" id="editNohp{{ $item->id }}" name="nohp"
                            value="{{ $item->nohp }}">
                    </div>
                    <div class="mb-3">
                        <label for="editAlamat{{ $item->id }}" class="form-label">Alamat Pelanggan</label>
                        <input type="text" class="form-control" id="editAlamat{{ $item->id }}" name="alamat"
                            value="{{ $item->alamat }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
