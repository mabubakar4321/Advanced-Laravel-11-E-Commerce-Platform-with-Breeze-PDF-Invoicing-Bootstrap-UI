<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->
<div class="container mt-5">
    <form action="{{url('placeorder')}}" method="POST" class="p-4 border rounded shadow bg-light">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Receiver Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Receiver Address</label>
            <textarea name="address" id="address" class="form-control" rows="3">{{ Auth::user()->address }}</textarea>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Receiver Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ Auth::user()->phone }}">
        </div>

        <button type="submit" class="btn btn-success">Place Order</button>
    </form>
</div>


    <div class="container my-5">
      <h1 class="text-center mb-4">Add To Cart Detail</h1>

      <table class="table table-bordered table-striped text-center align-middle">
        <thead class="table-dark">
          <tr>
            <th>Product Title</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
           @php
               $value=0;
           @endphp
          @foreach ($cart as $carts)
            <tr>
              <td>{{ $carts->product->title }}</td>
              <td>Rs. {{ $carts->product->price }}</td>
              <td>
                <img src="{{ asset('postimage/'.$carts->product->image) }}" alt="Product Image" class="img-thumbnail" style="max-height: 100px;">
              </td>
              <td><a href="{{url('deleteid',$carts->id)}}" class="btn btn-danger">Remove</a></td>
            </tr>
            @php
           
  $value += floatval(preg_replace('/[^0-9.]/', '', $carts->product->price));
@endphp

    
          @endforeach
        </tbody>
      </table>
    
      <h1 class="mt-4 text-center text-success fw-bold">
  Total Cart Amount: Rs. {{ number_format($value) }}
</h1>


    </div>
    
    <!-- footer section -->
    @include('home.footer')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
