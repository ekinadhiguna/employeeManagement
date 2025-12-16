@extends('layouts.master')
@section('konten')

    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Add Departement</h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="200">
                    <div class="contact-form-container">
                        <form action="{{ route('departement.store') }}" method="post" class="contact-form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-field mb-3">
                                        <input type="text" name="name" class="form-input" id="name"
                                            placeholder="Departement name" required>
                                        <label for="name" class="field-label">Departement Name</label>
                                    </div>

                                    <div class="form-field mb-3">
                                        <select name="status" id="status" class="form-select" required>
                                            <option value=""> -- Select Status -- </option>
                                            <option value="1"> Active </option>
                                            <option value="0"> Nonactive </option>
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
