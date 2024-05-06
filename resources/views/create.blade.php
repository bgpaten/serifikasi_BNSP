@extends('master.tamplate')
@section('navigasi')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data </li>
        </ol>
    </nav>
@endsection
@section('button')
    <div class="mb-3 mt-3 ">
        <a href="{{ route('dashboard') }}"><button class="btn btn-warning"><i
                    class="fa-solid fa-arrow-left me-2"></i>Back</button></a>
    </div>
@endsection
@section('konten')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <small class="text-danger">(*) Wajib di isi.</small>
                <form action="{{ route('dash.store') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">NIK <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-10 col-md-4">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="fa-solid fa-shield"></i></span>
                                <input type="text" name="NIK" value="{{ old('NIK') }}"
                                    class="form-control @error('NIK') is-invalid @enderror" id="basic-icon-default-fullname"
                                    placeholder="Masukkan NIK " aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2">
                            </div>
                            @error('NIK')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">NISN
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-10 col-md-4">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="fa-solid fa-box"></i></span>
                                <input type="text" name="NISN" value="{{ old('NISN') }}"
                                    class="form-control @error('NISN') is-invalid @enderror"
                                    id="basic-icon-default-fullname" placeholder="Masukkan NISN " aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2">
                            </div>
                            @error('NISN')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Nama Depan <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-10 col-md-4">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="fa-solid fa-shield"></i></span>
                                <input type="text" name="nama_depan" value="{{ old('nama_depan') }}"
                                    class="form-control @error('nama_depan') is-invalid @enderror"
                                    id="basic-icon-default-fullname" placeholder="Masukkan nama_depan Buku"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                            </div>
                            @error('nama_depan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Nama Belakang
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-10 col-md-4">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="fa-solid fa-box"></i></span>
                                <input type="text" name="nama_belakang" value="{{ old('nama_belakang') }}"
                                    class="form-control @error('nama_belakang') is-invalid @enderror"
                                    id="basic-icon-default-fullname" placeholder="Masukkan nama_belakang Buku"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                            </div>
                            @error('nama_belakang')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Tempat Lahir <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-10 col-md-4">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="fa-solid fa-book"></i></span>
                                <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                    id="basic-icon-default-fullname" placeholder="Masukkan Nama Buku"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                            </div>
                            @error('tempat_lahir')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Tanggal Lahir
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-10 col-md-4">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="fa-solid fa-dollar"></i></span>
                                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    id="basic-icon-default-fullname" placeholder="Masukkan tanggal_lahir buku"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                            </div>
                            @error('tanggal_lahir')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Asal Sekolah
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-10 col-md-4">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="fa-solid fa-database"></i></span>
                                <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah') }}"
                                    class="form-control @error('asal_sekolah') is-invalid @enderror"
                                    id="basic-icon-default-fullname" placeholder="Masukkan asal_sekolah Buku"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                            </div>
                            @error('asal_sekolah')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Telepon <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-10 col-md-4">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="fa-solid fa-clipboard"></i></span>
                                <input type="text" name="telepon" value="{{ old('telepon') }}"
                                    class="form-control @error('telepon') is-invalid @enderror"
                                    id="basic-icon-default-fullname" placeholder="Masukkan telepon Buku"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                            </div>
                            @error('telepon')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-12">
                            <label class="col-sm-2 col-md-2 col-form-label" for="basic-icon-default-fullname">Alamat<span
                                    class="text-danger">*</span></label>
                            <textarea name="alamat" id="" cols="30" rows="10"
                                class="form-control @error('alamat') is-invalid @enderror"></textarea>
                            @error('alamat')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end col-md-12">
                        <div class="col-ms-10">
                            <button type="submit" class="btn btn-primary"><i
                                    class="fa-solid fa-paper-plane me-2"></i>Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
