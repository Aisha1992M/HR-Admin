
@extends('layout')
@section('content')

<head>
<style>
 h3 {
     color: #ffff;
    font-size: 20px }
p{
    color: #ffff; }
</style>
</head>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Total Employees</p>
              </div>
              <div class="icon">
                <i class="ion-ios-people"></i>
              </div>
      
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>On Time</p>
              </div>
              <div class="icon">
                <i class="ion-android-checkmark-circle"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Late</p>
              </div>
              <div class="icon">
                <i class="ion-clock"></i>
              </div>
        
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Absents</p>
              </div>
              <div class="icon">
                <i class="ion-alert-circled"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>

        
       
    </section>
    @endsection