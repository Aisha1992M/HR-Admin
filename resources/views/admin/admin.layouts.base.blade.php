@extends('layout')
@section('title', 'Employee')
@section('data-page-id', 'EmployeeID')
@section('data-page-class', 'hold-transition sidebar-mini sidebar-collapse')
@section('data-page-name', 'Employee Page')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employee</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Employee</h3>
                                <button class="btn btn-just-icon btn-round btn btn-info" style="float: right"
                                        onclick="window.location='{{ url("employee/add") }}'">
                                    <i class="material-icons">add</i>
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="emptbl" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>F_Name</th>
                                        <th>L_Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>National</th>
                                        <th>Gender</th>
                                        <th>Fingerprint</th>
                                        <th>status</th>
                                        <th>image</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($emp as $em)
                                        <tr>
                                            <td>{{$em->f_name}}</td>
                                            <td>{{$em->l_name}}</td>
                                            <td>{{$em->email}}</td>
                                            <td>{{$em->mobile}}</td>
                                            <td>{{$em->national_id }}</td>
                                            <td>{{$em->gender}}</td>
                                            <td>{{$em->fingerprint}}</td>
                                            <td>{{$em->status}}</td>
                                            <td><img src="../uploads/user/{{$em->attachment}}" alt="..."
                                                     style="width: 50px; ">
                                            </td>
                                            <td class="text-right">
                                                <a href="/employee/edit/{{$em->id}}"  class="btn btn-warning btn-just-icon edit"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="/employee/delete/{{$em->id}}" class="btn btn-danger btn-just-icon remove"><i
                                                        class="fa fa-remove"></i></a>
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
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
