@extends ('layouts.base')

@section ('app')
    <div id="app">
        <nav class="navbar box is-marginless is-paddingless is-radiusless" role="navigation">
            <div class="navbar-brand">
                <a class="navbar-item title is-4 is-marginless" href="{{ url('/') }}">
                    <div class="image is-24x24">
                        <img src="/img/logo.svg" alt>
                    </div>
                </a>

                <div class="navbar-burger" onclick="document.toggle(this, 'nav-menu', 'is-active')">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="navbar-menu" id="nav-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{ route('home') }}">@lang('ui.home')</a>

                    @if (Auth::user() && Auth::user()->school)
                    <a class="navbar-item" href="{{ route('home').'/'.Auth::user()->school->name }}">@lang('ui.your.school')</a>
                    @endif
                </div>

                <div class="navbar-end">
                    <!-- Authentication Links -->
                    @guest
                    <a class="navbar-item" href="{{ route('login') }}">@lang('ui.login')</a>
                    @if (Route::has('register'))
                    <a class="navbar-item" href="{{ route('register') }}">@lang('ui.register')</a>
                    @endif

                    @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <span>@lang('ui.your.profile')</span>
                        </a>

                        <div class="navbar-dropdown">
                            <strong class="navbar-item is-capitalized">
                                {{ Auth::user()->name }}
                            </strong>

                            <hr class="is-marginless">

                            <a class="navbar-item" href="{{ route('new course') }}">@lang('ui.new.course')</a>

                            <a class="navbar-item" href="">@lang('ui.new.activity')</a>

                            <a class="navbar-item has-text-danger" href="{{ route('logout') }}" onclick="
                                    event.preventDefault();
                                    document.getElementById('logout-form').submit();
                                ">
                                @lang('ui.logout')
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
                    <div class="columns">
                        <div class="column">
                            <p class="subtitle is-3">Social</p>

                            <ul>
                                <li>
                                    <a href="https://github.com/sinisimattia" noopener target="_blank">
                                        <span class="icon">
                                            <i class="fab fa-github"></i>
                                        </span>

                                        <span>GitHub</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/in/mattia-sinisi-6425bb186/" noopener target="_blank">
                                        <span class="icon">
                                            <i class="fab fa-linkedin"></i>
                                        </span>

                                        <span>LinkedIn</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://snisni.it" noopener target="_blank">
                                        <span class="icon">
                                            <i class="fas fa-pen-nib"></i>
                                        </span>

                                        <span>Blog</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="column">
                            <p class="subtitle is-3">About</p>

                            <p>@lang('long.built.with') <strong>Laravel</strong>, <strong>Bulma</strong> @lang('misc.and') <strong>Vue</strong> @lang('misc.by') <a href="https://snisni.it/profile/sinisimattia">Mattia Sinisi</a></p>

                            <br>

                            <p>@lang('long.created.for') <strong>Michael Faraday Institute of Technology</strong>.</p>
                            <p>@lang('long.distributed.under') <strong>{{config('app.licence', '[licence]')}} Licence</strong>.</p>

                            <hr>

                            <a href="/about">@lang('ui.info')</a>
                        </div>
                    </div>

                    <div>
                        <p class="subtitle is-3">@lang('long.add_your_school.title')</p>

                        <p>@lang('long.add_your_school.content')</p>

                        <br>

                        <div class="tag is-info is-light is-medium">
                            <a href="mailto:school@example.com">
                                <span class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </span> 
                                
                                <span>school@example.com</span>
                                
                            </a>
                        </div>

                        <hr>

                        <a href="/about/schools">@lang('ui.info')</a>
                    </div>
                </div>

                <div class="has-text-centered has-text-grey">
                    <p>Copyright 2019/2020 <strong>School++</strong> · A project of I.T.I.s. Michael Faraday Ostia</p>
                </div>
            </div>
        </div>
    </div>
@endsection