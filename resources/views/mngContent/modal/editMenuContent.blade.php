<div class="row">
    <div class="col mb-3">
        <label for="namaLenkap" class="form-label">Nama Menu Contents</label>
        <input type="hidden" name="id" id="id" value="{{ $getMenuContent->id }}">
        <input type="text" name="name" id="name" class="form-control" placeholder="Nama"
            value="{{ old('name', $getMenuContent->name) }}" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="password" class="form-label">Category Menu</label>
        <select class="form-select" id="category_menu_id" name="category_menu_id">
            <option value="">Pilih</option>
            @foreach ($getCategoryMenu as $key => $categoryMenu)
                <option value="{{ $categoryMenu->id }}"
                    {{ $categoryMenu->id == $getMenuContent->id ? 'selected' : '' }}>
                    {{ $categoryMenu->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="username" class="form-label">Keterangan</label>
        <input type="text" id="keterangan" class="form-control" placeholder="keterangan"
            value="{{ old('name', $getMenuContent->keterangan) }}" />
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
