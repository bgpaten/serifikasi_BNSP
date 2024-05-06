{{-- Halaman untuk menampilkan history peminjaman barang --}}
@extends('master.app')
@section('breadcumb')
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Informasi</h1>
            <a href="{{ url('/') }}" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">History</a>
        </div>
    </div>
@endsection
@section('konten')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-md-12">
                            <h1>Pendaftaran Berhasil, silahkan tunggu informasi selanjutnya yang akan kami informasikan
                                melalui whatsapp</h1>
                            <div class="mt-3">
                                <a href="{{ url('/') }}" class="btn btn-primary py-2 px-4 ms-3">>Back Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
