@extends('layouts.master')
@section('konten')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Employee</h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-stretch">
                <div class="container py-3">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="card mt-3">
                                <a href="{{ route('employee.create') }}" class="btn btn-success">Add Data</a>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body d-flex justify-content-center">
                                    <table class="table text-center mx-auto" style="vertical-align: middle;">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">E-Mail</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($employees as $employee)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $employee->name }}</td>
                                                    <td><img src="{{ asset('uploads/foto/' . $employee->foto) }}"
                                                            class="img-thumbnail" alt="foto" width="150"
                                                            height="150"></td>
                                                    <td>{{ $employee->email }}</td>
                                                    <td>
                                                        <a href="{{ route('employee.show', $employee->id) }}"
                                                            class="btn btn-warning">View</a>
                                                        <a href="{{ route('employee.edit', $employee->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <form action="{{ route('employee.destroy', $employee->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('ary you sure?')">Delete</button>
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
            </div>
        </div>
    </section>

@endsection
