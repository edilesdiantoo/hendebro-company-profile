<div class="row">
    <div class="col mb-3">
        <label for="hdr_name" class="form-label">Judul</label>
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
        <label for="hdr_name" class="form-label">Sub Judul</label>
        <input type="text" name="sub_judul" id="sub_judul"
            class="form-control @error('sub_judul') is-invalid @enderror" placeholder="Nama Sun Judul" />
        @error('sub_judul')
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
        <label for="hdr_name" class="form-label">Keteragan</label>
        <input type="text" name="keterangan" id="keterangan"
            class="form-control @error('keterangan') is-invalid @enderror" placeholder="Nama Sun Judul" />
        @error('keterangan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
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
