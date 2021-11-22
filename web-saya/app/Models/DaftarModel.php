<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DaftarModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_daftar')->get();
    }

    public function addData($data)
    {
        return DB::table('tbl_daftar')->insert($data);
    }
}
