
<a type="button"   class="text-primary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $data->id }}">

    Edit
    <i class="bi bi-pencil"></i>

</a>

<div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1"
    aria-labelledby="exampleModal{{ $data->id }}Label{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal{{ $data->id }}Label{{ $data->id }}">
                    Portfolio
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_portfolio/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Image
                        </label>
                        <div>
                            <img src="/portfolio/{{ $data->img }}" width="100px" />
                        </div>

                            <input type="file" name="img" class="form-control mt-3" >
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Services</label>
                            <select name="service_id" class="form-select" required>
                                {{-- <option value="" disabled>Select a Service</option> --}}
                                @foreach ($serviceId as $serviceName)
                                    <option value='{{ $serviceName->id }}' {{ $data->service_id == $serviceName->id ? 'selected' : '' }}>
                                        {{ $serviceName->title_en }}
                                    </option>
                                @endforeach
                            </select>
                        </div>




                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/en.png" width="15px" alt="">
                            Title (EN)
                        </label>
                        <input type="text" name="title_en" class="form-control" value="{{ $data->title_en }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/fr.png" width="15px" alt="">

                            Title (FR)
                        </label>
                        <input type="text" name="title_fr" class="form-control" value="{{ $data->title_fr }}" required>
                    </div>


                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Update
                        <i class="bi bi-pencil"></i>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
