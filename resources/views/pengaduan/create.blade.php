@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>tambah data</h3>
    @endsection
    @section('content')

        <form action=" {{ route('pengaduan.store') }} " method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="judul_pengaduan">Judul pengaduan</label>
                <input type="text" class="form-control" name="url" id="judul_pengaduan" placeholder="Contoh : Tanah longsor di daerah pancoran mas">
                <small id="emailHelp" class="form-text text-muted">Judul harus sama dengan apa yang ingin anda adukan!</small>
            </div>

            <div class="form-group">
                <label for="pengaduan">Tulis pengaduan disini</label>
                <textarea name="isi_pengaduan" class="form-control" id="pengaduan" rows="3"></textarea>
            </div>
            <div class="section-title">Category</div>
            <div class="form-group">
                <select class="form-control select2" name="category_id">
                    <option value="" disabled selected>-- pilih category --</option>
                    @foreach($category as $categor)
                        <option value=" {{ $categor->id }} "> {{ $categor->name }} </option>
                    @endforeach

                </select>
            </div>
            <div class="section-title">Gambar</div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="gambar">
                <label class="custom-file-label" for="customFile">pilih gambar</label>
            </div>

            
            <button type="submit" class="btn btn-primary mt-5">Tambah data</button>

        </form>

    @endsection('content')