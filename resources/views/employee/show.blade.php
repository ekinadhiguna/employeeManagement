@extends('layouts.master')
@section('konten')
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Details Employee</h2>
            <div class="contact-header">
                <img src="{{ asset('uploads/foto/' . $employee->foto) }}" class="img-thumbnail" alt="foto" width="150"
                    height="150">
                    {{-- <h3>Nama Saya adalah {{ $employee->name }} saya bekerja di {{ $company->name }} pada Departement {{ $departement->name }} dengan Posisi sebagai {{ $position->name }}</h3> --}}
            </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-stretch d-flex justify-content-center">
                <div class="col-lg-5 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="300">
                    <div class="contact-sidebar">
                        <div class="contact-header mb-1">
                            <p>Name</p>
                            <h3>{{ $employee->name }}</h3>
                        </div>
                        <div class="contact-header mb-1">
                            <p>Company Name</p>
                            <h3>{{ $company->name }}</h3>
                        </div>
                        <div class="contact-header mb-1">
                            <p>Departement Name</p>
                            <h3>{{ $departement->name }}</h3>
                        </div>
                        <div class="contact-header mb-1">
                            <p>Position Name</p>
                            <h3>{{ $position->name }}</h3>
                        </div>
                        <div class="contact-header mb-1">
                            <p>Birthdate</p>
                            <h3>{{ $employee->birthdate }}</h3>
                        </div>
                        <div class="contact-header mb-1">
                            <p>NIK</p>
                            <h3>{{ $employee->nik }}</h3>
                        </div>
                        <div class="card-body">
                            <a href="/employee" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="300">
                    <div class="contact-sidebar">

                        <div class="contact-header mb-1">
                            <p>E-Mail Address</p>
                            <h3>{{ $employee->email }}</h3>
                        </div>
                        <div class="contact-header mb-1">
                            <p>Phone</p>
                            <h3>{{ $employee->phone }}</h3>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">KTP</label>
                            <h5>{{ $employee->ktp ? 'Sudah Upload' : 'Belum Upload' }}</h5>
                            <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pdfktp">
                                Show
                            </button>
                            <div class="collapse mt-3" id="pdfktp">
                                @if ($employee->ktp)
                                    <iframe src="{{ asset('uploads/ktp/' . $employee->ktp) }}" width="100%"
                                        height="500px">
                                    </iframe>
                                @else
                                    <p class="mt-2">No file</p>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ijazah</label>
                            <h5>{{ $employee->ijazah ? 'Sudah Upload' : 'Belum Upload' }}</h5>
                            <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="collapse"
                                data-bs-target="#pdfIjazah">
                                Show
                            </button>
                            <div class="collapse mt-3" id="pdfIjazah">
                                @if ($employee->ijazah)
                                    <iframe src="{{ asset('uploads/ijazah/' . $employee->ijazah) }}" width="100%"
                                        height="500px">
                                    </iframe>
                                @else
                                    <p class="mt-2">No file</p>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
