@extends('partials.layouts.main')

@section('container')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4">
            <button type="button" class="btn rounded-pill btn-primary" type="button" data-bs-toggle="modal" onclick="addUser()"
                data-bs-target="#modal-tambah">
                <span class="tf-icons bx bx-plus text-white"></span>
                User
            </button>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="card">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-header">Data User</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" name="search"
                                    id="search" oninput="search_data()" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="" id="show-user">
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
                <div class="modal-body tambah-user">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" onclick="saveNewUser()">Save</button>
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
                <div class="modal-body edit-user">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary close" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" onclick="saveEditUser()">Save Edit</button>
                </div>
            </div>
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
                    url: "/fetch_data?page=" + page,
                    success: function(data) {
                        $('#show-user').html(data);
                    }
                });
            }
        });

        $(document).ready(function() {
            showUser()
        });

        function showUser() {
            $.get("{{ url('/showUser') }}", {}, function(data, status) {
                $('#show-user').html(data);
            })
        }

        function addUser() {
            $.get("{{ url('/tambahUser') }}", {}, function(data, status) {

                // alert('kk')
                $("#modal-tambah").modal('show');
                $('#exampleModalLabel1').html('Input User Baru')
                $('.tambah-user').html(data);
            })
        }

        function saveNewUser() {
            var name = $("#name").val();
            var username = $("#username").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var is_admin = $("#is_admin").val();
            $.ajax({
                type: "get",
                url: "{{ url('/simpanUser') }}",
                data: {
                    name: name,
                    username: username,
                    email: email,
                    password: password,
                    is_admin: is_admin,
                },
                success: function(data) {
                    // console.log(data);
                    $('.close').click();
                    showUser()
                }
            });
        }

        function editUser(id) {
            $.get("{{ url('/editUser') }}/" + id, {}, function(data, status) {

                $("#modal-edit").modal('show');
                $('#exampleModalLabel1').html('Edit Data User')
                $('.edit-user').html(data);
            })
        }

        function saveEditUser() {
            var id = $("#id").val();
            var name = $("#name").val();
            var username = $("#username").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var is_admin = $("#is_admin").val();
            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ url('simpanEditUser') }}/" + id,
                data: {
                    name: name,
                    username: username,
                    email: email,
                    password: password,
                    is_admin: is_admin,
                },
                success: function(data) {
                    $('.close').click();
                    showUser()
                },
            });
        }

        function hapusUser(id) {
            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ url('deleteUser') }}/" + id,
                success: function(data) {
                    $('.close').click();
                    showUser()
                    // console.log(data);
                },
            });
        }

        function search_data() {
            var search = $("#search").val();
            // alert(search);
            $.get("{{ url('/getSearch') }}/" + search, {}, function(data, status) {
                $('#show-user').html(data);
            })
        }
    </script>
@endsection
