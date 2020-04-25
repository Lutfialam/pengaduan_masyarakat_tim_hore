@extends('home_layouts.index')

    @section('content')

        @foreach($data as $pengaduan)
            <div class="container">
                <div class="row row-margin-up">
                    <div class="col-md-4">
                        <img class="img-thumbnail" src=" {{ asset($pengaduan->gambar) }} ">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <h4 class="pt-5">Pengirim : {{ $pengaduan->users->name }}</h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="">status pengaduan : {{ $pengaduan->status }}</h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="">waktu : {{ $pengaduan->created_at }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>{{ $pengaduan->judul }}</h1>
                            </div>
                            <div class="col-md-6">
                                <p> {{ $pengaduan->isi_pengaduan }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    @endsection('content')