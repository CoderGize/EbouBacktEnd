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
                            <h6>FAQ</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <form action="{{ url('/admin/faq') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if ($show->faq_sh == 1)
                                        <input type="hidden" name="datash" value="0">
                                    @endif
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input {{ $show->faq_sh == 1 ? 'bg-success' : 'bg-danger' }}"
                                            name="datash" type="checkbox" role="switch"
                                            value="{{ $show->faq_sh == 1 ? '0' : '1' }}" onchange="this.form.submit()"
                                            id="flexSwitchCheck" {{ $show->faq_sh == 1 ? 'checked' : ' ' }}>
                                        <label class="form-check-label" for="flexSwitchCheck">
                                            Show Section
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.faq.add_faq')

                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="text-center">

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="/images/en.png" width="15px" alt="">

                                                Question
                                            </th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="/images/fr.png" width="15px" alt="">

                                                Question
                                            </th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="/images/en.png" width="15px" alt="">

                                                Answer
                                            </th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="/images/fr.png" width="15px" alt="">

                                                Answer
                                            </th>


                                            <th class="text-secondary opacity-7"></th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($faq as $data)
                                            <tr class="text-center">

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->quest_en }}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->quest_fr }}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->ans_en }}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->ans_fr }}
                                                    </p>
                                                </td>

                                                <td class="align-middle">
                                                    @include('admin.faq.update_faq')
                                                </td>

                                                <td class="align-middle">
                                                    <a href="{{ url('admin/delete_faq', $data->id) }}"
                                                        class="text-danger font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit faq"
                                                        onclick="return confirm('Are you sure you want to delete this faq?')">
                                                        Delete
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="16">
                                                    <p class="text-xs text-center text-danger font-weight-bold mb-0">
                                                        No Data !
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $faq->render('admin.pagination') }}
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
