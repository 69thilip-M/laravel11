@extends('layouts.layout')
@section('main')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>View Student Details</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Name : {{ $student->name }}</h5>
                        <p class="card-text">Address : {{ $student->email }}</p>
                        <p class="card-text">Phone : {{ $student->phone }}</p>
                        <p class="card-text">AddressOne : {{ $student->addressone }}</p>
                        <p class="card-text">AddressTwo : {{ $student->addresstwo }}</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
