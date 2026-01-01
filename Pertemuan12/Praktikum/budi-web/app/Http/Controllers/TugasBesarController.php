<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Anak;

class TugasBesarController extends Controller
{
    // 12.2.1 Insert data menggunakan Raw SQL Queries
    public function insertRaw()
    {
        $ok = DB::insert(
            "INSERT INTO anaks (nama, usia, alamat, cerita, foto, status, created_at, updated_at)
             VALUES (?, ?, ?, ?, ?, ?, NOW(), NOW())",
            [
                'Contoh Anak (RAW)',
                10,
                'Brebes, Jawa Tengah',
                'Data ini diinsert menggunakan Raw SQL Queries.',
                null,
                'aktif'
            ]
        );

        return response()->json(['method' => 'raw', 'success' => (bool) $ok]);
    }

    // 12.2.2 Insert data menggunakan Query Builder
    public function insertBuilder()
    {
        $ok = DB::table('anaks')->insert([
            'nama' => 'Contoh Anak (BUILDER)',
            'usia' => 11,
            'alamat' => 'Brebes, Jawa Tengah',
            'cerita' => 'Data ini diinsert menggunakan Query Builder.',
            'foto' => null,
            'status' => 'aktif',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['method' => 'builder', 'success' => (bool) $ok]);
    }

    // 12.2.3 Insert data menggunakan Eloquent ORM
    public function insertEloquent()
    {
        $anak = Anak::create([
            'nama' => 'Contoh Anak (ELOQUENT)',
            'usia' => 12,
            'alamat' => 'Brebes, Jawa Tengah',
            'cerita' => 'Data ini diinsert menggunakan Eloquent ORM.',
            'foto' => null,
            'status' => 'aktif',
        ]);

        return response()->json(['method' => 'eloquent', 'id' => $anak->id]);
    }
}
