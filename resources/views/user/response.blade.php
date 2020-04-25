@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>Pengaduan saya</h3>
    @endsection

    @section('content')
        
        <div class="row">
            @foreach($pengaduan as $pengadu)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>{{ $pengadu->judul }}</h2>
                            </div>
                            <div class="col-md-6">
                                <img src=" {{ $pengadu->gambar }} " class="img-thumbnail" width="300">
                            </div>
                            <div class="col-md-6">
                                <h5> {{ $pengadu->judul }} </h5>
                                <p> {{ $pengadu->isi_pengaduan }} </p>
                                <p> Status : <i> {{ $pengadu->status }} </i></p>
                                <p> {{ $pengadu->status }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-6">
                <h1>Terima kasih telah melaporkan aduanmu!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, officia aut iure officiis deleniti possimus veniam rerum quidem quae eaque minus cumque quaerat aliquid impedit enim facilis quos, omnis voluptates?</p>
            </div>
            <div class="col-md-6">

            </div>
        </div>

    @endsection('content')