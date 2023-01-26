@extends('partials.layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4">
            <button type="button" class="btn rounded-pill btn-primary" type="button" data-bs-toggle="modal" onclick="addUser()"
                data-bs-target="#modal-tambah">
                <span class="tf-icons bx bx-plus text-white"></span>
                Category
            </button>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="card">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-header">Data Categories</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" name="search"
                                    id="search" oninput="" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="" id="show-category">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-tambah" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tambah-category">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" onclick="saveNewCategory()">Save</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-edit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body edit-category">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" onclick="saveEditCategory()">Save Edit</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_category(page);
            })

            function fetch_category(page) {
                $.ajax({
                    url: "/fetch_category?page=" + page,
                    success: function(data) {
                        $('#show-category').html(data);
                    }
                });
            }
        });

        $(document).ready(function() {
            showCategory()
        });

        function showCategory() {
            $.get("{{ url('/showCategory') }}", {}, function(data, status) {
                $('#show-category').html(data);
            })
        }

        function addUser() {
            $.get("{{ url('/tambahCategory') }}", {}, function(data, status) {

                // alert('kk')
                $("#modal-tambah").modal('show');
                $('#exampleModalLabel1').html('Input User Baru')
                $('.tambah-category').html(data);
            })
        }

        function saveNewCategory() {
            var name = $("#name").val();
            var slug = $("#slug").val();
            var title = $("#title").val();
            $.ajax({
                type: "get",
                url: "{{ url('/simpanCategory') }}",
                data: {
                    name: name,
                    slug: slug,
                    title: title,
                },
                success: function(data) {
                    // console.log(data);
                    $('.close').click();
                    showCategory()
                }
            });
        }

        function editCategory(id) {
            $.get("{{ url('/editCategory') }}/" + id, {}, function(data, status) {

                $("#modal-edit").modal('show');
                $('#exampleModalLabel1').html('Edit Data Category')
                $('.edit-category').html(data);
            })
        }

        function saveEditCategory() {
            var id = $("#id").val();
            var name = $("#name").val();
            var slug = $("#slug").val();
            var title = $("#title").val();
            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ url('simpanEditCategory') }}/" + id,
                data: {
                    name: name,
                    slug: slug,
                    title: title,
                },
                success: function(data) {
                    $('.close').click();
                    showCategory()
                },
            });
        }

        function hapusCategory(id) {
            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ url('deleteCategory') }}/" + id,
                success: function(data) {
                    $('.close').click();
                    showCategory()
                    // console.log(data);
                },
            });
        }
        $('#search').on('keyup', function() {
            var search = $("#search").val();
            // alert(search);
            $.get("{{ url('/getSearchCategory') }}/" + search, {}, function(data, status) {
                $('#show-category').html(data);
            })


        })
    </script>
@endsection
