@extends('home.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data KK</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/redirect') }}">Home</a></li>
                            <li class="breadcrumb-item active">TAmbah Data KK</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <div class="card-header">Tambah Data KK</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ url('namakk') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label>Nomor KK</label>
                                            <input type="text" class="form-control" name="nomorkk"
                                                value="{{ old('nomorkk') }}" required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label for="penduduk_id">Nama Penduduk</label>
                                            <select class="form-control" name="penduduk_id" required>
                                                <option value="">--Pilih--</option>
                                                @foreach ($penduduk as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }} /
                                                        {{ $item->nik }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary">Simpan</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
    </div>

    </div>
    </section>

    </div>
@endsection
