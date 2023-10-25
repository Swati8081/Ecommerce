<x-user.layouts.app>
      <!-- breadcrumb start -->
      <div class="breadcrumb">
        <div class="container">
            <ul class="list-unstyled d-flex align-items-center m-0">
                <li><a href="/">Home</a></li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewbox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z" fill="#000"></path>
                        </g>
                    </svg>
                </li>
                <li>Cart</li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewbox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z" fill="#000"></path>
                        </g>
                    </svg>
                </li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <main id="MainContent" class="content-for-layout">
        <div class="checkout-page mt-100">
            <div class="container">
                <div class="checkout-page-wrapper">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                            <div class="section-header mb-3">
                                <h2 class="section-heading">Check out</h2>
                            </div>
                            <div class="shipping-address-area">
                                <h2 class="shipping-address-heading pb-1">Shipping address</h2>
                                <div class="shipping-address-form-wrapper">
                                    <form action="#" class="shipping-address-form common-form">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">First name</label>
                                                    <input type="text">
                                                </fieldset>
                                            </div>
                                            
                                         
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Phone number</label>
                                                    <input type="text">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Zip code</label>
                                                    <input type="text">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Address </label>
                                                    <input type="text">
                                                </fieldset>
                                            </div>
                                           
                                        </div>

                                    </form>
                                </div>
                            </div>

                           
                            <div class="shipping-address-area billing-area">
                                <div class="minicart-btn-area d-flex align-items-center justify-content-between flex-wrap">
                                    <a href="{{route('cart.index')}}" class="checkout-page-btn minicart-btn btn-secondary">BACK TO CART</a>
                                    <a href="checkout.html" class="checkout-page-btn minicart-btn btn-primary">Confirm Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                            <div class="cart-total-area checkout-summary-area">
                                <h3 class="d-none d-lg-block mb-0 text-center heading_24 mb-4">Order summary

                                    @php $total = 0; $shipping_charge = 100; $discount = 10; @endphp
                                    @foreach ($data as $item)
                                    @php $total = $total + $item['product']->sale_price * $item->quantity; @endphp
                                    <div class="minicart-item d-flex">
                                        <div class="mini-img-wrapper">
                                            <img class="mini-img" src="{{ asset($item['product']['image']->medium_img ?? 'images/products/small_img/dummy.jpg') }}" alt="img">
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="#">{{$item['product']->title}}</a></h2>
                                            <p class="product-vendor">₹{{ $item['product']->sale_price}} * {{ $item->quantity}} = ₹{{ $item['product']->sale_price * $item->quantity }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                <div class="cart-total-box mt-4 bg-transparent p-0">
                                    <div class="subtotal-item subtotal-box">
                                        <h4 class="subtotal-title">Subtotals:</h4>
                                        <p class="subtotal-value">₹{{$total}}</p>
                                    </div>
                                    <div class="subtotal-item shipping-box">
                                        <h4 class="subtotal-title">Shipping:</h4>
                                        <p class="subtotal-value">₹{{$shipping_charge}}</p>
                                    </div>
                                    <div class="subtotal-item discount-box">
                                        <h4 class="subtotal-title">Discount:</h4>
                                        <p class="subtotal-value">₹{{$discount}}</p>
                                    </div>
                                    <hr>
                                    <div class="subtotal-item discount-box">
                                        <h4 class="subtotal-title">Total:</h4>
                                        <p class="subtotal-value">₹{{$total + $shipping_charge - $discount}}</p>
                                    </div>


                                    <div class="mt-4 checkout-promo-code">
                                        <input class="input-promo-code" type="text" placeholder="Promo code">
                                        <a href="checkout.html" class="btn-apply-code position-relative btn-secondary text-uppercase mt-3">
                                            Apply Promo Code
                                        </a>
                                    </div>
                                </div>
                            </h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </main>
</x-user.layouts.app>