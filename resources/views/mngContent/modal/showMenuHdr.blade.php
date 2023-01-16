<table class="table" id="getUser">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Header</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getMenuHdr as $key => $hdr)
            <tr>
                <td>
                    {{ $key + $getMenuHdr->firstItem() }}
                </td>
                <td>{{ $hdr->hdr_name }}</td>
                <td>{{ $hdr->title }}</td>
                <td>
                    <a href="#" onclick="editMenuHdr({{ $hdr->id }})">
                        <i class='bx bx-edit-alt'></i>
                    </a>
                    &nbsp;
                    <a href="#" onclick="hapusMenuHdr({{ $hdr->id }})">
                        <i class='bx bx-trash-alt'></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="row">{{ @$getMenuHdr->onEachSide(2)->links() }}</div>
