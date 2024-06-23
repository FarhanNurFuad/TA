<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        // Dummy data
        $appointments = [
            [
                'id' => '#10001',
                'name' => 'Rayyan',
                'last_visit' => '07/01/2022',
                'schedule' => '16/06/2024'
            ],
            [
                'id' => '#10002',
                'name' => 'Farhan',
                'last_visit' => '06/15/2022',
                'schedule' => '16/06/2024'
            ]
        ];

        return view('appointments', compact('appointments'));
    }
}