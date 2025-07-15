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

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
                   <div>
                    <form action="{{url('searchproduct')}}" method="GET">
                      <input type="search" name="search" id="search">
                      <input type="submit" value="Search">
                    </form>
                   </div>


      <div class="container my-5">
    <h2 class="mb-4">All Products</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row -->
                @foreach ($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{!!Str::limit($product->description, 10, '...')!!}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->quantity}}</td>
                    <td><img src="{{asset('postimage/'.$product->image)}}" alt="Product Image" width="80" height="80">

</td>
                    <td>
                        <a href="{{url('editproduct',$product->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{url('deleteproduct',$product->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>

    </div>
    {{$products->links()}}
</div>

          </div>
        </div>
      </div>
     
        @include('admin.footer')
  </body>
</html>
