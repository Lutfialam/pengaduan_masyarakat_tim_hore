@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>tambah data</h3>
    @endsection
    @section('content')

    <div class="row">
        <div class="col-md-6">
            <img src=" {{ asset($pengaduan->gambar) }} " alt="{{ $pengaduan->judul }}" class="img-thumbnail" width="400"> 
        </div>
        <div class="col-md-6">
            <form action=" {{ url('response', $pengaduan->id) }} " method="post">
            @csrf
                <div class="section-title">Tanggapan</div>
                <div class="form-group">
                    <label for="tanggapan">Tulis Tanggapan disini</label>
                    <textarea name="tanggapan" class="form-control" id="tanggapan" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">kirim tanggapan</button>

            </form>
        </div>
    </div>

    @endsection('content')