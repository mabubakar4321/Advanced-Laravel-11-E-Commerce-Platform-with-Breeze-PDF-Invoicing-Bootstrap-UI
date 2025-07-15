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
        <h1 class="text-center ">Add Category</h1>
        <form action="{{url('addcategory')}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="category" id="category" placeholder="Enter Category">
            </div>
            <button type="submit" class="btn btn-dark w-100">Submit</button>
        </form>
    </div>
</div>


<div class="table-responsive mt-4">
  <table class="table table-dark table-bordered table-hover align-middle" style="background-color: #22252A;">
    <thead class="table-light text-dark">
      <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($category as $categorys)
      <tr>
        <td>{{$categorys->id}}</td>
        <td>{{$categorys->category_name}}</td>
        <td>
          <a href="{{url('showedit',$categorys->id)}}" class="btn btn-sm btn-warning">Edit</a>
          <a href="{{url('deletecategory',$categorys->id)}}" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
     
      @endforeach
      
    </tbody>
  </table>
</div>
{{$category->links()}}
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
