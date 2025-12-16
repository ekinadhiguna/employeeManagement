@extends('layouts.master')
@section('konten')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Edit Position</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="200">
                    <div class="contact-form-container">
                        <form action="{{ route('position.update', $position->id) }}" method="post"
                            class="contact-form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-field mb-3">
                                        <input type="text" name="name" class="form-input" id="name"
                                            placeholder="Departement name" required value="{{ $position->name }}">
                                        <label for="name" class="field-label">Position Name</label>
                                    </div>

                                    <div class="form-field mb-3">
                                        <input type="text" name="description" class="form-input" id="description"
                                            placeholder="Position" required value="{{ $position->description }}">
                                        <label for="description" class="field-label">Position Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <a href="/position" class="btn send-button btn-danger"> Back </a>
                                <button type="submit" class=" btn send-button"> Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
