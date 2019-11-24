<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar box is-marginless is-paddingless is-radiusless" role="navigation">
            <div class="navbar-brand">
                <a class="navbar-item title is-4" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="navbar-menu">
                @if (Auth::user())
                <div class="navbar-start">
                    <a class="navbar-item" href="{{ route('new course') }}">Pubblica corso</a>

                    <a class="navbar-item" href="">Consiglia attività</a>
                </div>
                @endif

                <div class="navbar-end">
                    <!-- Authentication Links -->
                    @guest
                    <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif

                    @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            Profilo
                        </a>

                        <div class="navbar-dropdown">
                            <span class="navbar-item">
                                {{ Auth::user()->name }}
                            </span>

                            <a class="navbar-item is-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <div class="footer">
            <div class="container">
                <div class="section">
                    <span class="tag is-success">Free</span>
                    <span class="tag is-info">Open Source</span>
                </div>

                <div class="section">
                    <span>Migrazione a <strong class="has-text-primary">Laravel</strong></span>
                    <progress class="progress is-primary" value="25" max="100"></progress>
                </div>

                <div class="section">
                    <div class="columns">
                        <div class="column">
                            <p class="subtitle is-3">Social</p>

                            <ul>
                                <li>
                                    <span>Github</span>
                                </li>

                                <li>
                                    <span>LinkedIn</span>
                                </li>

                                <li>
                                    <span>Blog</span>
                                </li>
                            </ul>
                        </div>

                        <div class="column">
                            <p class="subtitle is-3">About</p>

                            <p>Built with <strong>Laravel</strong>, <strong>Bulma</strong> and <strong>Vue</strong> by <a href="https://snisni.it/profile/sinisimattia">Mattia Sinisi</a></p>

                            <br>

                            <p>Created for/with the <strong>Michael Faraday Institute of Technology</strong>.</p>
                            <p>Distributed under the <strong>{{config('app.licence', '[licence]')}} Licence</strong>.</p>

                            <hr>

                            <a href="/about">More info</a>
                        </div>
                    </div>

                    <div>
                        <p class="subtitle is-3">Add your school</p>

                        <p>Requests must be sent to <a href="mailto:school@example.com">email@example.com</a> with the details of your school and the contact info of the person managing it.</p>

                        <hr>

                        <a href="/about/schools">More info</a>
                    </div>
                </div>

                <div class="has-text-centered has-text-grey">
                    <p>Copyright 2019/2020 <strong>School++</strong> · A project of I.T.I.s. Michael Faraday Ostia</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>