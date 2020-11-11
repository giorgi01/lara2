@extends('layouts.main')


@section('content')
    <div class="card">
        <div class="card-header">
            <h4>All Product</h4>
        </div>
        <div class="card-body">


            <table class="table">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>License number</th>
                    <th>Weight</th>
                    <th>Registration year</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>

                <form action="{{ route('cars.create') }}" method="POST" >
                    @csrf
                    <tr>
                        <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Enter Car Name"></td>
                        <td><input class="form-control" type="text" step="any" name="make" placeholder="Enter Car Make"></td>
                        <td><input class="form-control" type="text" name="model_name" placeholder="Enter Car Model"></td>
                        <td><input class="form-control" type="number" name="license_number" placeholder="Enter license number"></td>
                        <td><input class="form-control" type="number" name="weight" placeholder="Enter car weight"></td>
                        <td><input class="form-control" type="number" name="registration_year" placeholder="Enter registration year"></td>
                        <td><button class="btn btn-success"type="submit">Add</button></td>
                        <td>#</td>
                    </tr>
                </form>

                @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->make }}</td>
                        <td>{{ $car->model_name }}</td>
                        <td>{{ $car->license_number}}</td>
                        <td>{{ $car->weight}}</td>
                        <td>{{ $car->registration_year}}</td>
                        <td>{{ $car->getCarAge()}}</td>
                        <td>


                            <a href="{{ route('cars.edit', ['id' => $car->id]) }}" class="btn btn-primary">Edit</a>

                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection
