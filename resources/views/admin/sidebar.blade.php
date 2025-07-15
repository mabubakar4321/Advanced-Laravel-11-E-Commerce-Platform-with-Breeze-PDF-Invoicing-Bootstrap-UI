 <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"> </div>
          <div class="title">
            <h1 class="h5">M AbuBakar</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href=""> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('viewcategory')}}"> <i class="icon-grid"></i>Category</a></li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>All Product </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('addproduct')}}">Add Product</a></li>
                    <li><a href="{{url('viewproduct')}}">View Product</a></li>
                    <li><a href="">Customer Detail</a></li>
                    {{-- <li><a href="#">Page</a></li> --}}
                  </ul>
                </li>
                <li><a href="{{url('viewcustomer')}}">Customer Detail</a></li>
                {{-- <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li> --}}
        </ul>
      </nav>