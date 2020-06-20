@extends('layout')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
    <form method="get" action="/eprofile">
        <div class="row">

            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        {{ Auth::user()->f_name }} {{ Auth::user()->l_name }}
                    </h5>
                    <br><br>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div>
        </div>



        <div class="row">

            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First name:</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ Auth::user()->f_name }} </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Last name:</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ Auth::user()->l_name }}</p>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Mobile no:</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ Auth::user()->mobile }}</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection
