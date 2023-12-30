@extends('admin.layout.app')

@section('heading', 'FAQ - Cadastrar ')

@section('main_content')

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_faq') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Listar</a>
    </div>
@endsection

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_faq_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                                <div class="form-group mb-3">
                                    <label>Pergunta *</label>
                                    <textarea name="question" id="" class="form-control h_100" cols="30" rows="10"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Resposta *</label>
                                    <textarea name="answer" class="form-control editor" cols="30" rows="10" ></textarea>
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
