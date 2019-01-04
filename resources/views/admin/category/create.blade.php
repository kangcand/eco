<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle2">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="zmdi zmdi-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.category.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="url" id="url" class="form-control" placeholder="URL" required>
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
