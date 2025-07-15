<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        @foreach ($product as $products)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="{{asset('postimage/'.$products->image)}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  {{$products->title}}
                </h6>
                <h6>
                  Price
                  <span>
                   {{$products->price}}
                  </span>
                </h6>
              </div>

            </a>
            <div>
    <a href="{{url('productdetail',$products->id)}}" class="btn btn-success">Details</a>
</div>
 
<div class="mt-2">
    <a href="{{url('addcart',$products->id)}}" class="btn btn-primary" mx-10>Add to Cart</a>
</div>

          </div>
        </div>
         @endforeach
    </div>
  </section>