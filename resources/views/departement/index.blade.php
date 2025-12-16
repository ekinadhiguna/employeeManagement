@extends('layouts.master')
@section('konten')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Departement</h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-stretch d-flex justify-content-center">
                <div class="container py-3">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="card mt-3">
                                <a href="{{ route('departement.create') }}" class="btn btn-success">Add Data</a>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Departement Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($departements as $departement)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $departement->name }}</td>
                                                    <td>{{ $departement->status == 1 ? 'Active' : 'Nonactive' }}</td>
                                                    <td>
                                                        <a href="{{ route('departement.show', $departement->id) }}"
                                                            class="btn btn-warning">View</a>
                                                        <a href="{{ route('departement.edit', $departement->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <form action="{{ route('departement.destroy', $departement->id) }}"
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
