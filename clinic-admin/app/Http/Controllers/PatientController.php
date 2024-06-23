<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function create()
    {
        return view('patientscreate');
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data pasien ke database
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'id_number' => 'required|string|max:16',
            'date_of_birth' => 'required|date',
            'symptoms' => 'required|string|max:255',
        ]);

        // Logika penyimpanan data ke database
        // Contoh: Patient::create($validated);

        return redirect()->route('queue')->with('success', 'Patient added successfully');
    }
}
