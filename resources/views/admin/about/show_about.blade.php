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
                        <div class="card-header pb-0">
                            <h6>About Section</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    <a  href="{{ url('admin/update_about', $about->id) }}" class="btn btn-dark">
                                        <i class="bi bi-pen"></i>

                                        Update
                                    </a>


                                </div>
                            </div>
                        </div>


                        <div class="card-body px-0 pt-0 mt-4 pb-2">
                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                       Image 1

                                    </label>

                                    <div class="">
                                        <img src="/about/{{ $about->img1 }}" async class="d-block m-auto w-30"   alt="about Image">

                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="">
                                        Image 2

                                     </label>

                                     <div class="">
                                        <img src="/about/{{ $about->img2 }}" async class="d-block m-auto w-30"   alt="about Image">

                                    </div>
                                </div>


                            </div>


                            <div class="row text-center my-3">
                                <div class="col-6">
                                    <label for="">
                                        <img src="/images/en.png" width="15px" alt="">

                                       Title (EN)
                                    </label>
                                    <p>
                                        {{ $about->title_en }}
                                    </p>
                                </div>

                                <div class="col-6">
                                    <label for="">
                                        <img src="/images/fr.png" width="15px" alt="">

                                       Title (fr)
                                    </label>
                                    <p>
                                        {{ $about->title_fr }}
                                    </p>
                                </div>

                            </div>

                            <div class="row text-center my-3">
                                <div class="col-6">
                                    <label for="">
                                        <img src="/images/en.png" width="15px" alt="">

                                       Text (EN)
                                    </label>
                                    <p>
                                        {{ $about->text_en }}
                                    </p>
                                </div>

                                <div class="col-6">
                                    <label for="">
                                        <img src="/images/fr.png" width="15px" alt="">

                                       Text (FR)
                                    </label>
                                    <p>
                                        {{ $about->text_fr }}
                                    </p>
                                </div>

                            </div>



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
