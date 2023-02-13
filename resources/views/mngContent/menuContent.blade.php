@extends('partials.layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4">
            <button type="button" class="btn rounded-pill btn-primary" type="button" data-bs-toggle="modal"
                onclick="addmenuContent()" data-bs-target="#modal-tambah">
                <span class="tf-icons bx bx-plus text-white"></span>
                Menu Content
            </button>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="card">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-header">Data Menu Content</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" name="search"
                                    id="search" oninput="search_data()" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="" id="show-menu-content">
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
                <div class="modal-body tambah-menu-content">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" onclick="saveMenuContent()">Save</button>
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
                <div class="modal-body edit-menu-content">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" onclick="saveEditMenuContent()">Save Edit</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            showMenuContent()
        });

        function showMenuContent() {
            $.get("{{ url('/showMenuContent') }}", {}, function(data, status) {
                $('#show-menu-content').html(data);
            })
        }

        function addmenuContent() {
            $.get("{{ url('/tambahMenuContent') }}", {}, function(data, status) {

                // alert('kk')
                $("#modal-tambah").modal('show');
                $('#exampleModalLabel1').html('Input Hdr Menu')
                $('.tambah-menu-content').html(data);
            })
        }

        function saveMenuContent() {
            var name = $("#name").val();
            var category_menu_id = $("#category_menu_id").val();
            var keterangan = $("#keterangan").val();
            var status = 1
            $.ajax({
                type: "get",
                url: "{{ url('/simpanMenuContent') }}",
                data: {
                    name: name,
                    category_menu_id: category_menu_id,
                    keterangan: keterangan,
                    status: status
                },
                success: function(data) {
                    // console.log(data);
                    $('.close').click();
                    showMenuContent()
                }
            });
        }

        function editMenuContent(id) {
            $.get("{{ url('/editMenuContent') }}/" + id, {}, function(data, status) {

                $("#modal-edit").modal('show');
                $('#exampleModalLabel1').html('Edit Data User')
                $('.edit-menu-content').html(data);
            })
        }

        function saveEditMenuContent() {
            var id = $("#id").val();
            var name = $("#name").val();
            var category_menu_id = $("#category_menu_id").val();
            var keterangan = $("#keterangan").val();
            var status = 1
            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ url('/simpanEditMenuContent') }}/" + id,
                data: {
                    name: name,
                    category_menu_id: category_menu_id,
                    keterangan: keterangan,
                    status: status
                },
                success: function(data) {
                    // console.log(data);
                    $('.close').click();
                    showMenuContent()
                }
            });
        }

        function hapusMenuContent(id) {
            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ url('deleteMenuContent') }}/" + id,
                success: function(data) {
                    $('.close').click();
                    showMenuContent()
                    // console.log(data);
                },
            });
        }

        function search_data() {
            var search = $("#search").val();
            // alert(search);
            $.get("{{ url('/getSearchMenu') }}/" + search, {}, function(data, status) {
                $('#show-menu-content').html(data);
            })
        }
    </script>
@endsection
