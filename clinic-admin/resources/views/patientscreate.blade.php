@extends('layouts.navbar')

@section('content')
<div class="container mt-5">
        <h1>Welcome to The Clinicare</h1>
        <h2>Insert Data Patient</h2>
        <form action="{{ route('patientsstore') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="full_name">Full Name</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter name here">
                </div>
                <div class="form-group col-md-6">
                    <label for="id_number">ID Number</label>
                    <input type="text" class="form-control" id="id_number" name="id_number" placeholder="0000000000000000">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="dd/mm/yy">
                </div>
                <div class="form-group col-md-6">
                    <label for="symptoms">Symptoms</label>
                    <input type="text" class="form-control" id="symptoms" name="symptoms" placeholder="Enter your condition">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="poli">Poli</label>
                    <select class="form-control" id="poli" name="poli">
                            <option value="poli">Nama Poli</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="doctor">Doctor</label>
                    <select class="form-control" id="doctor" name="doctor">
                            <option value="doctor">Nama Dokter</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
