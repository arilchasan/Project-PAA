<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function formCheck(Request $request)
    {

        $name = $request->input('name');
        $gender = $request->input('gender');
        $usia = $request->input(key: 'usia');
        $semester = $request->input('semester');

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-Laki,Perempuan',
            'usia' => 'required|integer',
            'semester' => 'required|integer',
        ]);

        $success = "";
        $error = "";
        if ($usia < 17 ) {
            $error = "Usia anda belum memenuhi syarat untuk menjadi calon anggota.";
        } else if ($semester > 1) {
            $error = "Semester anda sudah melewati batas untuk menjadi calon anggota.";
        } else {
            $success = "Selamat, anda berhasil mendaftar sebagai calon anggota.";
        }


        return redirect()->back()->with('error', $error)->with('success', $success);
    }
}
