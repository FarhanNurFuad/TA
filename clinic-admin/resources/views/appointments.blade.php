@extends('layouts.navbar')

@section('content')
<div class="container mt-5 pt-4">
    <h1>Patients Appointment</h1>
    <table class="table table-borderless mt-4" style="border: 2px solid #dc3545; border-radius: 10px;">
        <thead>
            <tr style="border-bottom: 2px solid #dc3545;">
                <th>ID</th>
                <th>Name</th>
                <th>Last Visit</th>
                <th>Schedule</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
            <tr>
                <td style="color: #dc3545;">{{ $appointment['id'] }}</td>
                <td>{{ $appointment['name'] }}</td>
                <td style="color: #dc3545;">{{ $appointment['last_visit'] }}</td>
                <td style="color: #dc3545; font-weight: bold;">{{ $appointment['schedule'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection