
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <div class="row" id="edit-button">
                        <div class="col">
                            @if($profile)
                            <a href="{{  url('user/profile/'.$profile->id.'/edit') }}" class="btn btn-sm float-right" style="background: transparent; border:none">
                                <div class="icon-item edit-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    <span></span>
                                </div>
                            </a>
                            <button class="btn btn-sm btn-primary float-left"  data-toggle="modal" data-target="#changeLogoModal" type="button"> Change Logo </button>
                            @endif
                        </div>
                    </div>
                    @if( $profile->media )
                        <img src="{{ asset('storage/company/media/'.$profile->media->logo) }}" alt="" class="avatar-lg rounded-circle" />
                    @else
                        <img src="{{ asset('public/assets/images/users/avatar-7.jpg') }}" alt="" class="avatar-lg rounded-circle" />
                    @endif
                    <h5 class="mt-2 mb-0"> {{ $profile->name }} </h5>

                </div>

                <!-- profile  -->
                <div class="mt-5 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Address</h4>
                    <p class="text-muted mb-4">{{ $profile->address }}</p>
                </div>
                <div class="mt-3 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Contact Information</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0 text-muted">
                            <tbody>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $profile->company_email  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Phone</th>
                                <td>{{ $profile->phone_number }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="changeLogoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button style="position: absolute; top: 10px; right: 10px; z-index: 2;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">

                <form  method="post" class="mt-5" enctype="multipart/form-data" novalidate action="{{ url('company/add-logo') }}"  >
                    @csrf
                    <div class="form-group">
                        <input type="file" name="logo">
                    </div>

                    <button class="btn btn-outline-primary" type="submit"> Submit </button>

                </form>
                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>



        </div>
    </div>
</div>

        <!-- end card -->
