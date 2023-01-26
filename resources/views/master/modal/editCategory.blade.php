<div class="row">
    <div class="col mb-3">
        <label for="namaLenkap" class="form-label">Nama Category</label>
        <input type="hidden" name="id" id="id" value="{{ $getCategoryEdit->id }}">
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            placeholder="Category" value="{{ old('name', $getCategoryEdit->name) }}" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" id="slug" class="form-control" placeholder="slug"
            value="{{ old('slug', $getCategoryEdit->slug) }}" />
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="email" id="title" class="form-control" name="title" placeholder="Title"
            value="{{ old('title', $getCategoryEdit->title) }}" />
        {{-- <textarea name="title" id="" cols="30" rows="10"></textarea> --}}
    </div>
</div>
