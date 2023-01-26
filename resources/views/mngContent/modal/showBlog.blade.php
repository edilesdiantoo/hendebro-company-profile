<table class="table" id="getUser">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Type Content</th>
            <th>Category</th>
            <th>Gambar</th>
            <th>Hit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($get_blog as $key => $blog)
            <tr>
                <td>
                    {{ $key + $get_blog->firstItem() }}
                </td>
                <td>{{ $blog->judul }}</td>
                <td>{{ $blog->hdr_name }}</td>
                <td>{{ $blog->category_name }}</td>
                <td>{{ $blog->gambar }}</td>
                <td>{{ $blog->hit }}</td>
                <td>
                    <a href="#" onclick="editMenuHdr({{ $blog->id }})">
                        <i class='bx bx-edit-alt'></i>
                    </a>
                    &nbsp;
                    <a href="#" onclick="hapusMenuHdr({{ $blog->id }})">
                        <i class='bx bx-trash-alt'></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="row">{{ @$get_blog->onEachSide(2)->links() }}</div>
