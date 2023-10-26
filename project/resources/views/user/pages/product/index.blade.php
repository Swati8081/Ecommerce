<x-user.layouts.app>
    <!-- breadcrumb start -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="list-unstyled d-flex align-items-center m-0">
                <li><a href="/">Home</a></li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewbox="0 0 64 64" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path
                                d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                fill="#000"></path>
                        </g>
                    </svg>
                </li>
                <li>Products</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <main id="MainContent" class="content-for-layout">
        <div class="collection mt-100">
            <div class="container">
                <div class="row flex-row-reverse">
                    <!-- product area start -->
                    <div class="col-lg-9 col-md-12 col-12">
                        <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                            <div class="collection-title-wrap d-flex align-items-end">
                                <h2 class="collection-title heading_24 mb-0">All products</h2>
                                <p class="collection-counter text_16 mb-0 ms-2">(237 items)</p>
                            </div>
                            <div class="filter-sorting">
                                <div class="collection-sorting position-relative d-none d-lg-block">
                                    <div class="sorting-header text_16 d-flex align-items-center justify-content-end">
                                        <span class="sorting-title me-2">Sort by:</span>
                                        <span class="active-sorting">Featured</span>
                                        <span class="sorting-icon">
                                            <svg class="icon icon-down" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewbox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-chevron-down">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </div>
                                    <ul class="sorting-lists list-unstyled m-0">
                                        <li><a href="#" class="text_14">Featured</a></li>
                                        <li><a href="#" class="text_14">Best Selling</a></li>
                                        <li><a href="#" class="text_14">Alphabetically, A-Z</a></li>
                                        <li><a href="#" class="text_14">Alphabetically, Z-A</a></li>
                                        <li><a href="#" class="text_14">Price, low to high</a></li>
                                        <li><a href="#" class="text_14">Price, high to low</a></li>
                                        <li><a href="#" class="text_14">Date, old to new</a></li>
                                        <li><a href="#" class="text_14">Date, new to old</a></li>
                                    </ul>
                                </div>
                                <div class="filter-drawer-trigger mobile-filter d-flex align-items-center d-lg-none">
                                    <span class="mobile-filter-icon me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-filter">
                                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                        </svg>
                                    </span>
                                    <span class="mobile-filter-heading">Filter and Sorting</span>
                                </div>
                            </div>
                        </div>
                        <div class="collection-product-container">
                            <div class="row">
                                @foreach ($products as $item)
                                    <div class="col-lg-4 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <a class="hover-switch" href="{{ route('product-details', $item->id) }}">
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

                                                <div
                                                    class="product-card-action product-card-action-2 justify-content-center">
                                                    <a href="#quickview-modal" class="action-card action-quickview"
                                                        data-bs-toggle="modal">
                                                        <svg width="26" height="26" viewbox="0 0 26 26"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 0C15.5117 0 20 4.48828 20 10C20 12.3945 19.1602 14.5898 17.75 16.3125L25.7188 24.2812L24.2812 25.7188L16.3125 17.75C14.5898 19.1602 12.3945 20 10 20C4.48828 20 0 15.5117 0 10C0 4.48828 4.48828 0 10 0ZM10 2C5.57031 2 2 5.57031 2 10C2 14.4297 5.57031 18 10 18C14.4297 18 18 14.4297 18 10C18 5.57031 14.4297 2 10 2ZM11 6V9H14V11H11V14H9V11H6V9H9V6H11Z"
                                                                fill="#00234D"></path>
                                                        </svg>
                                                    </a>



                                                    <form action="{{ route('wishlist.add') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $item->id }}">

                                                        <button class="action-card action-wishlist">
                                                            <i class="fa-solid fa-heart"></i>
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('product-details', $item->id) }}"
                                                        class="action-card action-addtocart">
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
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-cyan"></a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"
                                                            class="color-swatch swatch-purple"></a>
                                                    </li>
                                                </ul>
                                                <h3 class="product-card-title">
                                                    <a
                                                        href="{{ route('product-details', $item->id) }}">{{ $item->title }}</a>
                                                </h3>
                                                <div class="product-card-price">
                                                    <span class="card-price-regular">₹{{ $item->mrp }}</span>
                                                    <span
                                                        class="card-price-compare text-decoration-line-through">₹{{ $item->sale_price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination justify-content-center mt-100">
                            <nav>
                                <ul class="pagination m-0 d-flex align-items-center">
                                    <li class="item disabled">
                                        <a class="link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-left">
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="item"><a class="link" href="#">1</a></li>
                                    <li class="item active"><a class="link" href="#">2</a></li>
                                    <li class="item"><a class="link" href="#">3</a></li>
                                    <li class="item"><a class="link" href="#">4</a></li>
                                    <li class="item">
                                        <a class="link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-right">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- product area end -->

                    <!-- sidebar start -->
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="collection-filter filter-drawer">
                            <div class="filter-widget d-lg-none d-flex align-items-center justify-content-between">
                                <h5 class="heading_24">Filter By
                                    <button type="button"
                                        class="btn-close text-reset filter-drawer-trigger d-lg-none"></button>
                                </h5>
                            </div>

                            <div class="filter-widget d-lg-none">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-mobile-sort">
                                    <span>
                                        <span class="sorting-title me-2">Sort by:</span>
                                        <span class="active-sorting">Featured</span>
                                    </span>
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-mobile-sort" class="accordion-collapse collapse show">
                                    <ul class="sorting-lists-mobile list-unstyled m-0">
                                        <li><a href="#" class="text_14">Featured</a></li>
                                        <li><a href="#" class="text_14">Best Selling</a></li>
                                        <li><a href="#" class="text_14">Alphabetically, A-Z</a></li>
                                        <li><a href="#" class="text_14">Alphabetically, Z-A</a></li>
                                        <li><a href="#" class="text_14">Price, low to high</a></li>
                                        <li><a href="#" class="text_14">Price, high to low</a></li>
                                        <li><a href="#" class="text_14">Date, old to new</a></li>
                                        <li><a href="#" class="text_14">Date, new to old</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-collection">
                                    Categories
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-collection" class="accordion-collapse collapse show">
                                    <ul class="filter-lists list-unstyled mb-0">
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                <span class="filter-text">Womens Bag</span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Bottles
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Men's Shoe
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Toddler Dress
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-availability">
                                    Availability
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-availability" class="accordion-collapse collapse show">
                                    <ul class="filter-lists list-unstyled mb-0">
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                <span class="filter-text">In Stock</span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Out of Stock
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-price">
                                    Price
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-price" class="accordion-collapse collapse show">
                                    <div class="filter-price d-flex align-items-center justify-content-between">
                                        <div class="filter-field">
                                            <input class="field-input" type="number" placeholder="$0"
                                                min="0" max="2000.00">
                                        </div>
                                        <div class="filter-separator px-3">To</div>
                                        <div class="filter-field">
                                            <input class="field-input" type="number" min="0"
                                                placeholder="$595.00" max="2000.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-widget filter-color">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-color">
                                    Colors
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-color" class="accordion-collapse collapse show">
                                    <ul class="filter-lists list-unstyled mb-0">
                                        <li class="filter-item">
                                            <label class="filter-label blue">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label red">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label green">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label purple">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label gold">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label pink">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label orange">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label aqua">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label brown">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label bisque">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label grey">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-size">
                                    Size
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-size" class="accordion-collapse collapse show">
                                    <ul class="filter-lists list-unstyled mb-0">
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                <span class="filter-text">XS</span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                S
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                M
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                L
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                XL
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                XXL
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-vendor">
                                    Vendor
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-vendor" class="accordion-collapse collapse show">
                                    <ul class="filter-lists list-unstyled mb-0">
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                <span class="filter-text">Bynd</span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Huemor
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Jordan Crown
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Hubspot
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Ramotion
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Infosolutions
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Ideo
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Codal
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Salesforce
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-type">
                                    Product Type
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-type" class="accordion-collapse collapse show">
                                    <ul class="filter-lists list-unstyled mb-0">
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                <span class="filter-text">Bodysuit</span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Hoodie
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Jacket
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Legging
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Short
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Top
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox">
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Underwear
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div
                                    class="filter-header faq-heading heading_18 d-flex align-items-center border-bottom">
                                    Related products
                                </div>
                                <div class="filter-related">
                                    <div class="related-item d-flex">
                                        <div class="related-img-wrapper">
                                            <img class="related-img" src="assets/img/products/furniture/21.jpg"
                                                alt="img">
                                        </div>
                                        <div class="related-product-info">
                                            <h2 class="related-heading heading_18">
                                                <a href="product.html">Tea Table</a>
                                            </h2>
                                            <div
                                                class="related-review-icon product-icon-star d-flex align-items-center">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                            </div>
                                            <p class="related-price text_16">$2,546</p>
                                        </div>
                                    </div>
                                    <div class="related-item d-flex">
                                        <div class="related-img-wrapper">
                                            <img class="related-img" src="assets/img/products/furniture/22.jpg"
                                                alt="img">
                                        </div>
                                        <div class="related-product-info">
                                            <h2 class="related-heading heading_18">
                                                <a href="product.html">Comfy Sofa</a>
                                            </h2>
                                            <div
                                                class="related-review-icon product-icon-star d-flex align-items-center">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                            </div>
                                            <p class="related-price text_16">$1,526</p>
                                        </div>
                                    </div>
                                    <div class="related-item d-flex">
                                        <div class="related-img-wrapper">
                                            <img class="related-img" src="assets/img/products/furniture/23.jpg"
                                                alt="img">
                                        </div>
                                        <div class="related-product-info">
                                            <h2 class="related-heading heading_18">
                                                <a href="product.html">Cusion Chair</a>
                                            </h2>
                                            <div
                                                class="related-review-icon product-icon-star d-flex align-items-center">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                                <img src="assets/img/icon/star.png" alt="img">
                                            </div>
                                            <p class="related-price text_16">$1,235</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <a href="product.html">
                                    <img class="rounded" src="assets/img/banner/collection.jpg" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- sidebar end -->
                </div>
            </div>
        </div>
    </main>
</x-user.layouts.app>
