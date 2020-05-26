@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>Welcome</h3>
    @endsection
    @section('content')

    @if(Session::has('success'))
        <script>
            $('.success', function() {
                swal('', " {{ Session('success') }} ", 'success', {
                    buttons: false,
                    timer: 3000,
                });
            });
        </script>
        <div class="success"></div>
    @endif
          
        <div class="row">
            <div class="col-md-6">
                <img src=" {{ asset('assets/img/undraw_note_list_etto.svg') }} " width="400">
            </div>
            <div class="col-md-6">
                <h1>Welcome!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eius cupiditate nulla voluptatibus, a eveniet in animi earum illum ad. Alias reprehenderit, cupiditate animi voluptates veniam dolorum odio sunt inventore?</p>
                <p>buat aduan mu sekarang!</p>
                <a href=" {{ route('pengaduan.create') }} " class="btn btn-primary">Buat aduan</a>
            </div> 
        </div>
        

    @endsection('content')