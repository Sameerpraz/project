@extends('backend.master.master')

@section('content')

        <!DOCTYPE html>
<html lang="en">



<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>



<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <a style="margin: 19px;" href="{{ route('admin-users')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Products</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="clo-md-12">
                                <form action="{{route('add-product')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group form-group-sm">
                                        <lable for="proname">Product Name</lable>
                                        <input type="text" name="proname" id="name" class="form-control" value="{{old('name')}}"
                                               placeholder="Enter product">
                                        <a href="" style="color:red">{{$errors->first('name')}}</a>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <lable for="protitle">Product Title</lable>
                                        <input type="text" name="protitle" id="protitle" class="form-control" value="{{old('username')}}"
                                               placeholder="Enter Title of product">
                                        <a href="" style="color:red">{{$errors->first('username')}}</a>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <lable for="userid">User_id</lable>
                                        <input type="text" name="userid" id="userid" class="form-control" value="{{old('email')}}">
                                        <a href="" style="color:red">{{$errors->first('email')}}</a>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <lable for="slug">Product Slug</lable>
                                        <input type="text" name="slug" id="slug" class="form-control">
                                        <a href="" style="color:red">{{$errors->first('slug')}}</a>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <button class="btn btn-success btn-sm"> Add record</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- footer content -->



</html>

@endsection