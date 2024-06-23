@extends('layouts.navbar')

@section('content')
<div class="container mt-5 pt-4">
    <h1>Update Patient</h1>
    <form action="{{ route('queueupdate', ['id' => $patient['id']]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $patient['name'] }}">
        </div>
        <div class="form-group">
            <label for="symptoms">Symptoms</label>
            <input type="text" class="form-control" id="symptoms" name="symptoms" value="{{ $patient['symptoms'] }}">
        </div>
        <div class="form-group">
            <label for="wait_time">Wait time</label>
            <input type="text" class="form-control" id="wait_time" name="wait_time" value="{{ $patient['wait_time'] }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
