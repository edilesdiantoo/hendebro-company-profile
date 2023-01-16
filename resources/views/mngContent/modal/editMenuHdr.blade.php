<div class="row">
    <div class="col mb-3">
        <label for="namaLenkap" class="form-label">Nama Menu Hdr</label>
        <input type="hidden" name="id" id="id" value="{{ $getMenuhdrData->id }}">
        <input type="text" name="hdr_name" id="hdr_name" class="form-control" placeholder="Nama Lengkap"
            value="{{ old('name', $getMenuhdrData->hdr_name) }}" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="username" class="form-label">Title</label>
        <input type="text" id="title" class="form-control" placeholder="title"
            value="{{ old('name', $getMenuhdrData->title) }}" />
    </div>
</div>
{{-- <div class="row">
    <div class="col mb-3">
        <label for="username" class="form-label">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Username"
            value="{{ old('name', $getMenuhdrData->email) }}" />
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
                <option value="{{ $level->id }}" {{ $level->id == $getMenuhdrData->is_admin ? 'selected' : '' }}>
                    {{ $level->level_name }}</option>
            @endforeach
        </select>
    </div>
</div> --}}
