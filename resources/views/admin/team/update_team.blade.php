<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show   bg-gray-100">

    @include('admin.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0 ">
                            <a href="{{ url('/admin/show_team') }}" class="btn btn-dark">
                                <i class="bi bi-arrow-left"></i>
                                back
                            </a>
                            <h6>Edit Team</h6>
                        </div>
                        <div class="card-body px-auto pt-0 pb-2">
                            <form action="{{ url('/admin/update_team_confirm', $team->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mt-4 row">
                                    <div class="col-4"></div>
                                    <div class="col-4"> <!-- Adjusted column width to accommodate label and input -->
                                        <div class="text-center"> <!-- Center align content -->
                                            <label for="exampleFormControlInput1" class="form-label">
                                                Team Name
                                            </label>
                                            <div>
                                                <input type="text" name="name" class="form-control" required
                                                    value="{{ $team->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                </div>

                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <img src="/team/{{ $team->img }}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">
                                                Image
                                            </label>
                                            <input type="file" name="img" class="form-control">

                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/en.png" width="15px" alt="">
                                            Role (EN)
                                        </label>
                                        <div>
                                            <input type="text" value="{{ $team->role_en }}" name="role_en"
                                                class="form-control" id="exampleFormControlInput1"
                                                placeholder="team Title English..." required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/fr.png" width="15px" alt="">
                                            Role (FR)
                                        </label>
                                        <div>
                                            <input type="text" value="{{ $team->role_fr }}" name="role_fr"
                                                class="form-control" id="exampleFormControlInput1"
                                                placeholder="team Title French..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Facebook
                                        </label>
                                        <input type="text" value="{{ $team->facebook }}" name="facebook"
                                            class="form-control" id="exampleFormControlInput1"
                                            placeholder="team Title French..." required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Linkedin
                                        </label>
                                        <input type="text" value="{{ $team->linkedin }}" name="linkedin"
                                            class="form-control" id="exampleFormControlInput1"
                                            placeholder="team Title French..." required>
                                    </div>
                                </div>

                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Twitter
                                        </label>
                                        <input type="text" value="{{ $team->twitter }}" name="twitter"
                                            class="form-control" id="exampleFormControlInput1"
                                            placeholder="team Title French..." required>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Instagram
                                        </label>
                                        <input type="text" value="{{ $team->insta }}" name="insta"
                                            class="form-control" id="exampleFormControlInput1"
                                            placeholder="team Title French..." required>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn mt-3 btn-dark">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.footer')
        </div>
    </main>

    @include('admin.script')

</body>

</html>
