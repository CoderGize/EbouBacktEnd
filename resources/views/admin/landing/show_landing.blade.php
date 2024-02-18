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
                            <h6>Landing Section</h6>
                        </div>

                        <div class="row mb-3">


                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.landing.update_landing')

                                </div>
                            </div>
                        </div>


                        <div class="card-body px-0 pt-0 mt-4 pb-2">
                            <div class="row text-center">

                                <div class="col-6">
                                    <label for="">
                                        Landing Image

                                     </label>

                                     <div class="">
                                        <img src="/landing/{{ $landing->img }}" async class="d-block m-auto w-50"   alt="Landing Image">

                                     </div>

                                </div>

                                <div class="col-6">
                                    <label for="">
                                      Landing Video

                                    </label>
                                    <div class="">
                                    <iframe height="250px" src="{{ $landing->video }}" title="Landing Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
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
