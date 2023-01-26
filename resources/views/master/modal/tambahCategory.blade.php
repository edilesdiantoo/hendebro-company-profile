<div class="row">
    <div class="col mb-3">
        <label for="namaLenkap" class="form-label">Nama Category</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            placeholder="Category" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" id="slug" class="form-control" placeholder="slug" />
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="email" id="title" class="form-control" name="title" placeholder="Title" />
        {{-- <textarea name="title" id="" cols="30" rows="10"></textarea> --}}
    </div>
</div>
