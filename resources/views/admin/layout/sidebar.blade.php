<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home') ?  'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="rigth"
                    data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/home-page') . '||' . Request::is('admin/faq-page')  ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i>
                    <span>Configurações</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/home-page') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_page') }}"><i class="fas fa-angle-right"></i> Home</a>
                    </li>
                    <li class="{{ Request::is('admin/faq-page') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_faq_page') }}">
                            <i class="fas fa-angle-right"></i>
                            FAQ
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is('admin/job-category/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i>
                    <span>Empregos</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/job-category/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_job_category') }}"><i class="fas fa-angle-right"></i> Categorias</a>
                    </li>
                    <li class=""><a class="nav-link" href="{{ route('admin_job_location') }}"><i
                                class="fas fa-angle-right"></i> Localizações</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/why_choose/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_why_choose_item') }}" data-bs-toggle="tooltip" data-bs-placement="rigth"
                    data-bs-title="Why Choose items"><i class="fas fa-hand-point-right"></i>
                    <span>Why Choose Items</span></a>
            </li>

            <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_testimonial') }}" data-bs-toggle="tooltip" data-bs-placement="rigth"
                data-bs-title="Testimonial"><i class="fas fa-hand-point-right"></i>
                <span>Testimonials</span></a>
             </li>

             <li class="{{ Request::is('admin/post/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_post') }}" data-bs-toggle="tooltip" data-bs-placement="rigth"
                data-bs-title="Post"><i class="fas fa-hand-point-right"></i>
                <span>Posts</span></a>
             </li>

             <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_faq') }}" data-bs-toggle="tooltip" data-bs-placement="rigth"
                data-bs-title="Faq"><i class="fas fa-hand-point-right"></i>
                <span>FAQ</span></a>
             </li>



        </ul>
    </aside>
</div>
