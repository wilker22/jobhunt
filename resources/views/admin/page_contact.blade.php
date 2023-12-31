@extends('admin.layout.app')

@section('heading', 'Contato')

@section('main_content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_contact_page_update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group mb-3">
                                <label>Heading *</label>
                                <input type="text" class="form-control" name="heading"
                                    value="{{ $page_contact_data->heading }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Map Code *</label>
                                <textarea name="map_code" class="form-control h_100" cols="30" rows="10">
                                    {{ $page_contact_data->map_code }}
                                </textarea>
                            </div>
                            <h4>SEO Section</h4>
                            <div class="form-group mb-3">
                                <label>Title </label>
                                <input type="text" class="form-control" name="title"
                                    value="{{ $page_contact_data->title }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Meta Description </label>
                                <textarea name="meta_description" class="form-control h_100" cols="30" rows="10">
                                    {{ $page_contact_data->meta_description }}
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
