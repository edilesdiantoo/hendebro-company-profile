<div class="row">
    <div class="col mb-3">
        <label for="hdr_name" class="form-label">Judul</label>
        <input type="hidden" name="hit" id="hit" value="1">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror"
            placeholder="Nama Menu Header" />
        @error('judul')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-select" id="category_id" name="category_id">
            <option value="">Pilih</option>
            @foreach ($get_category_data as $key => $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="hdr_id" class="form-label">Header Menu</label>
        <select class="form-select" id="menu_id" name="menu_id">
            <option value="">Pilih</option>
            @foreach ($get_hdr_data as $key => $hdr)
                <option value="{{ $hdr->id }}">{{ $hdr->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" />
    </div>
</div>
<div class="mb-3">
    <img class="img-preview img-fluid mb-3 col-sm-5">
    <input class="form-control @error('image') is-invalid 
    
    @enderror" type="file" id="image"
        name="image" onchange="previewImage()">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
{{-- <div class="row">
    <div class="col mb-3">
        <label for="username" class="form-label">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Username" />
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" />
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="password" class="form-label">Level User</label>
        <select class="form-select" id="is_admin" name="is_admin">
            <option value="">Pilih</option>
            @foreach ($getLevelUser as $key => $level)
                <option value="{{ $level->id }}">{{ $level->level_name }}</option>
            @endforeach
        </select>
    </div>
</div> --}}

{{-- <div class="row g-2">
    <div class="col mb-0">
        <label for="emailBasic" class="form-label">Email</label>
        <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx" />
    </div>
    <div class="col mb-0">
        <label for="dobBasic" class="form-label">DOB</label>
        <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY" />
    </div>
</div> --}}
