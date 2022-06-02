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
                        <h5>Daftar Materi</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-1" class="display">
                                <thead>
                                <tr>
                                    <th>Episode</th>
                                    <th>Judul Materi</th>
                                    <th>Link Materi</th>
                                    <th colspan="2" style="text-align: center">Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ($materi as $data)
                                    <?php 
                                    $i = 1;
                                    ?>
                                    <tr>
                                        <td>{{ $data->episode }}</td>
                                        <td>{{ $data->judul_materi }}</td>
                                        <td>{{ $data->link_materi }}</td>
                                        <td>
                                         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal{{ $data->id_materi_course }}">
                                       Edit
                                        </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModall{{ $data->id_materi_course }}">
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
</div>
@foreach ($materi as $data)
  <div class="modal fade" id="exampleModal{{ $data->id_materi_course }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Materi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/mentor-ubah-materi-{{ $data->id_materi_course }}" method="POST">
                @csrf
                        <label>Nama Materi</label>
                        <div class="form-group">
                            <input type="text" name="id_course" placeholder="Kode Coursee"
                                class="form-control" disabled value="{{ $data->nama }}">
                        </div>
                        <label>Judul Materi</label>
                        <div class="form-group">
                            <input type="text" name="judul" value="{{ $data->judul_materi }}"
                                class="form-control">
                        </div>
                        <label>Link Materi</label>
                        <div class="form-group">
                            <textarea type="text" name="link" 
                                class="form-control">{{ $data->link_materi }}</textarea>
                        </div>
                        <label>Keterangan</label>
                        <div class="form-group">
                            <textarea type="text" name="keterangan"
                                class="form-control" rows="4">{{ $data->keterangan }}</textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary ml-1" value="Ubah">
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @foreach ($materi as $data)
  <div class="modal fade" id="exampleModall{{ $data->id_materi_course }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-l">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Materi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/mentor-hapus-materi-{{ $data->id_materi_course }}" method="POST">
                @csrf
                Ingin Menghapus Materi?                     
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger ml-1" value="Hapus">
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection