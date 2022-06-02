@extends('template.header')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Basic DataTables
                        <small>Universal Admin panel</small>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">Tables</li>
                        <li class="breadcrumb-item">Data Tables</li>
                        <li class="breadcrumb-item active">Basic Init</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!--Zero Configuration  Starts -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah Mentor
                           </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-1" class="display">
                                <thead>
                                <tr>
                                    <th>Kode Jurusan</th>
                                    <th>Nama Jurusan</th>
                                    <th >Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ($jur as $data)
                                        <tr>
                                            <td>{{ $data->kode_jur }}</td>
                                            <td>{{ $data->nama_jur }}</td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalUpdate">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalDelete">
                                                    Hapus
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin-tambah-jurusan" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Kode Jurusan</label>
                            <div class="form-group">
                                <input type="text" name="kode" placeholder="Kode Coursee"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Nama Jurusan</label>
                            <div class="form-group">
                                <input type="text" name="nama" placeholder="Nama Course"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary ml-1" value="Tambah">
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection