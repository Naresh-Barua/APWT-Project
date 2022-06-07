<html>
    <head>
        <title>BYKEA</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
            @include('inc.topnav')
            <div>
                @yield('content')
            </div>
        </div>
        
    </body>
</html>