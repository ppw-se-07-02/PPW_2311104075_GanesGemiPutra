<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnguidedController extends Controller
{
    public function index()
    {
        return view('unguided.controller-page', [
            'title' => 'Halaman dari Controller (Unguided Modul 11)',
            'desc'  => 'Route memanggil Controller, lalu Controller mengembalikan View (Blade).'
        ]);
    }
}
