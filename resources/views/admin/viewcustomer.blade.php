<!DOCTYPE html>
<html>
<head> 
  @include('admin.css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

          <div class="my-4">
            <h1 class="mb-4">Customer Detail</h1>
            <div class="table-responsive">
              <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                  <tr>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Change Status</th>
                    <th>Print Pdf</th>
                  </tr>   
                </thead>
                <tbody>

                  @foreach ($order as $orders)
                      <tr>
                    <td>{{$orders->name}}</td>
                    <td>{{$orders->address}}</td>
                    <td>{{$orders->phone}}</td>
                    <td>{{$orders->product->title}}</td>
                    <td>{{$orders->product->price}}</td>
                    <td><img src="{{asset('postimage/'.$orders->product->image)}}" alt="Product" width="60"></td>
                    <td>{{$orders->status}}</td>
                  <td>
  <a href="{{url('ontheway',$orders->id)}}" class="btn btn-success me-2">On the Way</a>
  <a href="{{url('deliver',$orders->id)}}" class="btn btn-primary">Delivered</a>
</td>

<td><a href="{{url('printpdf',$orders->id)}}" class="btn btn-primary " >Get Pdf</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>

  @include('admin.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
