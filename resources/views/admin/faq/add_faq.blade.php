


<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Add FAQ
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add FAQ
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/add_faq') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/en.png" width="20px">
                            Question (EN)
                        </label>
                        <textarea type="text" name="quest_en" placeholder="English Question" class="form-control" required cols="4" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/fr.png" width="20px">
                            Question (FR)
                        </label>
                        <textarea type="text" name="quest_fr" class="form-control" placeholder="French Question" required cols="4" rows="4"></textarea>
                    </div>


                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">
                        <img src="/images/en.png" width="20px">
                        Answer (EN)
                    </label>
                    <textarea type="text" name="ans_en" class="form-control" placeholder="English Answer" required cols="4" rows="4"></textarea>
                </div>

                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">
                        <img src="/images/fr.png" width="20px">
                        Answer (FR)
                    </label>
                    <textarea type="text" name="ans_fr" class="form-control" required cols="4" placeholder="French Answer" rows="4"></textarea>
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
