<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet preload" as="style" type="text/css" media="screen" href="{{url('/css/app.css')}}" /> --}}
    <link rel="stylesheet" href="{{ mix('/css/' . View::getSection('file') . '.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/global.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')</title>
    @vite(['resources/scss/global.scss', 'resources/scss/common.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="wrapper @yield('page')">
        @section('header')
            @include('layout.header')
        @show
        @yield('content')
        @section('footer')
            @include('layout.footer')
        @show
    </div>
</body>
<script rel="preload" as="script" src="{{ url('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>

</html>
