@extends('layout')
@section('content')

    <!------ Include the above in your HEAD tag ---------->

    <div class="container" style="padding-top: 60px;">
        <h1>Edit Profile</h1>


        <!-- edit form column -->
        <div class="col-md-8 col-sm-6 col-xs-12 personal-info" id="editModel" >

            <h3>Personal info</h3><br>

            <form action="{{action('EditController@store')}}" class="form-horizontal" id="editForm" method="post">
                {{csrf_field()}}
                {{method_field('put')}}

                <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="f_name" id="f_name" value="{{ Auth::user()->f_name }}" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="l_name" id="l_name" value="{{ Auth::user()->l_name }}" type="text">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Mobile no:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="mobile" id="mobile" value="{{ Auth::user()->mobile }}" type="number">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                        <input class="form-control" name="password" id="password" value="{{ Auth::user()->password }}" type="password">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <a href="" class="btn btn-primary" type="submit" name="edit" >Save Changes</a>
                    </div>
                </div>



            </form>
        </div>
    </div>

@endsection
