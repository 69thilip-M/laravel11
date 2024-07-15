@extends('layouts.layout')
@section('main')
    <div class="container py-5 ">
        <div class="card shadow-lg">
            <div class="card-header bg-info">
                Edit Student Details
                <a href={{ url('/students') }} class="btn btn-dark float-end">Back</a>
            </div>
            <div class="card-body bg-light">
                <form action={{ url('/students/' . $student->id) }} method="POST">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="id" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $student->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $student->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ $student->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            value="{{ $student->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="addressone" class="form-label">AddressOne</label>
                        <input type="text" class="form-control" id="addressone" name="addressone"
                            value="{{ $student->addressone }}">
                    </div>
                    <div class="mb-3">
                        <label for="addresstwo" class="form-label">Addresstwo</label>
                        <input type="text" class="form-control" id="addresstwo" name="addresstwo"
                            value="{{ $student->addresstwo }}">
                    </div>
                    <div class="mb-3"><input class="btn btn-primary btn-lg" type="submit" value="update"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
