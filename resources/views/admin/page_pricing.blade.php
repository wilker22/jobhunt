@extends('admin.layout.app')

@section('heading', 'Planos - Configurações')

@section('main_content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_pricing_page_update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group mb-3">
                                <label>Heading *</label>
                                <input type="text" class="form-control" name="heading"
                                    value="{{ $page_pricing_data->heading }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Title *</label>
                                <input type="text" class="form-control" name="title"
                                    value="{{ $page_pricing_data->title }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Meta Description *</label>
                                <textarea name="meta_description" class="form-control h_100" cols="30" rows="10">
                                    {{ $page_pricing_data->meta_description }}
                                </textarea>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
