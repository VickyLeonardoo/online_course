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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th >Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ($mentor as $data)
                                        <tr>
                                            <td>{{ $data->username_mentor }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $data->id_mentor}}">
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Mentor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/admin-tambah-mentor" method="POST">
                @csrf
                        <label>NIK: </label>
                        <div class="form-group">
                            <input type="text" name="nik" placeholder="Masukkan NIK Mentor"
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

  @foreach ($mentor as $data)
<div class="modal fade" id="deleteModal{{ $data->id_mentor }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Course {{ $data->username_mentor }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/admin-hapus-mentor-{{ $data->id_mentor }}" method="POST">
              @csrf
              <span>Yakin Ingin Menghapus Mentor {{ $data->username_mentor }}</span>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
    </form>
      </div>
    </div>
</div>
@endforeach

@endsection