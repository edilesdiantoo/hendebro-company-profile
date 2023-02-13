<table class="table" id="getUser">
    <thead>
        <tr>
            <th>No</th>
            <th>Menu</th>
            <th>Category Menu</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getMenuContent as $key => $menu)
            <tr>
                <td>
                    {{ $key + $getMenuContent->firstItem() }}
                </td>
                <td>{{ $menu->name_menu }}</td>
                <td>{{ $menu->name_category_menu }}</td>
                <td>{{ $menu->keterangan }}</td>
                <td>{{ $menu->status }}</td>
                <td>
                    <a href="#" onclick="editMenuContent({{ $menu->id }})">
                        <i class='bx bx-edit-alt'></i>
                    </a>
                    &nbsp;
                    <a href="#" onclick="hapusMenuContent({{ $menu->id }})">
                        <i class='bx bx-trash-alt'></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="row">{{ @$getMenuContent->onEachSide(2)->links() }}</div>
