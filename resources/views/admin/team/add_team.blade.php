<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Add Team
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Team
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/add_team') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Team Image
                            </label>
                            <input type="file" name="img" class="form-control" required>

                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Team Name
                            </label>
                            <input type="text" name="name" class="form-control" required>

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                <img src="/images/en.png" width="15px" alt="">

                                Role (EN)
                            </label>
                            <input type="text" name="role_en" class="form-control" required>

                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                <img src="/images/fr.png" width="15px" alt="">

                                Role (FR)
                            </label>
                            <input type="text" name="role_fr" class="form-control" required>

                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">

                                Facebook
                            </label>
                            <input type="text" name="facebook" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">

                                Linkedin
                            </label>
                            <input type="text" name="linkedin" class="form-control" required>
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">

                                Twitter
                            </label>
                            <input type="text" name="twitter" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">

                                Instagram
                            </label>
                            <input type="text" name="insta" class="form-control" required>
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
