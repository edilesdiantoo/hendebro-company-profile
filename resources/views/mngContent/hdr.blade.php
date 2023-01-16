@extends('partials.layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4">
            <button type="button" class="btn rounded-pill btn-primary" type="button" data-bs-toggle="modal"
                onclick="addmenuHdr()" data-bs-target="#modal-tambah">
                <span class="tf-icons bx bx-plus text-white"></span>
                Menu HDR
            </button>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="card">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-header">Data Menu Header</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" name="search"
                                    id="search" oninput="search_data()" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="" id="show-menu-hdr">
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
                <div class="modal-body tambah-menu-hdr">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" onclick="saveMenuHdr()">Save</button>
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
                <div class="modal-body edit-menu-hdr">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" onclick="saveEditMenuHdr()">Save Edit</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            showMenuHdr()
        });

        function showMenuHdr() {
            $.get("{{ url('/showMenuHdr') }}", {}, function(data, status) {
                $('#show-menu-hdr').html(data);
            })
        }

        function addmenuHdr() {
            $.get("{{ url('/tambahMenuHdr') }}", {}, function(data, status) {

                // alert('kk')
                $("#modal-tambah").modal('show');
                $('#exampleModalLabel1').html('Input Hdr Menu')
                $('.tambah-menu-hdr').html(data);
            })
        }

        function saveMenuHdr() {
            var hdr_name = $("#hdr_name").val();
            var title = $("#title").val();
            $.ajax({
                type: "get",
                url: "{{ url('/simpanMenuHdr') }}",
                data: {
                    hdr_name: hdr_name,
                    title: title
                },
                success: function(data) {
                    // console.log(data);
                    $('.close').click();
                    showMenuHdr()
                }
            });
        }

        function editMenuHdr(id) {
            $.get("{{ url('/editMenuHdr') }}/" + id, {}, function(data, status) {

                $("#modal-edit").modal('show');
                $('#exampleModalLabel1').html('Edit Data User')
                $('.edit-menu-hdr').html(data);
            })
        }

        function saveEditMenuHdr() {
            var id = $("#id").val();
            var hdr_name = $("#hdr_name").val();
            var title = $("#title").val();
            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ url('/simpanEditMenuHdr') }}/" + id,
                data: {
                    hdr_name: hdr_name,
                    title: title
                },
                success: function(data) {
                    // console.log(data);
                    $('.close').click();
                    showMenuHdr()
                }
            });
        }

        function hapusMenuHdr(id) {
            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ url('deleteMenuHdr') }}/" + id,
                success: function(data) {
                    $('.close').click();
                    showMenuHdr()
                    // console.log(data);
                },
            });
        }
    </script>
@endsection
