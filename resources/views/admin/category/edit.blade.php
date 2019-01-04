<div class="modal fade kategori{{ $data->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle2">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="zmdi zmdi-close"></span>
                </button>
            </div>
            <div class="modal-body">
                 <form action="{{ route('admin.kategori.update',$data->id) }}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" value="{{ $data->nama_kategori }}" name="nama_kategori" class="form-control{{ $errors->has('nama_kategori') ? ' is-invalid' : '' }}" placeholder="Masukan Kategori" required>
                            @if ($errors->has('nama_kategori'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama_kategori') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
