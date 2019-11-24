@extends('layouts.app')

@section('content')
<div class="hero is-primary is-small">
    <div class="hero-body">
        <h1 class="title is-1 has-text-centered">{{$school->fullname}}</h1>
    </div>
</div>

<main class="section">
    @yield('course')
</main>
@endsection