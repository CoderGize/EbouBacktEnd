<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Add Brandee
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Brandee
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/add_brandee') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/en.png" width="20px">
                            Title (EN)
                        </label>
                        <input type="text" name="title_en" class="form-control" placeholder="Brandee Title English"  required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/fr.png" width="20px">
                            Title (FR)
                        </label>
                        <input type="text" name="title_fr" class="form-control"placeholder="Brandee Title French" required>
                    </div>
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Add
                        <i class="bi bi-plus-lg"></i>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
