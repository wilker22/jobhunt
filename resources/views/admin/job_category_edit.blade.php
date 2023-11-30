@extends('admin.layout.app')

@section('heading', 'Vagas - Cadastrar Categoria')

@section('main_content')

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_job_category') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Listar Categorias</a>
    </div>
@endsection

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_job_category_update', $job_category_single->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                                <div class="form-group mb-3">
                                    <label>Nome *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $job_category_single->name }}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label>Ícone Preview</label>
                                    <div>
                                        <i class="{{ $job_category_single->icon }}"></i>
                                    </div>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label>Ícone *</label>
                                    <input type="text" class="form-control" name="icon" value="{{ $job_category_single->icon }}" >
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
