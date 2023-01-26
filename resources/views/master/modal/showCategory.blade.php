<table class="table" id="getUser">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Category</th>
            <th>Slug</th>
            <th>Ttile</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getCategory as $key => $category)
            <tr>
                <td>
                    {{ $key + $getCategory->firstItem() }}
                </td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->title }}</td>
                <td>
                    <a href="#" onclick="editCategory({{ $category->id }})">
                        <i class='bx bx-edit-alt'></i>
                    </a>
                    &nbsp;
                    <a href="#" onclick="hapusCategory({{ $category->id }})">
                        <i class='bx bx-trash-alt'></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="row">{{ @$getCategory->onEachSide(2)->links() }}</div>
