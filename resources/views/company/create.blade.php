@extends('layouts.master')
@section('konten')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Add Company</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="200">
                    <div class="contact-form-container">

                        <form action="{{ route('company.store') }}" method="post" class="contact-form"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-field mb-6">
                                        <input type="text" name="name" class="form-input" id="name"
                                            placeholder="Company Name" required>
                                        <label for="name" class="field-label">Company Name</label>
                                    </div>

                                    <div class="form-field mb-3">
                                        <input type="text" name="address" class="form-input" id="address"
                                            placeholder="Company Address" required>
                                        <label for="address" class="field-label">Company Address</label>
                                    </div>

                                    <div class="py-2">
                                        <label for="logo" class="form-label">Company Logo</label>
                                        <input type="file" class="form-control" id="logo" name="logo" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 text-center">
                                <a href="/company" class="btn send-button btn-danger"> Back </a>
                                <button type="submit" class=" btn send-button"> Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
