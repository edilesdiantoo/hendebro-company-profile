<div class="row">
    <div class="col mb-3">
        <label for="hdr_name" class="form-label">Judul</label>
        <input type="hidden" name="id" id="id" value="{{ $getScode->id }}">
        <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror"
            placeholder="Nama Menu Header" value="{{ $getScode->judul }}" />
        @error('judul')
            <div class="invalid-feedback">{{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="hdr_name" class="form-label">Sub Judul</label>
        <input type="text" name="sub_judul" id="sub_judul"
            class="form-control @error('sub_judul') is-invalid @enderror" placeholder="Nama Sub Judul"
            value="{{ $getScode->sub_judul }}" />
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
            @foreach ($getCategoty as $key => $category)
                <option value="{{ $category->id }}" {{ $category->id == $getScode->category_id ? 'selected' : '' }}>
                    {{ $category->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="hdr_id" class="form-label">Header Menu</label>
        <select class="form-select" id="hdr_id" name="hdr_id">
            <option value="">Pilih</option>
            @foreach ($getMenuHdr as $key => $hdr)
                <option value="{{ $hdr->id }}" {{ $hdr->id == $getScode->hdr_id ? 'selected' : '' }}>
                    {{ $hdr->hdr_name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="hdr_name" class="form-label">Keteragan</label>
        <input type="text" name="keterangan" id="keterangan"
            class="form-control @error('keterangan') is-invalid @enderror" placeholder="Nama Sun Judul"
            value="{{ $getScode->keterangan }}" />
        @error('keterangan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="mb-3">
    <img class="img-preview img-fluid mb-3 col-sm-5">
    <input type="hidden" name="oldImage" value="{{ $getScode->image }}">
    @if ($getScode->image)
        <img src="{{ asset('storage/' . $getScode->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
    @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
    @endif
    <input class="form-control @error('image') is-invalid 
    
    @enderror" type="file" id="image"
        name="image" onchange="previewImage()">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
