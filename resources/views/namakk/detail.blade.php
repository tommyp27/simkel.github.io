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
                                        <label for="" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Hubungan Keluarga</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
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

            </div>

        </section>



    </div>
@endsection
