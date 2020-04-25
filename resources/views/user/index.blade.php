@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>My Account</h3>
    @endsection
    @section('content')
          
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src=" {{ asset('assets/img/avatar/avatar-1.png') }} " class="img-thumbnail rounded-circle" width="400">
                            </div>
                            <div class="col-md-8 mt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>
                                            Nama : {{ Auth::user()->name }}
                                        </h3>
                                    </div>
                                    <div class="col-md-12">
                                        <h3>
                                            E-mail : {{ Auth::user()->email }}
                                        </h3>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="badge badge-primary"> {{ Auth::user()->level }} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection('content')