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

            <li class=""><a class="nav-link" href="setting.html" data-bs-toggle="tooltip" 
                data-bs-placement="rigth" data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i>
                    <span>Setting</span></a></li>

            <li class=""><a class="nav-link" href="form.html" data-bs-toggle="tooltip" 
                data-bs-placement="rigth" data-bs-title="Form"><i class="fas fa-hand-point-right"></i>
                    <span>Formulários</span></a></li>

            <li class=""><a class="nav-link" href="table.html" data-bs-toggle="tooltip" 
                data-bs-placement="rigth" data-bs-title="Table"><i class="fas fa-hand-point-right"></i>
                    <span>Tabelas</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html" data-bs-toggle="tooltip" 
                data-bs-placement="rigth" data-bs-title="Invoice"><i class="fas fa-hand-point-right"></i>
                    <span>Invoice</span></a></li>

        </ul>
    </aside>
</div>
