<table class="table" id="getUser">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getUser as $key => $users)
            <tr>
                <td>
                    {{ $rank++ }}
                </td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->username }}</td>
                <td>{{ $users->email }}</td>
                <td>
                    <a href="#" onclick="editUser({{ $users->id }})">
                        <i class='bx bx-edit-alt'></i>
                    </a>
                    &nbsp;
                    <a href="#" onclick="hapusUser({{ $users->id }})">
                        <i class='bx bx-trash-alt'></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="row">{!! @$getUser->render() !!}</div>
