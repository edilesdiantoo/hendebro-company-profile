@extends('partials.layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4">
            <button type="button" class="btn rounded-pill btn-primary" type="button" data-bs-toggle="modal" onclick="addBlog()"
                data-bs-target="#modal-tambah">
                <span class="tf-icons bx bx-plus text-white"></span>
                Menu Sourch Code
            </button>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="card">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-header">Data Source Code</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" name="search"
                                    id="search" oninput="search_data()" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="" id="show-scode">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-tambah" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            {{-- <form method="post" action="/simpanBlog" class="mb-5" enctype="multipart/form-data"> --}}
            <form id="upload_form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body tambah-scode">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button class="btn btn-primary">Save SCode</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modal-edit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="upload_form_edit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body edit-scode">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button class="btn btn-primary">Save Edit Scode</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            })

            function fetch_data(page) {
                $.ajax({
                    url: "/fetch_scode?page=" + page,
                    success: function(data) {
                        $('#show-scode').html(data);
                    }
                });
            }
        });

        $(document).ready(function() {
            showScode()
        });

        function showScode() {
            // alert('test');
            $.get("{{ url('/showScode') }}", {}, function(data, status) {
                $('#show-scode').html(data);
            })
        }

        function addBlog() {
            $.get("{{ url('/tambahBlog') }}", {}, function(data, status) {

                // alert('kk')
                $("#modal-tambah").modal('show');
                $('#exampleModalLabel1').html('Input Data Blog Content')
                $('.tambah-scode').html(data);
            })
        }

        $(document).ready(function() {
            $('#upload_form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "{{ url('simpanBlog') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        // $('.close').click();
                        // showScode()
                        // $('#message').css('display', 'block');
                        // $('#message').html(data.success);
                        // $('#message').addClass(data.class_name);
                        // $('#uploaded_image').html(data.uploaded_image);
                    }
                })
            });
        });

        function editBlog(id) {
            $.get("{{ url('/editBlog') }}/" + id, {}, function(data, status) {

                $("#modal-edit").modal('show');
                $('#exampleModalLabel1').html('Edit Data Blog Content')
                $('.edit-scode').html(data);
            })
        }

        $(document).ready(function() {
            $('#upload_form_edit').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "{{ url('simpanBlogEdit') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        // console.log(data);
                        $('.close').click();
                        showScode()
                        // $('#message').css('display', 'block');
                        // $('#message').html(data.success);
                        // $('#message').addClass(data.class_name);
                        // $('#uploaded_image').html(data.uploaded_image);
                    }
                })
            });
        });

        function hapusBlog(id) {
            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ url('deleteBlog') }}/" + id,
                success: function(data) {
                    $('.close').click();
                    showScode()
                    // console.log(data);
                },
            });
        }

        function previewImage() {
            // alert('jaaja')
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
