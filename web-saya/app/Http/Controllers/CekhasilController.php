<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CekhasilModel;

class CekhasilController extends Controller
{
    public function __construct()
    {
        $this->CekhasilModel = new CekhasilModel();
    }


    public function index()
    {
        $data = [
            'cekhasil' => $this->CekhasilModel->allData(),
        ];
            return view ('layouts.cekhasil', $data);
    }

    protected $date = ['created_at'];
    
    public function delete($id)
    {
        //hapus atau delete foto
        $cekhasil= $this->CekhasilModel->deleteData($id);
        if ($cekhasil->file_ktp <> "") {
            unlink(public_path('foto_ktp') . '/' . $cekhasil->file_ktp);
        }

        $cekhasil= $this->CekhasilModel->deleteData($id);
        if ($cekhasil->file_kk <> "") {
            unlink(public_path('foto_kk') . '/' . $cekhasil->file_kk);
        }

        $cekhasil= $this->CekhasilModel->deleteData($id);
        if ($cekhasil->file_ktm <> "") {
            unlink(public_path('foto_ktm') . '/' . $cekhasil->file_ktm);
        }

        $cekhasil= $this->CekhasilModel->deleteData($id);
        if ($cekhasil->file_skd <> "") {
            unlink(public_path('foto_skd') . '/' . $cekhasil->file_skd);
        }

        $this->CekhasilModel->deleteData($id);
        return redirect()->route('cekhasil')->with('pesan', 'Data berhasil di hapus !!');
    }

}