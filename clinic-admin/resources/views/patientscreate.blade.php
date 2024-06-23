@extends('layouts.navbar')

@section('content')
<div class="container mt-5 pt-4">
    <h1>Welcome to The Clinicare</h1>
    <p>Insert Data Patient</p>
    <h2>New Patient</h2>
    <form action="{{ route('patientsstore') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="full_name">Full name</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter name here" required>
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="dd/mm/yy" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id_number">ID Number</label>
                    <input type="text" class="form-control" id="id_number" name="id_number" placeholder="0000000000000000" required>
                </div>
                <div class="form-group">
                    <label for="symptoms">Symptoms</label>
                    <input type="text" class="form-control" id="symptoms" name="symptoms" placeholder="Enter your condition" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
