@extends('home.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Data Penduduk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/redirect') }}">Home</a></li>
                            <li class="breadcrumb-item active">AddPenduduk</li>
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
                                <div class="card-header">Tambah Penduduk</div>

                                <div class="card-body">
                                    <form method="POST" action="/penduduk">
                                        @csrf

                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" name="nik"
                                                value="{{ old('nik') }}" autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama"
                                                value="{{ old('nama') }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control " name="tempat_lahir"
                                                value="{{ old('tempat_lahir') }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir"
                                                value="{{ old('tgl_lahir') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="jenkel">Jenis Kelamin </label>
                                            <select class="form-control" name="jenkel" required>
                                                <option value="">--Pilih--</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="jenkel">Agama </label>
                                            <select class="form-control" name="agama" value="{{ old('agama') }}">
                                                required>
                                                <option value="">--Pilih--</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Katholik">Katholik</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" class="form-control" name="status_kawin"
                                                value="{{ old('status_kawin') }}">
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
