@extends('layout')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>profile</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <head>
        <!------ Include the above in your HEAD tag ---------->
        </body>
        <div class="container" style="padding-top: 60px;">
            <h1>Edit Profile</h1>
            <div class="row">


                <!-- edit form column -->
                <div class="col-md-8 col-sm-6 col-xs-12 personal-info">

                    <h3>Personal info</h3><br>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">First name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Last name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">National id:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="" type="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Employee id:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="" type="number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Mobile no:</label>
                            <div class="col-lg-8">
                                <input class="form-control" value="" type="number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Username:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Confirm password:</label>
                            <div class="col-md-8">
                                <input class="form-control" value="" type="password">
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
        </div>
        </body>
</html>
@endsection
