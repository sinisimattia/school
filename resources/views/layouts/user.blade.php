@extends ('layouts.app')

@section('page_title', 'My Subscriptions')
@section('content')
<div>
    @if ($user)
    <div class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-1">{{$user->name}}</h1>
                <h3 class="title is-4">
                    <span>@</span>
                    <span>{{$user->username}}</span>
                </h3>
            </div>
        </div>
    </div>
    @endif

    <main class="container">
        @yield('main')
    </main>
</div>
@endsection