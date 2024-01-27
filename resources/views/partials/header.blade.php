<header class="main_menu {{ isset($breadcrumb) ? 'single_page_menu' : 'home_menu' }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="logo-container">
                        <a class="navbar-brand logo_1" href="{{ route('home') }}"> <img src="{{ asset('img/upm_logo_white.png') }}" alt="logo" style="max-height: 100px"> </a>
                        <a class="navbar-brand logo_2" href="{{ route('home') }}"> <img src="{{ asset('img/upm_logo.png') }}" alt="logo" style="max-height: 100px"> </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
                            </li>
                            @if($menuDisciplines->count())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Disciplines
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($menuDisciplines as $id=>$discipline)
                                            <a class="dropdown-item" href="{{ route('courses.index') }}?discipline={{ $id }}">{{ $discipline }}</a>
                                        @endforeach
                                    </div>
                                </li>
                            @endif
                            @if($menuInstitutions->count())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Institutions
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($menuInstitutions as $id=>$institution)
                                            <a class="dropdown-item" href="{{ route('courses.index') }}?institution={{ $id }}">{{ $institution }}</a>
                                        @endforeach
                                    </div>
                                </li>
                            @endif
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cart.myCart') }}">My Cart</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('enroll.myCourses') }}">My Courses</a>
                                </li>

                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Logout</a>
                                    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="btn_1 login-btn" href="{{ route('login') }}">Login</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>