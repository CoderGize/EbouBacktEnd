


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
                            <a href="{{ url('/admin/show_service') }}" class="btn btn-dark">
                                <i class="bi bi-arrow-left"></i>
                                back
                            </a>
                            <h6>Edit Service</h6>
                        </div>
                        <div class="card-body px-auto pt-0 pb-2">
                            <form action="{{ url('/admin/update_service_confirm', $service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                           Service Icon
                                        </label>
                                        <div>
                                            <img src="/service/{{ $service->icon }}" width="100px" />
                                        </div>
                                        <input type="file" name="icon" class="form-control mt-3">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                          Service Image
                                        </label>
                                        <div>
                                            <img src="/service/{{ $service->img }}" width="100px" />
                                        </div>
                                        <input type="file" name="img" class="form-control mt-3">
                                    </div>
                                </div>
                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/en.png" width="15px" alt="">
                                            Title (EN)
                                        </label>
                                        <div>
                                            <input type="text" value="{{$service->title_en}}" name="title_en" class="form-control" id="exampleFormControlInput1" placeholder="service Title English..." required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/fr.png" width="15px" alt="">
                                            Title (FR)
                                        </label>
                                        <div>
                                            <input type="text" value="{{$service->title_fr}}" name="title_fr" class="form-control" id="exampleFormControlInput1" placeholder="service Title French..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/en.png" width="15px" alt="">
                                            Text (EN)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_en" class="form-control" id="exampleFormControlInput1" placeholder="service text English..." required>{{$service->text_en}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/fr.png" width="15px" alt="">
                                            Text (FR)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_fr" class="form-control" id="exampleFormControlInput1" placeholder="service text French..." required>{{$service->text_fr}}</textarea>
                                        </div>
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
