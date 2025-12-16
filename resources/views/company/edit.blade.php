@extends('layouts.master')
@section('konten')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Edit Company</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="200">
                    <div class="contact-form-container">
                        <form action="{{ route('company.update', $company->id) }}" method="post" class="contact-form"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-field mb-6">
                                        <input type="text" name="name" class="form-input" id="name"
                                            placeholder="Company Name" required value="{{ $company->name }}">
                                        <label for="name" class="field-label">Company Name</label>
                                    </div>

                                    <div class="form-field mb-3">
                                        <input type="text" name="address" class="form-input" id="address"
                                            placeholder="Company Address" required value="{{ $company->address }}">
                                        <label for="address" class="field-label">Company Address</label>
                                    </div>

                                    <div class="mb-3">
                                        <label for="logo" class="form-label">Company Logo</label>
                                        <div class="mb-2">
                                            <img src="{{ asset('uploads/logo/' . $company->logo) }}" class="img-thumbnail"
                                                alt="logo" width="150" height="150"">
                                        </div>
                                        <input type="file" class="form-control" id="logo" name="logo">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <a href="/company" class="btn send-button btn-danger"> Back </a>
                                <button type="submit" class=" btn send-button"> Update </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
