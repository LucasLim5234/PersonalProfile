<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a @class([ 'nav-link' , 'link-dark' , 'active'=> request()->routeIs('home'),
                            ])
                            @if(request()->routeIs('home'))
                            aria-current="page"
                            @endif
                            href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a @class([ 'nav-link' , 'dropdown-toggle' , 'link-dark' , 'active'=> request()->routeIs('about.*'),
                            ])
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a @class([ 'dropdown-item' , 'active'=> request()->routeIs('about.chong-kai-jun')
                                    ])
                                    @if(request()->routeIs('about.chong-kai-jun'))
                                    aria-current="page"
                                    @endif
                                    href="{{ route('about.chong-kai-jun') }}">
                                    Chong Kai Jun
                                </a>
                            </li>
                            <li>
                                <a @class([ 'dropdown-item' , 'active'=> request()->routeIs('about.lim-eng-seng')
                                    ])
                                    @if(request()->routeIs('about.lim-eng-seng'))
                                    aria-current="page"
                                    @endif
                                    href="{{ route('about.lim-eng-seng') }}">
                                    Lim Eng Seng
                                </a>
                            </li>
                            <li>
                                <a @class([ 'dropdown-item' , 'active'=> request()->routeIs('about.gan-jun-wei')
                                    ])
                                    @if(request()->routeIs('about.gan-jun-wei'))
                                    aria-current="page"
                                    @endif
                                    href="{{ route('about.gan-jun-wei') }}">
                                    Gan Jun Wei
                                </a>
                            </li>
                            <li>
                                <a @class([ 'dropdown-item' , 'active'=> request()->routeIs('about.chong-hong-xiong')
                                    ])
                                    @if(request()->routeIs('about.chong-hong-xiong'))
                                    aria-current="page"
                                    @endif
                                    href="{{ route('about.chong-hong-xiong') }}">
                                    Chong Hong Xiong
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a @class([ 'nav-link' , 'link-dark' , 'active'=> request()->routeIs('contact'),
                            ])
                            @if(request()->routeIs('contact'))
                            aria-current="page"
                            @endif
                            href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>