@extends('admin.layout.app')

@section('heading', 'Post - Editar')

@section('main_content')

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_post') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Listar</a>
    </div>
@endsection

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_post_update', $post_single->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group mb-3">
                                <label>Existing Photo *</label>
                                <img src="{{ asset('uploads/'.$post_single->photo) }}" alt="" class="w_150">
                            </div>
                            <div class="form-group mb-3">
                                <label>Chenge Photo *</label>
                                <input type="file" value="" name="photo" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label>Heading *</label>
                                <input type="text" class="form-control" name="heading" value="{{ $post_single->heading }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Slug *</label>
                                <input type="text" class="form-control" name="slug" value="{{ $post_single->slug }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Short Description *</label>
                                <textarea name="short_description" class="form-control h_100" cols="30" rows="10">
                                    {{ $post_single->short_description }}
                                </textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Description *</label>
                                <textarea name="description" class="form-control editor" cols="30" rows="10">
                                    {{ $post_single->description }}
                                </textarea>
                            </div>
                            <h5>SEO Section</h5>
                            <div class="form-group mb-3">
                                <label>Title *</label>
                                <input type="text" class="form-control" name="title" value="{{ $post_single->title }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Meta Description *</label>
                                <input type="text" class="form-control" name="meta_description" value="{{ $post_single->meta_description }}">
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
