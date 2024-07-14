<!doctype html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->


    <meta name="facebook-domain-verification" content="mnboul782i63d9fijs7oh0e185reyh"/>


    <link rel="icon" href="{{ asset('assets/img/master-card.png') }}" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/tailwind.min.css')}}" rel="stylesheet" defer>
    <title>Master-card</title>

    <!-- Meta Pixel Code -->

    <!-- End Meta Pixel Code -->

    @yield('page-specific-css')
</head>

<body class="" >
<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->

<!-- resources/views/navbar.blade.php -->
<nav class="bg-black py-4">
    <div class= "flex items-center justify-between">
        <div class="flex items-center">
            <div class="mr-3 pl-6">
                <img src="{{ asset('assets/img/master-card.png') }}" alt="Mastercard Logo" class="h-16 w-auto">
            </div>
            <div class="flex flex-col border-l border-gray-400 pl-4">
            <div class="text-white font-semibold text-2xl">
                ID Theft Protection
            </div>
            <div class="text-gray-300 text-sm">
                An Iris Powered by Generali service
            </div>
        </div>
        </div>

    </div>
</nav>


@yield('body')

@yield('page-specific-js')
</body>
</html>
