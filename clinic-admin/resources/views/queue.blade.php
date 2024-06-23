@extends('layouts.navbar')

@section('content')
<div class="container mt-5 pt-4">
    <h1>Patients Queue</h1>
    <ul class="nav nav-tabs mt-4">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#in-progress">In Progress</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#completed">Completed</a>
        </li>
    </ul>
    <div class="tab-content mt-4">
        <div id="in-progress" class="tab-pane active">
            <table class="table table-borderless" style="border: 2px solid #dc3545; border-radius: 10px;">
                <thead>
                    <tr style="border-bottom: 2px solid #dc3545;">
                        <th>ID</th>
                        <th>Patient</th>
                        <th>Symptoms</th>
                        <th>Wait time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                    <tr>
                        <td style="color: #dc3545;">{{ $patient['id'] }}</td>
                        <td>{{ $patient['name'] }}</td>
                        <td style="color: #dc3545;">{{ $patient['symptoms'] }}</td>
                        <td style="color: #dc3545;">{{ $patient['wait_time'] }}</td>
                        <td><a href="{{ route('queueupdate', ['id' => $patient['id']]) }}" style="color: #dc3545;">Update</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="completed" class="tab-pane fade">
            <p>No completed patients.</p>
        </div>
    </div>
</div>
@endsection
