@extends('layouts.navbar')

@section('content')
<div class="container mt-5 pt-4">
    <h1>Good evening, <span class="text-primary">Admin</span></h1>
    <hr>

    <div class="row mt-4">
        <div class="col-12 mb-4">
            <h3>Today</h3>
            <div class="d-flex flex-row">
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Appointments</h4>
                    <p class="display-4">8</p>
                </div>
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Patients</h4>
                    <p class="display-4">4</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h3>Tomorrow</h3>
            <div class="d-flex flex-row">
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Appointments</h4>
                    <p class="display-4">12</p>
                </div>
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Patients</h4>
                    <p class="display-4">6</p>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="alert alert-light border mt-4 d-flex justify-content-between align-items-center" role="alert">
        <div>
        <h3>Alerts</h3>
            <i class="fas fa-exclamation-circle text-danger"></i> Rayyan has been added to your schedule
        </div>
        <button type="button" class="btn btn-light">Dismiss</button>
    </div>
</div>
@endsection