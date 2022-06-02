@extends('user.template.header')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Edit Profile
                        <small>Universal Admin panel</small>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/edit-password">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="password">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Confirmation Password</label>
                                    <input type="password" class="form-control" name="password_confirmation">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="card" method="post" action="/update-profile">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{ Auth::guard('user')->user()->email }}">
                                        @error('email')
                                    {{ $message }}
                                    @enderror
                                    </div>
                                </div><div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" value="{{ Auth::guard('user')->user()->username }}">
                                        @error('username')
                                    {{ $message }}
                                    @enderror
                                    </div>
                                </div><div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Goal</label>
                                        <select name="goal" class="form-control">
                                            @foreach ($goal as $data)
                                            <option value="{{ $data->id_goals }}">{{ $data->nama }}
                                            </option>
                                             @endforeach   
                                    </select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection