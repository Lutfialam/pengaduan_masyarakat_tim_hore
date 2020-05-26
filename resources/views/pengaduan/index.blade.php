@extends('dashboard_layout.Home')
    @section('content-header')
        <h3>Pengaduan</h3>
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
            <div class="section-title">Pengaduan terbaru</div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>category</th>
                        <th>tanggal</th>
                        <th>Judul aduan</th>
                        <th>status</th>
                        <th>Gambar</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduan as $pengadua => $pengadu)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td> {{ $pengadu->users['name'] }} </td>
                        <td> {{ $pengadu->category['name'] }} </td>
                        <td> {{ $pengadu->created_at }} </td>
                        <td> {{ $pengadu->judul }} </td>
                        <td> {{ $pengadu->status }} </td>
                        <td><img class="img-thumbnail" src="{{ asset($pengadu->gambar) }}" width="100"></td>
                        <td>
                            <form action=" {{ route('pengaduan.destroy', $pengadu->id) }} " method="post">
                                @csrf 
                                @method('delete')
                                <div class="row">

                                    <div class="col-md-4">
                                        <a href=" {{ url('Detail-pengaduan', $pengadu->url) }} " class="btn btn-info" data-toggle="tooltip" data-original-title="Detail"> <i class="icon-profile"></i> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href=" {{ url('response-pengaduan', $pengadu->id) }} " class="btn  btn-success" data-toggle="tooltip" data-original-title="response"> <i class="icon-redo2"></i> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn  btn-danger buttons" data-toggle="tooltip" data-original-title="Delete"> <i class="icon-cross"></i> </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-md-12">

                <div class="row mt-2">
                    <div class="col-md-10">
                        {{ $pengaduan->links() }}
                    </div>
                    <div class="col-md-2">
                        <a href=" {{ route('pengaduan.create') }}  " class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="section-title">Pengaduan dalam proses</div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>tanggal</th>
                        <th>Judul aduan</th>
                        <th>status</th>
                        <th>Gambar</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduan_primary as $pengaduap => $pengadup)
                    <tr>
                        <th scope="row">{{ $pengaduap + $pengaduan_primary->firstitem() }}</th>
                        <td> {{ $pengadup->users->name }} </td>
                        <td> {{ $pengadup->created_at }} </td>
                        <td> {{ $pengadup->judul }} </td>
                        <td> {{ $pengadup->status }} </td>
                        <td><img class="img-thumbnail" src="{{ asset($pengadup->gambar) }}" width="100"></td>
                        <td>
                            <div class="row">
                                <form action=" {{ url('end-response', $pengadup->id) }} " method="post">
                                    @csrf
                                    <div class="col-md-4">
                                        <a href=" {{ url('Detail-pengaduan', $pengadup->url) }} " class="btn btn-info" data-toggle="tooltip" data-original-title="Detail"> <i class="icon-profile"></i> </a>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn  btn-success buttons" data-toggle="tooltip" data-original-title="Tandai selesai"> <i class="icon-checkmark2"></i> </button>
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
                {{ $pengaduan->links() }}
                </div>
            </div>
                        
        </div>


        <div class="row">
            <div class="section-title">Pengaduan yang sudah selesai</div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>tanggal</th>
                        <th>Judul aduan</th>
                        <th>status</th>
                        <th>Gambar</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduan_selesai as $pengadus => $pengads)
                    <tr>
                        <th scope="row">{{ $pengadus + $pengaduan_selesai->firstitem() }}</th>
                        <td> {{ $pengads->users->name }} </td>
                        <td> {{ $pengads->created_at }} </td>
                        <td> {{ $pengads->judul }} </td>
                        <td> {{ $pengads->status }} </td>
                        <td><img class="img-thumbnail" src="{{ asset($pengads->gambar) }}" width="100"></td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href=" {{ url('Detail-pengaduan', $pengads->url) }} " class="btn btn-info" data-toggle="tooltip" data-original-title="Detail"> <i class="icon-profile"></i> </a>
                                </div>
                                <div class="col-md-4">
                                    <form action=" {{ route('pengaduan.destroy', $pengads->id) }} " method="post">
                                        @csrf 
                                        @method('delete')
                                        <button type="submit" class="btn  btn-danger buttons" data-toggle="tooltip" data-original-title="Delete"> <i class="icon-cross"></i> </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-2">
                <div class="col-md-10">
                {{ $pengaduan->links() }}
                </div>
            </div>
        </div>


    @endsection('content')