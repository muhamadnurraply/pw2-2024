<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function show(Pasien $pasien)
    {
        // Pass the Pasien instance to the view
        return view('pasien.show', compact('pasien'));
    }
    /**
     * Store a newly created resource in storage.
     */
}
{
  // Validate the incoming request data
  $request->validate([
    'kode' => 'required|string',
    'nama' => 'required|string',
    'tmp_lahir' => 'required|string',
    'tgl_lahir' => 'required|date',
    'gender' => 'required|string',
    'email' => 'required|string',
    'alamat' => 'required|string',
]);

// Create a new Pasien instance with the validated data
Pasien::create([
    'kode' => $request->kode,
    'nama' => $request->nama,
    'tmp_lahir' => $request->tmp_lahir,
    'tgl_lahir' => $request->tgl_lahir,
    'gender' => $request->gender,
    'email' => $request->email,
    'alamat' => $request->alamat,
]);

// Redirect to the index page with a success message
return redirect()->route('pasiens.index')->with('success', 'Pasien created successfully.');
}
