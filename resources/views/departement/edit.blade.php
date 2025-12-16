@extends('layouts.master')
@section('konten')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Edit Departement</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="200">
                    <div class="contact-form-container">
                        <form action="{{ route('departement.update', $departement->id) }}" method="post"
                            class="contact-form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-field mb-3">
                                        <input type="text" name="name" class="form-input" id="name"
                                            placeholder="Departement name" required value="{{ $departement->name }}">
                                        <label for="name" class="field-label">Departement Name</label>
                                    </div>

                                    <div class="form-field mb-3">
                                        <select name="status" id="status" class="form-select" required>
                                            <option value=""> -- Select Status -- </option>
                                            <option value="1" {{ $departement->status == 1 ? 'selected' : '' }}>
                                                Active</option>
                                            <option value="0" {{ $departement->status == 0 ? 'selected' : '' }}>
                                                Nonactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <a href="/departement" class="btn send-button btn-danger"> Back </a>
                                <button type="submit" class=" btn send-button"> Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
