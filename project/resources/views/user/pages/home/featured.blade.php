<div class="featured-collection mt-100 overflow-hidden">
    <div class="collection-tab-inner">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-heading primary-color">Featured Products</h2>
            </div>
            <div class="row">
                @foreach ($products as $item)
                <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="{{route('product-details',$item->id)}}">
                                <img class="secondary-img"
                                    src="{{ asset($item['images'][0]->medium_img ?? '') }}"
                                    alt="product-img">
                                <img class="primary-img"
                                    src="{{ asset($item['images'][0]->medium_img ?? '') }}"
                                    alt="product-img">
                            </a>

                            <div class="product-badge">
                                <span class="badge-label badge-percentage rounded">-44%</span>
                            </div>

                            <div class="product-card-action product-card-action-2 justify-content-center">
                                <a href="#quickview-modal" class="action-card action-quickview"
                                    data-bs-toggle="modal">
                                    <svg width="26" height="26" viewbox="0 0 26 26"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                            fill="#00234D"></path>
                                    </svg>
                                </a>

                               

                                <form action="{{route('wishlist.add')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$item->id}}">
                                    
                                      <button class="action-card action-wishlist">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </form>

                                <a href="{{route('product-details',$item->id)}}" class="action-card action-addtocart">
                                    <svg class="icon icon-cart" width="24" height="26"
                                        viewbox="0 0 24 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                            fill="#00234D"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-card-details">
                            <ul class="color-lists list-unstyled d-flex align-items-center">
                                <li><a href="javascript:void(0)"
                                        class="color-swatch swatch-black active"></a></li>
                                <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a>
                                </li>
                                <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                </li>
                            </ul>
                            <h3 class="product-card-title">
                                <a href="{{route('product-details',$item->id)}}">{{$item->title}}</a>
                            </h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">₹{{$item->mrp}}</span>
                                <span class="card-price-compare text-decoration-line-through">₹{{$item->sale_price}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
                
            </div>
            <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                <a class="btn-primary" href="#">VIEW ALL</a>
            </div>
        </div>
    </div>
</div>