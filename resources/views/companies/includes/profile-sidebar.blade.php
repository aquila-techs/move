
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <div class="row" id="edit-button">
                        <div class="col">
                            <a href="{{  url('company/profile/1/edit') }}" class="btn btn-sm btn-primary float-right"> Edit </a>
                        </div>
                    </div>
                    <img src="{{ asset('public/assets/images/users/avatar-7.jpg') }}" alt="" class="avatar-lg rounded-circle" />
                    <h5 class="mt-2 mb-0"> {{ $profile->name  }} </h5>
                    <h6 class="text-muted font-weight-normal mt-2 mb-0"> {{ \App\Company\Categories::select('name')->whereId($profile->category_id)->first()->name  }}
                    </h6>
                    <h6 class="text-muted font-weight-normal mt-1 mb-4">{{ $profile->city }}, {{ $profile->state }}</h6>

                </div>

                <!-- profile  -->
                <div class="mt-5 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">About</h4>
                    <p class="text-muted mb-4">{!! $profile->description !!}</p>
                </div>
                <div class="mt-3 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Contact Information</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0 text-muted">
                            <tbody>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $profile->name  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Phone</th>
                                <td>{{ $profile->phone_number }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>{{ $profile->address }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- end card -->
