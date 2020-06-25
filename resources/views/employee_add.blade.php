@extends('admin/layouts/base')
@section('title', 'Employee ADD')
@section('data-page-id', 'EmployeeAddID')
@section('data-page-class', 'hold-transition sidebar-mini sidebar-collapse')
@section('data-page-name', 'Employee ADD Page')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div style="height: 30px"></div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="card card-blog">
                            <div class="card-header">
                                <h3 class="card-title">Add Employee</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="POST" action="{{ route('Employee_Add_POST') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <!-- <label for="customFile">Custom File</label> -->
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="attach">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input id="f_name" type="text"
                                               class="form-control @error('f_name') is-invalid @enderror" name="f_name"
                                               value="{{ old('f_name') }}" required autocomplete="f_name"
                                               placeholder="First Name...">
                                        @error('f_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input id="l_name" type="text"
                                               class="form-control @error('l_name') is-invalid @enderror" name="l_name"
                                               value="{{ old('l_name') }}" required autocomplete="l_name"
                                               placeholder="last Name...">
                                        @error('l_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email"
                                               placeholder="Email...">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror" name="password"
                                               value="{{ old('password') }}" required autocomplete="password"
                                               placeholder="password...">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input id="mobile" type="text"
                                               class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                               value="{{ old('mobile') }}" required autocomplete="mobile"
                                               placeholder="mobile...">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input id="national_id" type="text"
                                               class="form-control @error('national_id') is-invalid @enderror" name="national_id"
                                               value="{{ old('national_id') }}" required autocomplete="national_id"
                                               placeholder="national_id...">
                                        @error('national_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input id="fingerprint" type="text"
                                               class="form-control @error('fingerprint') is-invalid @enderror" name="fingerprint"
                                               value="{{ old('fingerprint') }}" required autocomplete="fingerprint"
                                               placeholder="fingerprint...">
                                        @error('fingerprint')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-server"></i></span>
                                        </div>
                                        <input id="status" type="text"
                                               class="form-control @error('status') is-invalid @enderror" name="status"
                                               value="{{ old('status') }}" required autocomplete="fingerprint"
                                               placeholder="status...">
                                        @error('fingerprint')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" value="male" checked>
                                                <label class="form-check-label">male</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" value="female">
                                                <label class="form-check-label">female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="add" class="btn btn-primary float-right">{{ __('Create') }}</button>
                                    <a href="/employee" class="btn btn-default">{{ __('Cancel') }}</a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
