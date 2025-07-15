<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      {{-- @include('admin.body') --}}
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
   <div class=" d-flex justify-content-center align-items-center my-20" style="background-color: #22252A;">
    <div class="bg-black p-4 rounded shadow" style="width: 100%; max-width: 400px;">
        <h1 class="text-center ">Edit Category</h1>
        <form action="{{url('updatecetorgy',$category->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <input type="text" value="{{$category->category_name}}" class="form-control" name="category" id="category" placeholder="Enter Category">
            </div>
            <button type="submit" class="btn btn-dark w-100">Submit</button>
        </form>
    </div>
</div>






          </div>
        </div>
</div>





        @include('admin.footer')
        <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
