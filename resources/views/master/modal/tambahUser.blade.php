<div class="row">
    <div class="col mb-3">
        <label for="namaLenkap" class="form-label">Nama</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            placeholder="Nama Lengkap" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" />
    </div>
</div>
<div class="row">
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
