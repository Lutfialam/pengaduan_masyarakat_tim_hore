@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>tambah data</h3>
    @endsection
    
    @section('content')
        @foreach($masyarakat as $msy)
            
            <form action=" {{ route('masyarakat.update', Auth::id()) }} " method="post">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $msy->name }}" placeholder="Masukkan Nama Lengkap">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" class="form-control @error('NIK') is-invalid @enderror" name="NIK" value="{{ $msy->NIK }}" placeholder="Masukkan NIK anda">

                            @error('NIK')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $msy->alamat }}" placeholder="Masukkan alamat Lengkap">

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>No telephone</label>
                            <input type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ $msy->telp }}" placeholder="Nomor telephone aktif">

                            @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly="">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Masukkan Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Edit data</button>
                    </div>
                </div>

            </form>

        @endforeach
    @endsection('content')