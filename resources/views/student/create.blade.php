@extends('layouts.layout')
@section('main')
    <div class="container py-5 ">
        <div class="card shadow-lg">
            <div class="card-header bg-info">
                Create Students Details
                <a href={{ url('/students') }} class="btn btn-dark float-end">Back</a>
            </div>
            <div class="card-body bg-light">
                <form action={{ url('/students') }} method="POST">
                    {!! csrf_field() !!}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="addressone" class="form-label">AddressOne</label>
                        <input type="text" class="form-control" id="addressone" name="addressone">
                    </div>
                    <div class="mb-3">
                        <label for="addresstwo" class="form-label">Addresstwo</label>
                        <input type="text" class="form-control" id="addresstwo" name="addresstwo">
                    </div>
                    <div class="mb-3"><input class="btn btn-primary btn-lg" type="submit" value="save"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
