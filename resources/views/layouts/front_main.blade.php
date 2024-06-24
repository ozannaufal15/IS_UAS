<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Mart, Shopping Everyday</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/dist/css/tabler.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/demo.min.css') }}" rel="stylesheet" />

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <div class="page">
        @include('layouts.partials.front_nav')
        <div class="page-wrapper ">
            <div class="page-body">
                <div class="container-xl ">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Tabler Core -->
<script src="{{ asset('assets/dist/js/tabler.js') }}" defer></script>
<script src="{{ asset('assets/dist/js/demo.min.js') }}" defer></script>

@stack('scripts')

</html>
