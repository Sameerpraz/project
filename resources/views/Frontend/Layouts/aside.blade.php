@section('aside')
<!-- /sidebar menu -->
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              {{--<a href="{{route('admin-dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>--}}
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{url('frontend/images/users/'.Auth::guard('web')->user()->image)}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>
                {{--<img src="" alt="">--}}
                {{Auth::guard('web')->user()->username}}
                </h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('myprofile')}}"><i class="fa fa-dashboard"></i>User Dashboard </a>
                  </li>
                  <li><a href="{{route('edit-profile')}}"><i class="fa fa-user"></i>User Profile</a></li>
                  <li><a href="{{route('product-add')}}"><i class="fa fa-user"></i>Add Product</a></li>
                  <li><a href="{{route('change-password')}}"><i class="fa fa-user"></i>Change Password</a></li>

                 {{-- <li><a><i class="fa fa-th"></i>Categories<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Index</a></li>        
                    </ul>
                  </li>
                  <li><a><i class="fa fa-th-large"></i>Subcategories<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Index</a></li>
                    </ul>
                  </li>
                
                  <li><a><i class="fa fa-th-list"></i>Subsubcategories<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Index</a></li>
                    </ul>
                  </li>

                  <li><a><i class="glyphicon glyphicon-folder-open"></i> Products<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('add-product')}}">Add</a></li>
                     <li><a href="{{route('products')}}">Show</a></li>
                    </ul>
                  </li>--}}
                </ul>
              </div>
            </div>
            

@endsection