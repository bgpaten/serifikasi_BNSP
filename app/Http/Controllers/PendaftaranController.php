<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public $pendaftaran;
    public function __construct()
    {
        $this->pendaftaran = new Pendaftaran();
    }
    public function index()
    {
        $data = Pendaftaran::all();

        return view('daftar.index', compact('data', ));
    }

    public function dash(Request $request)
    {
        $cari = $request->input('search');
        $data = DB::table('pendaftaran')
            ->where('NISN', 'LIKE', "%$cari%")
            ->get();

        return view('dashboard', compact('data', 'cari'));
    }


    public function create()
    {
        return view('daftar.create');
    }

    public function createDash()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $rules = [
            'NIK' => 'required|unique:pendaftaran,NIK',
            'NISN' => 'required|unique:pendaftaran,NISN',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'asal_sekolah' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ];

        // Error message templates
        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'max' => ':attribute ukuran/jumlah tidak sesuai',
            'unique' => ':attribute sudah terdaftar',
        ];

        $this->validate($request, $rules, $messages);

        $this->pendaftaran->NIK = $request->NIK;
        $this->pendaftaran->NISN = $request->NISN;
        $this->pendaftaran->nama_depan = $request->nama_depan;
        $this->pendaftaran->nama_belakang = $request->nama_belakang;
        $this->pendaftaran->tempat_lahir = $request->tempat_lahir;
        $this->pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $this->pendaftaran->asal_sekolah = $request->asal_sekolah;
        $this->pendaftaran->telepon = $request->telepon;
        $this->pendaftaran->alamat = $request->alamat;


        $this->pendaftaran->save();

        Alert::success('Successfull', 'Pendaftaran Berhasil');
        return redirect()->route('daftar.index');
    }

    public function storeDash(Request $request)
    {
        $rules = [
            'NIK' => 'required|unique:pendaftaran,NIK',
            'NISN' => 'required|unique:pendaftaran,NISN',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'asal_sekolah' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ];

        // pesan error
        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'max' => ':attribute ukuran/jumlah tidak sesuai',
            'unique' => ':attribut sudah terdaftar'
        ];

        $this->validate($request, $rules, $messages);


        $this->pendaftaran->NIK = $request->NIK;
        $this->pendaftaran->NISN = $request->NISN;
        $this->pendaftaran->nama_depan = $request->nama_depan;
        $this->pendaftaran->nama_belakang = $request->nama_belakang;
        $this->pendaftaran->tempat_lahir = $request->tempat_lahir;
        $this->pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $this->pendaftaran->asal_sekolah = $request->asal_sekolah;
        $this->pendaftaran->telepon = $request->telepon;
        $this->pendaftaran->alamat = $request->alamat;


        $this->pendaftaran->save();

        Alert::success('Successfull', 'Pendaftaran Berhasil');
        return redirect()->route('dashboard');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Pendaftaran::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $update = Pendaftaran::findOrFail($id);

        $update->NIK = $request->NIK;
        $update->NISN = $request->NISN;
        $update->nama_depan = $request->nama_depan;
        $update->nama_belakang = $request->nama_belakang;
        $update->tempat_lahir = $request->tempat_lahir;
        $update->tanggal_lahir = $request->tanggal_lahir;
        $update->asal_sekolah = $request->asal_sekolah;
        $update->telepon = $request->telepon;
        $update->alamat = $request->alamat;

        if ($update->isDirty()) {
            $rules = [
                'NIK' => 'required|unique:pendaftaran,NIK',
                'NISN' => 'required|unique:pendaftaran,NISN',
                'nama_depan' => 'required',
                'nama_belakang' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'asal_sekolah' => 'required',
                'telepon' => 'required',
                'alamat' => 'required',
            ];

            // pesan error
            $messages = [
                'required' => ':attribute tidak boleh kosong',
                'max' => ':attribute ukuran/jumlah tidak sesuai',
                'unique' => ':attribut sudah terdaftar'
            ];

            $this->validate($request, $rules, $messages);

            $update->NIK = $request->NIK;
            $update->NISN = $request->NISN;
            $update->nama_depan = $request->nama_depan;
            $update->nama_belakang = $request->nama_belakang;
            $update->tempat_lahir = $request->tempat_lahir;
            $update->tanggal_lahir = $request->tanggal_lahir;
            $update->asal_sekolah = $request->asal_sekolah;
            $update->telepon = $request->telepon;
            $update->alamat = $request->alamat;

            $update->save();

            Alert::success('Success!', 'Data berhasil diupdate');
            return redirect()->route('dashboard');
        } else {
            Alert::info('Info!', 'Data yang diupdate tidak boleh sama dengan data sebelumnya');
            return redirect()->route('daftar.edit');
        }
    }

    public function destroy($id)
    {
        $daftar = Pendaftaran::findOrFail($id);
        $daftar->delete();

        Alert::success('Successfull', 'Data Berhasil di Hapus');
        // redirect
        return redirect()->route('dashboard');
    }
}
