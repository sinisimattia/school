@extends('layouts.app')

@section('content')

@if ($list)
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