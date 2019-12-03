@extends('layouts.app')

@section('page_title', 'Home')
@section('content')
<div class="container">
    <div class="section is-marginless-touch">
        <form class="form" method="GET" action="{{ route('search schools') }}">
            <div class="field section">
                <div class="control is-flex box is-paddingless is-marginless">
                    <input type="text" class="input is-light is-primary is-medium is-radiusless" name="search" placeholder="Search for your school" />
                    <button type="submit" class="button is-medium is-primary is-radiusless">
                        <span class="icon">
                            <i class="fas fa-search"></i>
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@if ($schools)
<div>
    <div class="hero is-small">
        <div class="hero-body">
            <div class="container">
                <h2 class="title is-1">Schools</h2>
            </div>
        </div>
    </div>

    <div class="box is-paddingless is-marginless">
        @foreach ($schools as $school)
        <a class="hero is-primary is-rounded is-small" href="/home/{{$school->name}}">
            <div class="hero-body">
                <div class="container">
                    <p class="title is-4">{{$school->fullname}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endif

@endsection