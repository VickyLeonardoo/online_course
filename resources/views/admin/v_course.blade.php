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
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Tambah Course</button>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-1" class="display">
                                <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Mentor</th>
                                    <th>Deskripsi</th>
                                    {{-- <th>Level</th> --}}
                                    {{-- <th>Sertifikat</th> --}}
                                    {{-- <th>Konsultasi</th> --}}
                                    {{-- <th>Tools</th> --}}
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($course as $data)
                                    <tr>
                                        <td>{{ $data->kode }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->username_mentor }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                        {{-- <td>{{ $data->level }}</td> --}}
                                        {{-- @if ($data->sertifikat == 1)
                                        <td>Ya</td>
                                        @else
                                        <td>Tidak</td>
                                        @endif
                                        @if ($data->konsultasi == 1)
                                        <td>Ya</td>
                                        @else
                                        <td>Tidak</td>
                                        @endif --}}
                                        {{-- <td>{{ $data->tools }}</td> --}}
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModals{{ $data->id_course }}">Edit</button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $data->id_course }}">
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Course</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/tambah_course" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <label>Kode Course </label>
                        <div class="form-group">
                            <input type="text" name="kode" placeholder="Kode Coursee"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Nama Course</label>
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Nama Course"
                                class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <label>Level</label>
                        <div class="form-group">
                            <select name="level" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Sertifikat</label>
                        <div class="form-group">
                            <select name="sertifikat" class="form-control" id="">
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-sm-6">
                        <label>Konsultasi</label>
                        <div class="form-group">
                            <select name="konsultasi" class="form-control" id="">
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Tools</label>
                        <div class="form-group">
                            <input type="text" name="tools" placeholder="Tools"
                                class="form-control">
                        </div>
                    </div>
                </div>    
                        <label>Mentor</label>
                        <div class="form-group">
                            <select name="mentor" id="" class="form-control">
                                @foreach ($mentor as $data)
                                <option value="{{ $data->id_mentor }}">{{ $data->username_mentor }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label>Deskripsi</label>
                        <div class="form-group">
                            <textarea type="textarea" name="deskripsi" placeholder="Deskripsi"
                                class="form-control" rows="3"></textarea>
                        </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <input type="submit" class="btn btn-primary ml-1" value="Tambah">
                    
                </div>
            </form>
        </div>
      </div>
    </div>
</div>

@foreach ($course as $data)
<div class="modal fade" id="exampleModals{{ $data->id_course }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Course</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/admin-edit-course-{{ $data->id_course }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <label>Kode Course </label>
                        <div class="form-group">
                            <input type="text" name="kode" placeholder="Kode Coursee"
                                class="form-control" value="{{ $data->kode }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Nama Course</label>
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Nama Course"
                                class="form-control" value="{{ $data->nama }}">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <label>Level</label>
                        <div class="form-group">
                            <select name="level" class="form-control">
                                <option value="{{ $data->level }}"selected="selected">{{ $data->level }}</option>
                                <option value="" disabled>--Pilih Level--</option>

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Sertifikat</label>
                        <div class="form-group">
                            <select name="sertifikat" class="form-control" id="">
                                <option value="{{ $data->sertifikat }}">
                                @if ($data->sertifikat == 1)
                                    Ya
                                @else
                                    Tidak
                                @endif
                                </option>
                                <option value="" disabled>--Pilih--</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-sm-6">
                        <label>Konsultasi</label>
                        <div class="form-group">
                            <select name="konsultasi" class="form-control" id="">
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Tools</label>
                        <div class="form-group">
                            <input type="text" name="tools" placeholder="Tools"
                                class="form-control" value="{{ $data->tools }}">
                        </div>
                    </div>
                </div>    
                <label>Deskripsi</label>
                <div class="form-group">
                    <textarea type="textarea" name="deskripsi" placeholder="Deskripsi"
                        class="form-control" rows="3">{{ $data->deskripsi }}</textarea>
                </div>
                        <label>Mentor</label>
                        <div class="form-group">
                            <select name="mentor" id="" class="form-control">
                                <option value="{{ $data->id_mentor }}">{{ $data->username_mentor }}</option>
                                <option value="" disabled>-Pilih Mentor-</option>
                                @foreach ($mentor as $data)
                                <option value="{{ $data->id_mentor }}">{{ $data->username_mentor }}</option>
                                @endforeach
                            </select>
                        </div>
                      
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                        data-bs-dismiss="modal">
                    </button>
                    <input type="submit" class="btn btn-primary ml-1" value="Update">
                    
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
@foreach ($course as $data)
  <div class="modal fade" id="deleteModal{{ $data->id_course }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Course {{ $data->nama }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/admin-hapus-course-{{ $data->id_course }}" method="POST">
              @csrf
              <span>Yakin Ingin Menghapus Course {{ $data->nama }}</span>
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