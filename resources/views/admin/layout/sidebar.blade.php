<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin_home')}}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin_home')}}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="{{route('admin_home')}}" 
                data-bs-toggle="tooltip" 
                data-bs-placement="rigth" data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>

            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i>
                    <span>Configurações de Páginas</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="{{ route('admin_home_page') }}"><i class="fas fa-angle-right"></i> Home</a>
                    </li>
                    <li class=""><a class="nav-link" href="{{ route('terms')}}"><i class="fas fa-angle-right"></i> Terms</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i>
                    <span>Vagas</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="{{ route('admin_job_category') }}"><i class="fas fa-angle-right"></i> Categorias</a>
                    </li>
                    <li class=""><a class="nav-link" href="{{ route('admin_job_location')}}"><i class="fas fa-angle-right"></i> Localizações</a>
                    </li>
                </ul>
            </li>

            {{-- <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" 
                data-bs-placement="rigth" data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i>
                    <span>Categorias de Vagas</span></a></li> --}}

           

        </ul>
    </aside>
</div>
