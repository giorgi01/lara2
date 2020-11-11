@extends('layouts.main')


@section('content')
    <form action="{{ route('cars.update', ['id' => $car->id]) }}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3>Edit Car</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $car->name }}">
                </div>
                <div class="form-group">
                    <label for="name">Make</label>
                    <input type="text" class="form-control" name="make" id="make" value="{{ $car->make }}">
                </div>
                <div class="form-group">
                    <label for="name">Model</label>
                    <input type="text" class="form-control" name="model_name" id="model_name" value="{{ $car->model_name }}">
                </div>
                <div class="form-group">
                    <label for="name">License number</label>
                    <input type="number" class="form-control" name="license_number" id="license_number" value="{{ $car->license_number }}">
                </div>
                <div class="form-group">
                    <label for="name">Weight</label>
                    <input type="number" class="form-control" name="weight" id="weight" value="{{ $car->weight }}">
                </div>
                <div class="form-group">
                    <label for="name">Registration year</label>
                    <input type="number" class="form-control" name="registration_year" id="registration_year" value="{{ $car->registration_year }}">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>

@endsection
