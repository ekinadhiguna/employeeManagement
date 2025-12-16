@extends('layouts.master')
@section('konten')
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Position Details</h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-stretch d-flex justify-content-center">
                <div class="col-lg-10" data-aos="fade-left" data-aos-delay="300">
                    <div class="contact-sidebar">
                        <div class="contact-header mb-1 text-center">
                            <p>Position Name</p>
                            <h3>{{ $position->name }}</h3>
                        </div>
                        <div class="contact-header mb-1 text-center">
                            <p>Description</p>
                            <h3>{{ $position->description }}</h3>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="me-3 text-center">
                                <label class="form-label mb-0">Create At</label>
                                <h5 class="mb-0">{{ $position->created_at }}</h5>
                            </div>
                            <div class="text-center">
                                <label class="form-label mb-0">Update At</label>
                                <h5 class="mb-0">{{ $position->updated_at }}</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="/position" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
