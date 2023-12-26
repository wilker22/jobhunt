@extends('admin.layout.app')

@section('heading', 'Why Choose - Editar')

@section('main_content')

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_why_choose_item') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Listar</a>
    </div>
@endsection

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_why_choose_item_update', $why_choose_item_single->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group mb-3">
                                <label>Ícone Preview</label>
                                <div>
                                    <i class="{{ $why_choose_item_single->icon }}"></i>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label>Ícone *</label>
                                <input type="text" class="form-control" name="icon"
                                    value="{{ $why_choose_item_single->icon }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Heading *</label>
                                <input type="text" class="form-control" name="heading"
                                    value="{{ $why_choose_item_single->heading }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Descrição *</label>
                               <textarea name="text" class="form-control h_100" cols="30" rows="10">{{ $why_choose_item_single->text }} </textarea>
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
