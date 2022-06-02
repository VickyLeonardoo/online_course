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
                        <li class="breadcrumb-item">Menu</li>
                        <li class="breadcrumb-item active">Daftar Course</li>
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
                        <h5>Zero Configuration</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-1" class="display">
                                <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ($course as $data)
                                        <tr>
                                            <td>{{ $data->kode }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>
                                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $data->id_course }}">
                                           Tambah Materi
                                            </button>
                                            <a href="/mentor-daftar-materi-course-{{ $data->id_course }}" class="btn btn-info">
                                                Daftar Materi
                                                 </a>
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
</div>

@foreach ($course as $data)
<div class="modal fade" id="exampleModal{{ $data->id_course }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-l">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="/mentor-tambah-materi-{{ $data->id_course }}" method="POST">
              @csrf
                      <div class="form-group">
                          <input type="hidden" name="id_course" placeholder="Kode Coursee"
                              class="form-control" value="{{ $data->id_course }}">
                      </div>
                      <label>Judul Materi</label>
                      <div class="form-group">
                          <input type="text" name="judul" placeholder="Nama Course"
                              class="form-control">
                      </div>
                      <label>Link Materi</label>
                      <div class="form-group">
                          <input type="text" name="link" placeholder="Link Materi Course"
                              class="form-control">
                      </div>
                      <label>Keterangan</label>
                      <div class="form-group">
                          <input type="text" name="keterangan" placeholder="Keterangan"
                              class="form-control">
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
@endforeach
@endsection