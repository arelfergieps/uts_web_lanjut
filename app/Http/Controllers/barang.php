<?php

namespace App\Http\Controllers;

use App\Models\barangs;
use Illuminate\Http\Request;

class barang extends Controller
{
    public function daftarBarang()
    {
        $data = [
            'barang' => barangs::all()
        ];
        return view('uts.index', $data);
    }
    public function reviewBarang($id)
    {
        $reviewBarang = barangs::Find($id);
        return view('uts.detail', compact('reviewBarang'));
    }
}
