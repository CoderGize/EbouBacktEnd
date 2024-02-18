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
                            <h6>Counter Section</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <form action="{{ url('/admin/counter') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if ($show->counter_sh == 1)
                                        <input type="hidden" name="datash" value="0">
                                    @endif
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input {{ $show->counter_sh == 1 ? 'bg-success' : 'bg-danger' }}"
                                            name="datash" type="checkbox" role="switch"
                                            value="{{ $show->counter_sh == 1 ? '0' : '1' }}"
                                            onchange="this.form.submit()" id="flexSwitchCheck"
                                            {{ $show->counter_sh == 1 ? 'checked' : ' ' }}>
                                        <label class="form-check-label" for="flexSwitchCheck">
                                            Show Section
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    <a href="{{ url('admin/update_counter', $counter->id) }}" class="btn btn-dark">
                                        <i class="bi bi-pen"></i>

                                        Update
                                    </a>


                                </div>
                            </div>
                        </div>

                        <div class="row mb-5 mt-5">
                            <div class="col-1"></div>
                            <div class="col-2 text-center">
                                <label for="">

                                    Number 1
                                </label>
                                <p>
                                    {{ $counter->number_1 }}
                                </p>
                            </div>

                            <div class="col-3 text-center">
                                <label for="">

                                    Number 2
                                </label>
                                <p>
                                    {{ $counter->number_2 }}
                                </p>
                            </div>

                            <div class="col-3 text-center">
                                <label for="">

                                    Number 3
                                </label>
                                <p>
                                    {{ $counter->number_3 }}
                                </p>
                            </div>

                            <div class="col-2 text-center">
                                <label for="">

                                    Number 4
                                </label>
                                <p>
                                    {{ $counter->number_4 }}
                                </p>
                            </div>
                            <div class="col-1"></div>

                        </div>




                        <div class="row text-center my-3">
                            <div class="col-6">
                                <label for="">
                                    <img src="/images/en.png" width="15px" alt="">

                                    Text 1 (EN)
                                </label>
                                <p>
                                    {{ $counter->text_1_en }}
                                </p>
                            </div>

                            <div class="col-6">
                                <label for="">
                                    <img src="/images/fr.png" width="15px" alt="">

                                    Text 1 (fr)
                                </label>
                                <p>
                                    {{ $counter->text_1_fr }}
                                </p>
                            </div>

                        </div>

                        <div class="row text-center my-3">
                            <!-- Column 1 -->
                            <div class="col-6">
                                <label for="">
                                    <img src="/images/en.png" width="15px" alt="">
                                    Text 2 (EN)
                                </label>
                                <p>
                                    {{ $counter->text_2_en }}
                                </p>
                            </div>

                            <!-- Column 2 -->
                            <div class="col-6">
                                <label for="">
                                    <img src="/images/fr.png" width="15px" alt="">
                                    Text 2 (FR)
                                </label>
                                <p>
                                    {{ $counter->text_2_fr }}
                                </p>
                            </div>
                        </div>

                        <div class="row text-center my-3">
                            <!-- Column 1 -->
                            <div class="col-6">
                                <label for="">
                                    <img src="/images/en.png" width="15px" alt="">
                                    Text 3 (EN)
                                </label>
                                <p>
                                    {{ $counter->text_3_en }}
                                </p>
                            </div>

                            <!-- Column 2 -->
                            <div class="col-6">
                                <label for="">
                                    <img src="/images/fr.png" width="15px" alt="">
                                    Text 3 (FR)
                                </label>
                                <p>
                                    {{ $counter->text_3_fr }}
                                </p>
                            </div>
                        </div>

                        <div class="row text-center my-3">
                            <!-- Column 1 -->
                            <div class="col-6">
                                <label for="">
                                    <img src="/images/en.png" width="15px" alt="">
                                    Text 4 (EN)
                                </label>
                                <p>
                                    {{ $counter->text_4_en }}
                                </p>
                            </div>

                            <!-- Column 2 -->
                            <div class="col-6">
                                <label for="">
                                    <img src="/images/fr.png" width="15px" alt="">
                                    Text 4 (FR)
                                </label>
                                <p>
                                    {{ $counter->text_4_fr }}
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
