@extends('layouts.master')
@section('konten')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Add Employee</h2>
        </div>

        <div class="container " data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-stretch d-flex justify-content-center">
                <div class="col-lg-7 order-lg-1 order-2" data-aos="fade-right" data-aos-delay="200">
                    <div class="contact-form-container">
                        <form action="{{ route('employee.store') }}" method="post" class="contact-form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="py-3">
                                    <label for="company_id" class="form-label">Select Company</label>
                                    <select name="company_id" id="company_id" class="form-select" required>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="py-3">
                                    <label for="departement_id" class="form-label">Select Departement</label>
                                    <select name="departement_id" id="departement_id" class="form-select" required>
                                        @foreach ($departements as $departemen)
                                            <option value="{{ $departemen->id }}">{{ $departemen->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="py-3">
                                    <label for="position_id" class="form-label">Select Position</label>
                                    <select name="position_id" id="position_id" class="form-select" required>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="name" class="form-input" id="name"
                                            placeholder="Your Name" required="">
                                        <label for="name" class="field-label">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="date" class="form-input" name="birthdate" id="birthdate"
                                            required="">
                                        <label for="birthdate" class="field-label">Birthdate</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="nik" class="form-input" name="nik" id="nik"
                                            placeholder="NIK" required="">
                                        <label for="nik" class="field-label">NIK</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="email" class="form-input" name="email" id="email"
                                            placeholder="Your Email" required="">
                                        <label for="email" class="field-label">E-mail</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row py-3">
                                <div class="col-md-3">
                                    <div class="form-field">
                                        <input type="tel" class="form-input" name="phone" id="userPhone"
                                            placeholder="Your Phone">
                                        <label for="userPhone" class="field-label">Phone</label>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <label for="foto" class="form-label">Photo</label>
                                    <input type="file" class="form-control" id="foto" name="foto" required>
                                </div>
                                <div class="py-2">
                                    <label for="ktp" class="form-label">KTP</label>
                                    <input type="file" class="form-control" id="ktp" name="ktp" required>
                                </div>
                                <div class="py-2">
                                    <label for="ijazah" class="form-label">Ijazah</label>
                                    <input type="file" class="form-control" id="ijazah" name="ijazah" required>
                                </div>
                            </div>

                            <a href="/employee" class="send-button">
                                Back
                            </a>
                            <button type="submit" class="send-button">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
