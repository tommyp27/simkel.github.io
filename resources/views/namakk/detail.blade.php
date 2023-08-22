@extends('home.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Data KK</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/redirect') }}">Home</a></li>
                            <li class="breadcrumb-item active">Detail Data KK</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="card">
                <div class="container-fluid">
                    <div class="row">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-2 p-3">

                                        <label for="" class="form-label">Nama KK :</label>
                                        {{ $kk->penduduk->nama }}
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nomor KK :</label>
                                            {{ $kk->penduduk->nik }}
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row p-3">


                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="penduduk_id">Nama Penduduk</label>
                                        <select class="form-control" name="penduduk_id" required>
                                            <option value="">--Pilih--</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Hubungan Keluarga</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Hubungan dengan kepala keluarga">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mt-4">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="/addanggota/{{ $kk->penduduk->nik }}"
                                                class="btn btn-primary">Tambah</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <h2 class="p-2">Anggota Keluarga</h2>

                <table class="table table-hover text-nowrap" id="myTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Hubungan Keluarga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Andin</td>
                            <td>anak</td>

                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>

        </section>



    </div>
@endsection
