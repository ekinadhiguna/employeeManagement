@extends('layouts.master')
@section('konten')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Company</h2>
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
                                <a href="{{ route('company.create') }}" class="btn btn-success">Add Data</a>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Company Name</th>
                                                <th scope="col">Company Address</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($companies as $company)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $company->name }}</td>
                                                    <td>{{ $company->address }}</td>
                                                    <td>
                                                        <a href="{{ route('company.show', $company->id) }}"
                                                            class="btn btn-warning">View</a>
                                                        <a href="{{ route('company.edit', $company->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <form action="{{ route('company.destroy', $company->id) }}"
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
