<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href={{ asset('css/vendor.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
 
</head>

<body>
    @include('components.header')
    <main>

        @yield('content')
    </main>
    @include('components.footer')

    <script src={{ asset('js/vendor.js') }}></script>
    <script src={{ asset('js/active.js') }}></script>
    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>
