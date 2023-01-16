<div class="row">
    <div class="col mb-3">
        <label for="namaLenkap" class="form-label">Nama nma</label>
        <input type="hidden" name="id" id="id" value="{{ $getUserEdit->id }}">
        <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap"
            value="{{ old('name', $getUserEdit->name) }}" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username"
            value="{{ old('name', $getUserEdit->username) }}" />
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="username" class="form-label">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Username"
            value="{{ old('name', $getUserEdit->email) }}" />
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
                <option value="{{ $level->id }}" {{ $level->id == $getUserEdit->is_admin ? 'selected' : '' }}>
                    {{ $level->level_name }}</option>
            @endforeach
        </select>
    </div>
</div>
