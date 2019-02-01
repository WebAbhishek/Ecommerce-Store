@extends('layouts.default')
@section('content')


	<!-- Page info -->
	<div class="page-top-info">
            <div class="container">
                <h4>Your cart</h4>
                <div class="site-pagination">
                    <a href="">Home</a> /
                    <a href="">Your cart</a>
                </div>
            </div>
        </div>
        <!-- Page info end -->
    
    
        <!-- cart section end -->
        <section class="cart-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                            @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get('success_message')}}{{Cart::count()}}
        </div>
            @endif

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
                
            @endif

           
            @if (Cart::count() > 0)
                        <div class="cart-table">
                               
                            <h3>{{Cart::count()}} Item(s) In Your Cart</h3>
                            <div class="cart-table-warp">
                                <table>
                                <thead>
                                    <tr>
                                        <th class="product-th">Product</th>
                                        <th class="quy-th">Quantity</th>
                                        <th class="size-th">SizeSize</th>
                                        <th class="total-th">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-col">
                                            <img src="img/cart/1.jpg" alt="">
                                            <div class="pc-title">
                                                <h4>Animal Print Dress</h4>
                                                <p>$45.90</p>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-col"><h4>Size M</h4></td>
                                        <td class="total-col"><h4>$45.90</h4></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>

           
                            <div class="total-cost">
                                <h6>Total <span>$99.90</span></h6>
                            </div>
                            @else

                            <h3>No items in your Cart</h3>
@endif
                        </div>
                    </div>
                    <div class="col-lg-4 card-right">
                        @if (Cart::count() > 0)
                        <form class="promo-code-form">
                            <input type="text" placeholder="Enter promo code">
                            <button>Submit</button>
                        </form>
                        <a href="" class="site-btn">Proceed to checkout</a>
                        <a href="{{route('shop.index')}}" class="site-btn sb-dark">Continue shopping</a>
                        @else 

                        <a href="{{route('shop.index')}}" class="site-btn sb-dark">Continue shopping</a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

      
        <!-- cart section end -->

        @include('inc.mightAlsoLike')
    
@endsection