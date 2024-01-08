  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah pelanggan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('pelanggan.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                          <label class=" control-label">{{ __('Nama Pelanggan') }} <span class="required"
                                  style="color: #dd4b39;">*</span></label>
                          <input type="text" class="form-control" id="nama" name="nama" required>
                      </div>
                      <div class="form-group">
                          <label class=" control-label">{{ __('No HP Pelanggan') }} <span class="required"
                                  style="color: #dd4b39;">*</span></label>
                          <input type="text" class="form-control" id="nohp" name="nohp" required>
                      </div>
                      <div class="form-group">
                          <label class=" control-label">{{ __('Alamat Pelanggan') }} <span class="required"
                                  style="color: #dd4b39;">*</span></label>
                          <input type="text" class="form-control" id="alamat" name="alamat" required>
                      </div>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
          </div>
      </div>
  </div>
