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
        
             <div class="container my-5">
    <h1 class="mb-4">Add Product</h1>
    <form action="{{url('storeproduct')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Product Title</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="text" name="price" class="form-control" id="price">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Product Category</label>
            <select name="category" class="form-select" id="category">
                <option value="">Select a category</option>
                @foreach ($category as $categorys)
                    <option value="{{ $categorys->category_name }}">{{ $categorys->category_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Product Quantity</label>
            <input type="number" name="quantity" class="form-control" id="quantity">
        </div>
         <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>


        <button type="submit" class="btn btn-dark w-100">Submit</button>
    </form>
</div>


          </div>
        </div>
   </div>
        @include('admin.footer')
  </body>
</html>
