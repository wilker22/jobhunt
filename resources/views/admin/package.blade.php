@extends('admin.layout.app')

@section('heading', 'Pacotes')

@section('main_content')

@section('button')
<div class="ml-auto">
    <a href="{{ route('admin_package_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Novo</a>
</div>
@endsection

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <!--<th>Pergunta</th>-->
                                    <th>Nome</th>
                                    <th>Preços</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->package_name }}</td>
                                    <td>{{ $item->package_price }}</td>
                                    <!-- <td>{{ $item->answer }}</td>-->
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_package_edit', $item->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="{{ route('admin_package_delete', $item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Tem certeza?');">Remover</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection