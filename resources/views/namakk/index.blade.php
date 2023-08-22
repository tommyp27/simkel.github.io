@extends('home.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Kartu Keluarga</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="{{ url('/redirect') }}">Home</a></li>
                            <li class="breadcrumb-item active">namakk</li>

                        </ol>
                    </div>

                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid ">
                <a href="{{ url('/addkk') }}" class="btn btn-info ">Add KK</a>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Kartu Keluarga</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Kartu Keluarga</th>
                                            <th>Nama Kepala Keluarga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($keluarga as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nomorkk }}</td>
                                                <td>{{ $item->penduduk->nama }}</td>

                                                <td>
                                                    <a href="{{ url('detail', $item->id) }}"
                                                        class="btn btn-primary">Detail</a>
                                                    <a href="" class="btn btn-warning">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
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
