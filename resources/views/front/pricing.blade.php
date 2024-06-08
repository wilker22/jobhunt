@extends('front.layout.app')


@section('main_content')

<div class="page-top" style="background-image: url({{ asset('uploads/banner.jpg') }})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Pacotes</h2>
            </div>
        </div>
    </div>
</div>


<div class="page-content pricing">
    <div class="container">
        <div class="row pricing">
            @foreach ($packages as $item )

            <div class="col-lg-4 mb_30">
                <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                        <h2 class="card-title">{{$item->package_name}}</h2>
                        <h3 class="card-price">R${{$item->package_price}}</h3>
                        <h4 class="card-day">({{$item->package_display_time}})</h4>
                        <hr />
                        <ul class="fa-ul">
                            <li>
                                <span class="fa-li">
                                    <i class="fas fa-check"></i>
                                </span>
                                @if($item->total_allowed_jobs == -1)
                                    Ilimitado
                                @else
                                    {{ $item->total_allowed_jobs}}
                                @endif
                                
                                Job Post Allowed
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-times"></i></span>
                                @if($item->total_allowed_featured_jobs == -1)
                                    Ilimitado
                                @else
                                    {{ $item->total_allowed_featured_jobs}}
                                @endif
                                 Featured Job
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-times"></i></span>{{$item->total_allowed_photos}} Company Photos
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-times"></i></span>{{$item->total_allowed_videos}} Company Videos
                            </li>
                        </ul>
                        <div class="buy">
                            <a href="" class="btn btn-primary">
                                Escolha seu Plano
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>
@endsection