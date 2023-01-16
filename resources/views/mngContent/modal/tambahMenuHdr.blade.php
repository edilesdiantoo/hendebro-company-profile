<div class="row">
    <div class="col mb-3">
        <label for="hdr_name" class="form-label">Nama Menu Hdr</label>
        <input type="text" name="hdr_name" id="hdr_name" class="form-control @error('hdr_name') is-invalid @enderror"
            placeholder="Nama Menu Header" />
        @error('hdr_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="username" class="form-label">Title</label>
        <input type="text" id="title" class="form-control" placeholder="Title" />
    </div>
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
