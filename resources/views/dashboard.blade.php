@extends('master.tamplate')
@section('navigasi')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
        </ol>
    </nav>
@endsection
@section('konten')
    <div class="table-responsive text-nowrap">
        <div class="mb-3 mt-3 float-start ">
            <a href="{{ route('daftar.dash') }}"><button class="btn btn-primary" type="submit">Daftar Peserta Baru <i class="bx bx-plus"></i></button></a>
        </div>
        <div class="navbar-nav align-items-center float-end mb-4">
            <form action="{{ route('dashboard') }}" method="get">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input name="search" type="text" class="form-control border-0 shadow-none" placeholder="Masukkan NISN"
                        aria-label="Search..." />
                    <div class="mb-3 mt-3 ">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIK</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Asal Sekolah</th>
                    <th>Telepon</th>
                    <th>Tanggal Mendaftar</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $item)
                    <div class="modal fade" id="{{ 'id' . $item->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="{{ 'id' . $item->id }}">Data {{ $item->nama_depan }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-4">
                                        <p>
                                        <ul>
                                            <li> NIK : {{ $item->NIK }}</li>
                                            <li> NISN: {{ $item->NISN }}</li>
                                            <li> Nama Depan : {{ $item->nama_depan }}</li>
                                            <li>Nama Belakang : {{ $item->nama_belakang }}</li>
                                            <li>Tempat Lahir : {{ $item->tempat_lahir }}</li>
                                            <li>Asal sekolah : {{ $item->asal_sekolah }}</li>
                                            <li>Telepon : {{ $item->telepon }}</li>
                                            <li>Tanggal Mendaftar : {{ $item->created_at }}</li>
                                            <li>Alamat : {{ $item->alamat }}</li>
                                        </ul>
                                        </p>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <tr>
                        <td> <strong>{{ $no++ }}</strong></td>
                        <td>{{ $item->NIK }}</td>
                        <td>{{ $item->NISN }}</td>
                        <td>{{ $item->nama_depan }}</td>
                        <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                        <td>{{ $item->asal_sekolah }}</td>
                        <td>{{ $item->telepon }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('daftar.edit', $item->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <button class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="{{ '#id' . $item->id }}"><i
                                            class="bx bx-pencil me-1"></i>Detail</button>
                                    <form action="{{ route('daftar.destroy', $item->id) }}" method="GET">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="dropdown-item"
                                            onclick="return confirm('Are you sure??')"><i class="bx bx-trash me-1"></i>
                                            Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
