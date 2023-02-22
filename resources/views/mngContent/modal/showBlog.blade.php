<table class="table" id="getUser">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Type Content</th>
            <th>Category</th>
            <th>Gambar</th>
            <th>Hit</th>
            <th>keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getBlog as $key => $blog)
            <tr>
                <td>
                    {{ $key + $getBlog->firstItem() }}
                </td>
                <td>{{ $blog->judul }}</td>
                <td>{{ $blog->menu_name }}</td>
                <td>{{ $blog->category_name }}</td>
                <td>
                    {{-- <img src="{{ asset('storage/' . $blog->image) }}" alt=""> --}}
                    <img src="{{ URL::to('/storage') }}/post-blog/4NJMEJIevQU1aBGlILmJdkPYTIENhhzIYReianTB.png"
                        alt="">
                </td>
                <td>{{ $blog->hit }}</td>
                <td>{{ $blog->keterangan }}</td>
                <td>
                    <a href="#" onclick="editBlog({{ $blog->id }})">
                        <i class='bx bx-edit-alt'></i>
                    </a>
                    &nbsp;
                    <a href="#" onclick="hapusBlog({{ $blog->id }})">
                        <i class='bx bx-trash-alt'></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="row">{{ @$getBlog->onEachSide(2)->links() }}</div>
