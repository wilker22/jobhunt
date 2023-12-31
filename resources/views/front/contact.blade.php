@extends('front.layout.app')

@section('seo_title')
    {{ $contact_page_item->title }}
@endsection
@section('seo_meta_description')
    {{ $contact_page_item->meta_description }}
@endsection

@section('main_content')
    <div class="page-top" style="background-image: url('{{ asset('uploads/banner.jpg') }}')">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $contact_page_item->heading }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <form action="{{ route('contact_submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nome</label>
                                <input type="text" name="person_name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">E-mail</label>
                                <input type="email" name="person_email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mensagem</label>
                                <textarea class="form-control" name="person_message" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary bg-website">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="map">
                        {!! nl2br($contact_page_item->map_code) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
