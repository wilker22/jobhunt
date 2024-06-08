@extends('admin.layout.app')

@section('heading', 'Pacote - Cadastrar ')

@section('main_content')

@section('button')
<div class="ml-auto">
    <a href="{{ route('admin_package') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Listar</a>
</div>
@endsection

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_package_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Nome *</label>
                                        <input type="text" name="package_name" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Preço *</label>
                                        <input name="package_price" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Período *</label>
                                        <input type="text" name="package_days" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Tempo de Exibição *</label>
                                        <input name="package_display_time" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Total de Vagas *</label>
                                        <input type="text" name="total_allowed_jobs" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Total de Recursos de Vagas *</label>
                                        <input name="total_allowed_feature_jobs" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Total de Fotos *</label>
                                        <input type="text" name="total_allowed_photos" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Total de Vídeos *</label>
                                        <input name="total_allowed_videos" class="form-control">
                                    </div>
                                </div>
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