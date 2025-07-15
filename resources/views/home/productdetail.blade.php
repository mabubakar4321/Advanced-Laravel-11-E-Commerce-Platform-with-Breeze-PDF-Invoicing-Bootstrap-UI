<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="hero_area">
    <!-- Header section -->
    @include('home.header')



    <!-- Product Detail Section -->
    <div class="container my-5">
      <h1 class="text-center mb-5">Product Detail</h1>

      <div class="row align-items-center">
        <!-- Product Image -->
        <div class="col-md-6 mb-4 text-center">
  <img src="{{ asset('postimage/' . $products->image) }}" 
       alt="Product Image" 
       class="img-fluid rounded shadow" 
       style="max-height: 400px; width: auto; object-fit: contain;">
</div>



        <!-- Product Details -->
        <div class="col-md-6">
          <h2 class="fw-bold">{{$products->title}}</h2>
          <h4 class="text-success mb-3">{{$products->price}}</h4>

          <p><strong>Category:</strong> {{$products->category}}</p>
          <p><strong>Available Quantity:</strong> {{$products->quantity}}</p>

          <p class="mt-4"><strong>Description:</strong></p>
          <p>
           {{$products->description}}
          </p>

          {{-- <button class="btn btn-success mt-3">Add to Cart</button> --}}
        </div>
      </div>
    </div>

    <!-- Footer section -->
    @include('home.footer')
  </div>

  <!-- Bootstrap JS (optional if not already included) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
