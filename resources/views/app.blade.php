<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>{{ $seo->title }}</title>
    <meta name="description" content="{{ $seo->description }}" />
    <meta name="keywords" content="{{ $seo->keywords }}" />
    <meta name="og:site_name" content="{{ $seo->ogSiteName }}" />
    <meta name="og:url" content="{{ $seo->ogUrl }}" />
    <meta name="og:title" content="{{ $seo->ogTitle }}" />
    <meta name="og:image" content="{{ $seo->ogImage }}" />
    <meta name="og:description" content="{{ $seo->ogDescription }}" />


    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}" />
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{asset('css/toastify.min.css')}}" rel="stylesheet" />
    <script src="{{asset('js/toastify-js.js')}}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body class="d-flex flex-column h-100">

    @include('components.navbar')
    @include('components.loader')

    <div class="" id="content-div">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>

  
</body>

</html>
