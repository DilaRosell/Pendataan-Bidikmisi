<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CekhasilModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_daftar')->get();
    }


    public function deleteData($id)
    {
        return DB::table('tbl_daftar')
                ->where('id', $id)
                ->delete();
    }
}