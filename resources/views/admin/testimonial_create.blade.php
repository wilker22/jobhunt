@extends('admin.layout.app')

@section('heading', 'Testimonial - Cadastrar ')

@section('main_content')

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_testimonial') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Listar</a>
    </div>
@endsection

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_testimonial_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                                <div class="form-group mb-3">
                                    <label>Photo *</label>
                                    <input type="file" value="" name="photo" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" name="name" >
                                </div>
                                <div class="form-group mb-3">
                                    <label>Designation *</label>
                                    <input type="text" class="form-control" name="designation" >
                                </div>
                                <div class="form-group mb-3">
                                    <label>Comment *</label>
                                    <textarea name="comment" class="form-control h_100" cols="30" rows="10" ></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
