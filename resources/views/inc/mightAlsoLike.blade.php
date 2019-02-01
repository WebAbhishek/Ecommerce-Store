	<!-- RELATED PRODUCTS section -->
	<section class="related-product-section">
            <div class="container">
                <div class="section-title">
                    <h2>You Might Also Like</h2>
                </div>
                <div class="product-slider owl-carousel">
                    @foreach ($mightAlsoLike as $product)
                    <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('img/product/'.$product->slug.'.jpg')}}" alt="">
                                <div class="pi-links">
                                    <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6>INR {{$product->presentPrice($product->price)}}</h6>
                                <p>{{$product->name}}</p>
                            </div>
                        </div>
                    @endforeach
                
                </div>
            </div>
        </section>
        <!-- RELATED PRODUCTS section end -->