@include('dashboard_layout.header')
    @include('dashboard_layout.navbar')
        @include('dashboard_layout.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        @yield('content-header')
                    </div>

                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>
    
@include('dashboard_layout.footer')