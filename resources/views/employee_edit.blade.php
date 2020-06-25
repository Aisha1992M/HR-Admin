@extends('admin/layouts/base')
@section('title', 'Employee Edit')
@section('data-page-id', 'EmployeeEditID')
@section('data-page-class', 'hold-transition sidebar-mini sidebar-collapse')
@section('data-page-name', 'Employee Edit Page')
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
                                <h3 class="card-title">Edit Employee</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="POST" action="{{ route('Employee_Edit_POST') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="attach">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" name="f_name" class="form-control
                                               @error('f_name') is-invalid @enderror"
                                               value="{{ $emp->f_name }}">

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
                                        <input type="text" name="l_name" class="form-control
                                               @error('l_name') is-invalid @enderror"
                                               value="{{ $emp->l_name }}">

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
                                        <input type="email" name="email" class="form-control
                                               @error('email') is-invalid @enderror"
                                               value="{{ $emp->email }}">

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
                                        <input type="password" name="password" class="form-control
                                               @error('password') is-invalid @enderror"
                                               value="">

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
                                        <input type="text" name="mobile" class="form-control
                                               @error('mobile') is-invalid @enderror"
                                               value="{{ $emp->mobile }}">

                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input type="text" name="national_id" class="form-control
                                               @error('national_id') is-invalid @enderror"
                                               value="{{ $emp->national_id }}">

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
                                        <input type="text" name="fingerprint" class="form-control
                                               @error('fingerprint') is-invalid @enderror"
                                               value="{{ $emp->fingerprint }}">

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
                                        <input type="text" name="status" class="form-control
                                               @error('status') is-invalid @enderror"
                                               value="{{ $emp->status }}">

                                        @error('status')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                       value="male" {{ $emp->gender==="male" ? "checked" : "" }}>
                                                <label class="form-check-label">male</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                       value="female" {{ $emp->gender==="female" ? "checked" : "" }}>
                                                <label class="form-check-label">female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="update"
                                            class="btn btn-primary float-right">{{ __('Save Changed') }}</button>
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
