<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index()
    {
        // Dummy data
        $patients = [
            [
                'id' => '#10001',
                'name' => 'Rayyan',
                'symptoms' => 'Fever',
                'wait_time' => 'On going',
            ],
            [
                'id' => '#10002',
                'name' => 'Farhan',
                'symptoms' => 'Dypnea',
                'wait_time' => '10 minutes',
            ],
            [
                'id' => '#10003',
                'name' => 'Frederick',
                'symptoms' => 'Stomache',
                'wait_time' => '15 minutes',
            ]
        ];

        return view('queue', compact('patients'));
    }

    public function update($id)
    {
        // Dummy data, in a real application you would fetch this from the database
        $patient = [
            'id' => $id,
            'name' => 'Patient Name',
            'symptoms' => 'Symptom',
            'wait_time' => 'Wait time'
        ];

        return view('queueupdate', compact('patient'));
    }
}
