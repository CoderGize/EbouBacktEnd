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
                            <h6>Testimonial</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <form action="{{ url('/admin/testimonial') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @if ($show->testimonial_sh == 1)
                                        <input type="hidden" name="datash" value="0">
                                    @endif
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input {{ $show->testimonial_sh == 1 ? 'bg-success' : 'bg-danger' }}"
                                            name="datash" type="checkbox" role="switch"
                                            value="{{ $show->testimonial_sh == 1 ? '0' : '1' }}"
                                            onchange="this.form.submit()" id="flexSwitchCheck"
                                            {{ $show->testimonial_sh == 1 ? 'checked' : ' ' }}>
                                        <label class="form-check-label" for="flexSwitchCheck">
                                            Show Section
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    @include('admin.testimonial.add_testimonial')
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
                                                Name
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="/images/en.png" width="20px">
                                                Role
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="/images/fr.png" width="20px">
                                                Role
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="/images/en.png" width="20px">

                                                Text
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="/images/fr.png" width="20px">

                                                Text
                                            </th>

                                            <th class="text-secondary opacity-7"></th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($testimonial as $data)
                                            <tr class="text-center">


                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->name }}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->role_en }}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->role_fr }}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->text_en }}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->text_fr }}
                                                    </p>
                                                </td>

                                                <td class="align-middle">
                                                    @include('admin.testimonial.update_testimonial')
                                                </td>

                                                <td class="align-middle">
                                                    <a href="{{ url('admin/delete_testimonial', $data->id) }}"
                                                        class="text-danger font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit testimonial"
                                                        onclick="return confirm('Are you sure you want to delete this testimonial?')">
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
                                {{ $testimonial->render('admin.pagination') }}
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
