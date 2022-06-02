@extends('template.header')
@section('content')
<div class="page-body">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    </h3>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item">Detail Mentor</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Detail Mentor</h5>
                    </div>
                    <div class="card-body">
                        <form action="/admin-simpan-mentor" method="POST">
                            @csrfx
                            <div class="tab">
                                <div class="form-group">
                                    <label for="name">NIK</label>
                                    <input type="text" class="form-control" readonly name="kode" value="{{ $body->nim_nik_unit }}">
                                </div>
                                <div class="form-group">
                                    <label for="lname">Username</label>
                                    <input type="text" class="form-control" name="username" readonly value="{{ $body->username }}">
                                </div>
                                <div class="form-group">
                                    <label for="lname">Email</label>
                                    <input type="text" class="form-control" name="email" readonly value="{{ $body->email }}">
                                </div>
                                
                            </div>
                            <div class="text-right btn-mb">
                                <input type="submit" class="btn btn-primary"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->

</div>
{{-- <form action="/tambah_mentor" method="POST">
    @csrf
    <div class="row">
        <label>NIK</label>
        <div class="form-group">
            <input type="text" name="kode" readonly value=" {{ $body->nim_nik_unit }} "
                class="form-control">
        </div>
            <label>Username </label>
            <div class="form-group">
                <input type="text" name="username" readonly value="{{ $body->username }}" 
                    class="form-control">
            </div>
            <label>Email</label>
            <div class="form-group">
                <input type="text" name="email" readonly value=" {{ $body->email }}"
                    class="form-control">
            </div>
    </div>
   
    <hr>
    <div class="d-flex justify-content-center">
        <input type="submit" class="btn-primary btn form-control" name="" id="">


    </div>

    </div>
</form> --}}
@endsection