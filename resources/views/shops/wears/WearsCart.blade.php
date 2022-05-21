@extends('layouts.app')
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu End -->
{{ View::make('header') }}
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Shopping cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Cart Section Begin -->

<section class="shop-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($wears->isNotEmpty())
                                @foreach ($wears as $item)
                                    <tr>
                                        <td class="cart__product__item">
                                            <img src="{{ $item->product_img }}" alt="">
                                            <div class="cart__product__item__title">

                                                <h6>{{ $item->product_name }}</h6>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>

                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price">{{ $item->price }}</td>
                                        <td class="cart__quantity">
                                            <form method="POST" action="{{ route('WearsQty.update', $item->id) }}">
                                                @csrf

                                                <div class="pro-qty">
                                                    <input type="text" value="1" name="quantity">
                                                </div>
                                                {{-- <button type="submit" class="btn btn-primary">
                                                    {{ __('qty') }}
                                                </button> --}}
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="cart__btn update__btn">
                                                        <button type="submit"><span class="icon_loading"></span>
                                                            Update Product</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>


                                        <td class="cart__total">{{ $item->price }}</td>
                                        {{-- <td class="cart__total">
                                            {{ number_format($item->price * $item->quantity, 2) }}</td> --}}

                                        <td class="cart__close"><a
                                                href="{{ url('deletefromcartWears') }}/{{ $item->id }}"><span
                                                    class="icon_close"></span></a></td>
                                    </tr>
                                @endforeach
                            @else
                                <div
                                    style="margin-left: auto; margin-right: auto; text-align: center; padding-top:20px; background-color: #ff00003d;">
                                    <p>No products found!! Try search again.</p>
                                </div>
                            @endif

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn">
                    <a href="#">Continue Shopping</a>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="cart__btn update__btn">
                    <a href="#"><span class="icon_loading"></span> Update cart</a>
                </div>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="discount__content">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Enter your coupon code">
                        <button type="submit" class="site-btn">Apply</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2">
                <div class="cart__total__procced">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span>$ 750.0</span></li>
                        <li>Total <span>$ 750.0</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop Cart Section End -->



<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->
