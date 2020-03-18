@include('dashboard_layout.Header')

    @include('dashboard_layout.Navbar')
    @include('dashboard_layout.Sidebar')

        @yield('content')

    @include('dashboard_layout.Footer-page')
    
@include('dashboard_layout.Footer')