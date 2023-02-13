<table class="table" id="getUser">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Type Content</th>
            <th>Category</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getScode as $key => $scode)
            <tr>
                <td>
                    {{ $key + $getScode->firstItem() }}
                </td>
                <td>{{ $scode->judul }}</td>
                <td>{{ $scode->hdr_name }}</td>
                <td>{{ $scode->category_name }}</td>
                <td>
                    {{-- <img src="{{ asset('storage/' . $scode->image) }}" alt=""> --}}
                </td>
                <td>{{ $scode->keterangan }}</td>
                <td>
                    <a href="#" onclick="editScode({{ $scode->id }})">
                        <i class='bx bx-edit-alt'></i>
                    </a>
                    &nbsp;
                    <a href="#" onclick="hapusScode({{ $scode->id }})">
                        <i class='bx bx-trash-alt'></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="row">{{ @$getScode->onEachSide(2)->links() }}</div>
