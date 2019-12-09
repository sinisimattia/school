@extends ('layouts.app')

@section('page_title', 'My Subscriptions')
@section('content')
<div class="container">
    @if ($user)
    <div class="hero">
        <div class="hero-body">
            <h1 class="title is-1">{{$user->name}}</h1>
            <h3 class="title is-4">
                <span class="icon has-text-primary">
                    <i class="fas fa-at"></i>
                </span>
                <span>{{$user->username}}</span>
            </h3>
        </div>
    </div>
    @endif

    <main>
        @yield('main')
    </main>
</div>
@endsection