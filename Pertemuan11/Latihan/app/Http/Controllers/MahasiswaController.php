<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // INSERT DATA
    public function insert()
    {
        DB::table('mahasiswas')->insert([
            'nim' => '2311104075',
            'nama' => 'Ganes Gemi Putra',
            'tempat_lahir' => 'Brebes',
            'tanggal_lahir' => '2004-01-01',
            'fakultas' => 'Informatika',
            'jurusan' => 'RPL',
            'ipk' => 5
        ]);

        return "Data berhasil ditambahkan";
    }

    // SELECT DATA
    public function select()
    {
        $data = DB::table('mahasiswas')->get();
        return response()->json($data);
    }

    // DELETE DATA
    public function delete($id)
    {
        DB::table('mahasiswas')
            ->where('id', $id)
            ->delete();

        return "Data dengan ID $id berhasil dihapus";
    }
}
