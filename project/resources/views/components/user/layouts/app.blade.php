<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>Bisum - eCommerce Bootstrap 5 Template</title>
    <!-- meta tags -->
    <x-user.layouts.head_tag />
   
</head>

<body>
    <div class="body-wrapper">
        <x-user.layouts.announcement_bar />
        
        <x-user.layouts.header />

   {{$slot}}
        <x-user.layouts.footer />



        <!-- scrollup start -->
        <button id="scrollup">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="18 15 12 9 6 15"></polyline>
            </svg>
        </button>

        <!-- end scrollup start -->


        <x-user.layouts.drawer_menu />
        <x-user.layouts.drawer_cart />
        <x-user.layouts.product_quickview />
        {{-- <x-user.layouts.newsletter /> --}}




        <!-- all js -->
        <script src="{{ asset('themes/user') }}/js/vendor.js"></script>
        <script src="{{ asset('themes/user') }}/js/main.js"></script>
    </div>
</body>

</html>
