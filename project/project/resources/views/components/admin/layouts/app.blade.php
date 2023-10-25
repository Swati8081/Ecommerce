<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from w3crm.dexignzone.com/xhtml/empty-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 11:18:24 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    {{ $head_tag ?? '' }}

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('themes/admin') }}/images/favicon.png">
    <link href="{{ asset('themes/admin') }}/https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('themes/admin') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('themes/admin') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('themes/admin') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
 
    


</head>

<body>




    <div id="main-wrapper">

        <x-admin.layouts.nav_header />
        <x-admin.layouts.chat_box />
        <x-admin.layouts.header />
        <x-admin.layouts.sidebar />

        <div class="content-body">
            <div class="container-fluid">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        <strong>Success!</strong> {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i
                                    class="fa-solid fa-xmark"></i></span>

                        </button>
                    </div>
                @endif
                {{ $slot }}

            </div>
        </div>
        <x-admin.layouts.footer />

    </div>
    <x-admin.layouts.footer_tag />

</body>


</html>
