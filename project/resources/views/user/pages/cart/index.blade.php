<x-user.layouts.app>
    
    @include('user.pages.cart.breadcrumb')

    <main id="MainContent" class="content-for-layout">
        <div class="cart-page mt-100">
            <div class="container">
                <div class="cart-page-wrapper">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12">
                            <table class="cart-table w-100">
                                <thead>
                                  <tr>
                                    <th class="cart-caption heading_18">Product</th>
                                    <th class="cart-caption heading_18"></th>
                                    <th class="cart-caption text-center heading_18 d-none d-md-table-cell">Quantity</th>
                                    <th class="cart-caption text-end heading_18">Price</th>
                                    <th class="cart-caption text-end heading_18">Total Price</th>
                                  </tr>
                                </thead>
                    
                                <tbody>
                                    @php $total = 0; $shipping_charge = 100; $discount = 10; @endphp
                                @foreach ($data as $item)
                                    @php $total = $total + $item['product']->sale_price * $item->quantity; @endphp
                                  <tr class="cart-item">
                                    <td class="cart-item-media">
                                      <div class="mini-img-wrapper">
                                          <img class="mini-img" src="{{ asset($item['product']['image']->small_img ?? 'images/products/small_img/dummy.jpg') }}" alt="img">
                                      </div>                                    
                                    </td>
                                    <td class="cart-item-details">
                                      <h2 class="product-title"><a href="#">{{ $item['product']->title }}</a></h2>
                                   
                                    </td>
                                    <td class="cart-item-quantity">
                                      <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"  onclick="decreaseCart({{$item->id}})">
                                            <img src="{{ asset('themes/user') }}/assets/img/icon/minus.svg" alt="minus">
                                        </button>
                                        <input class="qty-input" type="number" name="qty" value="{{ $item->quantity }}" min="0">
                                        <button class="qty-btn inc-qty" onclick="increaseCart({{$item->id}})">
                                            <img src="{{ asset('themes/user') }}/assets/img/icon/plus.svg" alt="plus">
                                        </button>
                                      </div>
                                      <a href="javascript:void(0)" class="product-remove mt-2" onclick="removeCart({{$item->id}})">Remove</a>                           
                                    </td>
                                    <td class="cart-item-price text-end">
                                      <div class="product-price"> {{ $item['product']->sale_price}}</div>                           
                                    </td> 
                                    <td class="cart-item-price text-end">
                                      <div class="product-price"> {{ $item['product']->sale_price * $item->quantity }}</div>                           
                                    </td>                        
                                  </tr>  
                                  @endforeach
                                    
                                  
                                </tbody>
                              </table>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="cart-total-area">
                                <h3 class="cart-total-title d-none d-lg-block mb-0">Cart Totals
                                <div class="cart-total-box mt-4">
                                    <div class="subtotal-item subtotal-box">
                                        <h4 class="subtotal-title">Subtotals:</h4>
                                        <p class="subtotal-value">{{$total}}</p>
                                    </div>
                                    <div class="subtotal-item shipping-box">
                                        <h4 class="subtotal-title">Shipping:</h4>
                                        <p class="subtotal-value">{{$shipping_charge}} </p>
                                    </div>
                                    <div class="subtotal-item discount-box">
                                        <h4 class="subtotal-title">Discount:</h4>
                                        <p class="subtotal-value">{{$discount}} </p>
                                    </div>
                                    <hr>
                                    <div class="subtotal-item discount-box">
                                        <h4 class="subtotal-title">Total:</h4>
                                        <p class="subtotal-value">{{$total + $shipping_charge - $discount}}</p>
                                    </div>
                                    <p class="shipping_text">Shipping & taxes calculated at checkout</p>
                                    <div class="d-flex justify-content-center mt-4">
                                        <a href="{{route('checkout')}}" class="position-relative btn-primary text-uppercase">
                                            Procced to checkout
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
    
    
    <script>
        function increaseCart(id) {
            $.ajax({
                'type':'post',
                'url':"{{route('cart.increase')}}",
                'data':{
                    '_token':"{{csrf_token()}}",
                    'id':id,
                },
                'success': function (result) {
                    console.log(result);
                }
            });
        }
        function decreaseCart(id) {
            $.ajax({
                'type':'post',
                'url':"{{route('cart.decrease')}}",
                'data':{
                    '_token':"{{csrf_token()}}",
                    'id':id,
                },
                'success': function (result) {
                    console.log(result);
                }
            });
        }
        function removeCart(id) {
            $.ajax({
                'type':'post',
                'url':"{{route('cart.remove')}}",
                'data':{
                    '_token':"{{csrf_token()}}",
                    'id':id,
                },
                'success': function (result) {
                    console.log(result);
                }
            });
        }
    </script>
</x-user.layouts.app>