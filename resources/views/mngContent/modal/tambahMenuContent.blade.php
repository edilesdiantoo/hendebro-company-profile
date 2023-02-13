<div class="row">
    <div class="col mb-3">
        <label for="hdr_name" class="form-label">Nama Menu Content</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            placeholder="Nama Menu Header" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="category" class="form-label">Category Menu</label>
        <select class="form-select" id="category_menu_id" name="category_menu_id">
            <option value="">Pilih</option>
            @foreach ($getCategoryMenu as $key => $categoryMenu)
                <option value="{{ $categoryMenu->id }}">{{ $categoryMenu->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="username" class="form-label">Keterangan</label>
        <input type="text" id="keterangan" class="form-control" placeholder="keterangan" />
    </div>
</div>
