@extends('layout')
@section('content')

        <!------ Include the above in your HEAD tag ---------->

<div class="container" style="padding-top: 60px;">
            <h1>Edit Profile</h1>


                <!-- edit form column -->
                <div class="col-md-8 col-sm-6 col-xs-12 personal-info" >

                    <h3>Personal info</h3><br>

                    <form class="form-horizontal" method="post" role="form" style="dominant-baseline: central">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">First name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="Arwa" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Last name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="Bintaleb" type="text">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="a@r.com" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Mobile no:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="0501234567" type="number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Username:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="arwa12345" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="12345678" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Confirm password:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="12345678" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input class="btn btn-primary" value="Save Changes" type="button">
                                <span></span>
                                <input class="btn btn-default" value="Cancel" type="reset">
                            </div>
                        </div>
                    </form>
                </div>
</div>

@endsection
