<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/products">Overview</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/products/create">Create</a>
                        </li>
                    </ul>
                </div>
            </nav>   

            @yield('content')
        </div>
    </body>
</html>
