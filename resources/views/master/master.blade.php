<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! $head ?? '' !!}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    @hasSection ('css')
        @yield('css')
    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ url(asset('frontend/assets/images/favicon.png')) }}"/>
</head>
<body>

<header class="main_header">

    <div class="header_bar bg-front">
        <div class="container">
            <div class="row py-1 d-flex justify-content-md-around">

                <div class="d-none d-lg-flex col-lg-4 justify-content-center align-items-center p-2 text-white">
                    <i class="icon-location-arrow"></i>
                    <p class="my-auto ml-3"></p>
                </div>

                <div class="d-none d-md-flex col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white">
                    <i class="icon-clock-o"></i>
                    <p class="my-auto ml-3"></p>
                </div>

                <div class="d-flex col-12 col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white mx-auto">
                    <i class="icon-envelope"></i>
                    <p class="my-auto ml-3"></p>
                </div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light my-1">
        <div class="container">

            <div class="navbar-brand">
                <h1>Laravel 7 Crud with Ajax</h1>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Menu Principal">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link">Users</a></li>
                    <li class="nav-item"><a href="{{ route('books.index') }}" class="nav-link">Books</a></li>

                </ul>
            </div>

        </div>
    </nav>
</header>

@yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@hasSection ('js')
    @yield('js')
@endif

</body>
</html>
