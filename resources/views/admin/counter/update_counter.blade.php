


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
                            <a href="{{ url('/admin/show_counter') }}" class="btn btn-dark">
                                <i class="bi bi-arrow-left"></i>
                                back
                            </a>
                            <h6>Edit Counter</h6>
                        </div>
                        <div class="card-body px-auto pt-0 pb-2">
                            <form action="{{ url('/admin/update_counter_confirm', $counter->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-4 row">
                                    <div class="col-3">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Number 1
                                        </label>
                                        <div>
                                            <input type="number" value="{{$counter->number_1}}" name="number_1" class="form-control" id="exampleFormControlInput1"  required>

                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Number 2
                                        </label>
                                        <div>
                                            <input type="number" value="{{$counter->number_2}}" name="number_2" class="form-control" id="exampleFormControlInput1"  required>

                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Number 3
                                        </label>
                                        <div>
                                            <input type="number" value="{{$counter->number_3}}" name="number_3" class="form-control" id="exampleFormControlInput1"  required>

                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Number 4
                                        </label>
                                        <div>
                                            <input type="number" value="{{$counter->number_4}}" name="number_4" class="form-control" id="exampleFormControlInput1"  required>

                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/en.png" width="15px" alt="">
                                            Text 1 (EN)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_1_en" class="form-control" id="exampleFormControlInput1" required>{{$counter->text_1_en}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/fr.png" width="15px" alt="">
                                            Text 1 (FR)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_1_fr" class="form-control" id="exampleFormControlInput1" required>{{$counter->text_1_fr}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/en.png" width="15px" alt="">
                                            Text 2 (EN)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_2_en" class="form-control" id="exampleFormControlInput1" required>{{$counter->text_2_en}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/fr.png" width="15px" alt="">
                                            Text 2 (FR)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_2_fr" class="form-control" id="exampleFormControlInput1" required>{{$counter->text_2_fr}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/en.png" width="15px" alt="">
                                            Text 3 (EN)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_3_en" class="form-control" id="exampleFormControlInput1" required>{{$counter->text_3_en}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/fr.png" width="15px" alt="">
                                            Text 3 (FR)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_3_fr" class="form-control" id="exampleFormControlInput1" required>{{$counter->text_3_fr}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 row">
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/en.png" width="15px" alt="">
                                            Text 4 (EN)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_4_en" class="form-control" id="exampleFormControlInput1" required>{{$counter->text_4_en}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            <img src="/images/fr.png" width="15px" alt="">
                                            Text 4 (FR)
                                        </label>
                                        <div>
                                            <textarea type="text" cols="4" rows="4" name="text_4_fr" class="form-control" id="exampleFormControlInput1" required>{{$counter->text_4_fr}}</textarea>
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
