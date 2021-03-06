@extends('layouts.app')

@if($search)
    @section('page_title', 'Results for '.$search)
@endif

@section('content')

@if ($list)
    <div class="hero is-info is-small">
        <div class="hero-body container">
            <p>Results for "<b>{{$search}}</b>"</p>
        </div>
    </div>

    @foreach($list as $school)
        <div class="hero">
            <a class="hero-body" href="/home/{{$school->name}}">
                <div class="container has-text-centered">
                    <h3 class="title is-3">{{$school->fullname}}</h3>
                </div>
            </a>
        </div>
    @endforeach
@else
404
@endif


@endsection