@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>Daftar user</h3>
    @endsection
    @section('content')

        @if(Session::has('done'))
            <script>
                $('.success', function() {
                    swal('', " {{ Session('success') }} ", 'success', {
                        buttons: false,
                        timer: 2000,
                    });
                });
            </script>
            <div class="success"></div>
        @endif
    
        <div class="row">
            <div class="section-title">Petugas</div>
            <table class="table table-hover" id="table-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No telephone</th>
                        <th>level</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($petugas as $petuga => $petu)
                    <tr>
                        <th scope="row">{{ $petuga + $petugas->firstitem() }}</th>
                        <td> {{ $petu->nama_petugas }} </td>
                        <td> {{ $petu->email }} </td>
                        <td> {{ $petu->telp }} </td>
                        <td> {{ $petu->level }} </td>
                        <td width="20%">
                            <div class="col-md-12">
                                <form action=" {{ route('petugas.destroy', $petu->id) }} " method="post">
                                    @csrf 
                                    @method('delete')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href=" {{ route('petugas.edit', $petu->id) }} " class="btn btn-warning"> edit </a>
                                        </div> 
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-danger buttons">delete</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-2">
                <div class="col-md-10">
                    {{ $petugas->links() }}
                </div>
                <div class="col-md-2">
                    <a href=" {{ route('petugas.create') }}  " class="btn btn-primary">Tambah Data</a>
                </div>
            </div>

        </div>
        
        <div class="row mt-3">
            <div class="section-title">Masyarakat</div>
            <table class="table table-hover" id="table-2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>No telephone</th>
                        <th>Alamat</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($masyarakat as $masya => $msy)
                    <tr>
                        <th scope="row">{{ $masya + $masyarakat->firstitem() }}</th>
                        <td> {{ $msy->name }} </td>
                        <td> {{ $msy->NIK }} </td>
                        <td> {{ $msy->telp }} </td>
                        <td> {{ $msy->alamat }} </td>
                        <td width="20%">
                            <div class="row">
                                <form action=" {{ route('masyarakat.destroy', $msy->id) }} " method="post">
                                    @csrf 
                                    @method('delete')
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-danger buttons">delete</button>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-2">
                <div class="col-md-10">
                {{ $masyarakat->links() }}
                </div>
                <div class="col-md-2">
                    <a href=" {{ route('masyarakat.create') }}  " class="btn btn-primary">Tambah Data</a>
                </div>
            </div>

        </div>

    @endsection('content')