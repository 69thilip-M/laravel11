@extends('layouts.layout')
@section('main')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg">

                    <div class="card-header">
                        <h1 class="text-align-center">Laravel 11 CURD</h1>

                        <a href={{ url('/students/create') }} class="btn btn-primary float-end align-center"><i
                                class="bi bi-person-plus-fill"></i> Add Students</a>
                    </div>


                    <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>AddressOne</th>
                                    <th>AddressTwo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-secondary">
                                @foreach ($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->addressone }}</td>
                                        <td>{{ $item->addresstwo }}</td>
                                        <td>
                                            <a href={{ url('/students/' . $item->id) }} class="btn btn-info"
                                                title="View Student"><i class="bi bi-eye"></i> View</a>
                                            <a href={{ url('/students/' . $item->id . '/edit') }} class="btn btn-warning"
                                                title="Edit Student"><i class="bi bi-pencil-square"></i> Edit</a>

                                            <form method="POST" action={{ url('/students' . '/' . $item->id) }}
                                                accept-charset="UTF-8"  style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger" title="Delete Student"
                                                    onclick="return confirm('Are you sure ?')"><i class="bi bi-trash3"></i>
                                                    Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
