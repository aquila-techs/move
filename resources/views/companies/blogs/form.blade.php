@extends('companies.layouts.vertical')


@section('css')
    <style>
        #loader {
            position: fixed;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 100;
            background: #fff;
            padding-top: 20%;
            padding-left: 45%;
        }
        .btns-div
        {
            display: flex;
            justify-content: center;
        }
        .btns-div .btn
        {
            width: 100px;
        }
    </style>
    <link href="{{ asset('public/assets/css/dropzone.css')  }}"></link>

@endsection

@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">descriptions</li>
                </ol>
            </nav>
            @if( isset( $blog ) )
            <h4 class="mb-1 mt-0">Blog/ Edit</h4>
            @else
            <h4 class="mb-1 mt-0">Blog / Create</h4>
            @endif
        </div>
    </div>
@endsection

@section('content')
    <div id="loader">
        <div class="spinner-grow text-primary m-2" role="blog_status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="card" style="min-height: 500px;">
                <div class="card-body">

                             @if( isset( $blog ) )
                                   <form action="{{ url('company/blogs/'.$blog->id)  }}" id="blogForm" method="post" class="parsley-examples">
                            @else
                                   <form action="{{ url('company/blogs')  }}" method="post" id="blogForm" class="parsley-examples">
                            @endif
                                @csrf
                                @if( isset($blog) )
                                @method('PUT')
                                @endif
                                <div class="row">
                                    <div class="col-9">
                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <label for="title">Title</label>
                                                <input autocomplete="off" type="title" id="title" name="title" parsley-trigger="change"  placeholder="Title"
                                                       class="form-control @if($errors->has('title')) is-invalid @endif" value="@if(isset($blog)) {{ old('title',$blog->title) }}@endif">
                                                @if($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                                @endif
                                            </div>


                                        </div>


                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="description">Description</label>
                                                <textarea autocomplete="off" type="text" id="description" name="description" parsley-trigger="change"  placeholder="Description"
                                                          class="form-control @if($errors->has('description')) is-invalid @endif">
                                           @if(isset($blog))
                                                        {{ old('description',$blog->description) }}
                                                    @endif
                                        </textarea>

                                                @if($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="form-group btns-div col-12">
                                                <a href="{{ url('company/blogs') }}" class="btn btn-md btn-light mr-5"> Cancel </a>
                                                <button type="submit" id="btn" class="btn btn-md btn-primary "> Save </button>
                                            </div>
                                        </div>
                                     </form>
                                    </div>

                                    <div class="col-3">
                                        <form action="{{ url('file-upload')  }}"  id="dropzoneForm" style="width: 300px; height: 200px;" class="dropzone">
                                            @csrf
                                        </form>
                                    </div>
                                </div>





                </div>

            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->


@endsection

@section('script')
    <script src="https://cdn.tiny.cloud/1/k8aaemajh4grijw0jczycetgt4ddfipsgptm84u9jhdoxp8f/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('public/assets/js/dropzone.js')  }}"></script>
    <script>
        $(document).ready(function () {
            $('#loader').fadeOut('slow');

            tinymce.init({
                selector: 'textarea#description',
                menubar: true,
                plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                toolbar_mode: 'floating',
                image_title: true,
                /* enable automatic uploads of images represented by blob or data URIs*/
                automatic_uploads: true,
                /*
                  URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
                  images_upload_url: 'postAcceptor.php',
                  here we add custom filepicker only to Image dialog
                */
                file_picker_types: 'image',
                /* and here's our custom image picker*/
                file_picker_callback: function (cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    /*
                      Note: In modern browsers input[type="file"] is functional without
                      even adding it to the DOM, but that might not be the case in some older
                      or quirky browsers like IE, so you might want to add it to the DOM
                      just in case, and visually hide it. And do not forget do remove it
                      once you do not need it anymore.
                    */

                    input.onchange = function () {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.onload = function () {
                            /*
                              Note: Now we need to register the blob in TinyMCEs image blob
                              registry. In the next release this part hopefully won't be
                              necessary, as we are looking to handle it internally.
                            */
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            /* call the callback and populate the Title field with the file name */
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                        reader.readAsDataURL(file);
                    };

                    input.click();
                },
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });

            Dropzone.options.myAwesomeDropzone = {
                autoProcessQueue: true,
                init: function () {
                    const form = $('#blogForm');
                    const MyDropzone = this;
                    $('#btn').click(function () {
                        console.log('clicked');
                        myDropzone.autoProcessQueue();
                    });

                    this.on('complete',function () {
                        if(this.getQueuedFiles().legth == 0 && this.getUploadingFiles().length == 0 )
                        {
                            var _this = this;
                            _this.removeAllFiles();
                        }
                    })
                }
            };

        });
    </script>
@endsection

@section('script-bottom')
@endsection
