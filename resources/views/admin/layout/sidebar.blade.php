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

            <li class="nav-item dropdown {{ Request::is('admin/home-page') . '||' .
                    Request::is('admin/faq-page') .'||' .
                    Request::is('admin/term-page') .'||'.
                    Request::is('admin/contact-page') . '||' .
                    Request::is('admin/job-category-page') . '||' .
                    Request::is('admin/pricing-page') . '||' .
                    Request::is('admin/privacy-page') ? 'active' : '' }}">
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
                    <li class="{{ Request::is('admin/blog-page') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_blog_page') }}">
                            <i class="fas fa-angle-right"></i>
                            Blog
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/term-page') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_term_page') }}">
                            <i class="fas fa-angle-right"></i>
                            Terms
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/privacy-page') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_privacy_page') }}">
                            <i class="fas fa-angle-right"></i>
                            Política de Privacidade
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/contato-page') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_contact_page') }}">
                            <i class="fas fa-angle-right"></i>
                            Contato
                        </a>
                    </li>
                    
                    <li class="{{ Request::is('admin/job-category-page') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_job_category_page') }}">
                            <i class="fas fa-angle-right"></i>
                            Categorias das Vagas
                        </a>
                    </li>

                    <li class="{{ Request::is('admin/pricing-page') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_pricing_page') }}">
                            <i class="fas fa-angle-right"></i>
                            Planos
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

             <li class="{{ Request::is('admin/package/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_package') }}" data-bs-toggle="tooltip" data-bs-placement="rigth"
                data-bs-title="Package"><i class="fas fa-hand-point-right"></i>
                <span>Pacotes</span></a>
             </li>

             



        </ul>
    </aside>
</div>
