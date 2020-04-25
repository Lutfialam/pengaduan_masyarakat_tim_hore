@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>tambah data</h3>
    @endsection
    @section('content')

        @foreach($pengaduan as $pengadu)
        <form action=" {{ route('pengaduan.update', $pengadu->id) }} " method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
            <div class="form-group">
                <label for="judul_pengaduan">Judul pengaduan</label>
                <input type="tetx" class="form-control" name="judul" id="judul_pengaduan" value=" {{ $pengadu->judul }} ">
            </div>

            <div class="form-group">
                <label for="pengaduan">Tulis pengaduan disini</label>
                <textarea name="isi_pengaduan" class="form-control" id="pengaduan" rows="3" value=" {{ $pengadu->isi_pengaduan }} "></textarea>
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

            
            <button type="submit" class="btn btn-primary mt-5">Edit data</button>

        </form>
        @endforeach

    @endsection('content')