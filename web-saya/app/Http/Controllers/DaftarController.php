<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarModel;

class DaftarController extends Controller
{
    public function __construct()
    {
        $this->DaftarModel = new DaftarModel();
    }

    public function index()
    {
            $data = [
                'daftar' => $this->DaftarModel->allData(),
            ];
                return view ('layouts.daftar', $data);
    }

    public function insert()
    {
        Request()->validate([
            'nama_mhs' => 'required',
            'nim' => 'required|unique:tbl_daftar,nim|max:11',
            'file_ktp' => 'required|mimes:jpg,jpeg,png|max:1024',
            'file_kk' => 'required|mimes:jpg,jpeg,png|max:1024',
            'file_ktm' => 'required|mimes:jpg,jpeg,png|max:1024',
            'file_skd' => 'required|mimes:jpg,jpeg,png|max:1024',
        ],[
            'nama_mhs.required' => 'Wajib diisi !!',
            'nim.required' => 'Wajib diisi !!',
            'nim.unique' => 'NIM ini sudah ada !!',
            'nim.max' => 'Max 11 karakter',
            'file_ktp.required' => 'Wajib diisi !!',
            'file_kk.required' => 'Wajib diisi !!',
            'file_ktm.required' => 'Wajib diisi !!',
            'file_skd.required' => 'Wajib diisi !!',
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload gambar/foto 
        $file = Request()->file_ktp;
        $fileName = Request()->nim . '.' . $file->extension();
        $file->move(public_path('foto_ktp'), $fileName);

        $file = Request()->file_kk;
        $fileName = Request()->nim . '.' . $file->extension();
        $file->move(public_path('foto_kk'), $fileName);

        $file = Request()->file_ktm;
        $fileName = Request()->nim . '.' . $file->extension();
        $file->move(public_path('foto_ktm'), $fileName);

        $file = Request()->file_skd;
        $fileName = Request()->nim . '.' . $file->extension();
        $file->move(public_path('foto_skd'), $fileName);

        $data = [
            'nama_mhs' => Request()->nama_mhs,
            'nim' => Request()->nim,
            'file_ktp' => $fileName,
            'file_kk' => $fileName,
            'file_ktm' => $fileName,
            'file_skd' => $fileName,
        ];

        $this->DaftarModel->addData($data);
        return redirect()->route('cekhasil')->with('pesan', 'Data berhasil tersimpan !!');
    }
}