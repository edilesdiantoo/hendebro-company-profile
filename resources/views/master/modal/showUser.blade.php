<table class="table" id="getUser">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>username</th>
            <th>Email</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($test_join as $key => $users)
            <tr>
                <td>
                    {{ $key + $test_join->firstItem() }}
                </td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->username }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->level_name }}</td>
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
<div class="row">{{ @$test_join->onEachSide(2)->links() }}</div>
