@extends('layouts.app')

@section('content')
<div class="hero is-primary is-small">
    <div class="hero-body">
        <h1 class="title is-1 has-text-centered">{{$school->fullname}}</h1>
    </div>
</div>
<br>

<div class="container">
    @foreach ($list as $course)
        <div class="card">
            <div class="card-header">
                <div>
                    <p class="title is-3 is-marginless">
                        {{ $course->title }}
                    </p>

                    <p>
                        {{ $course->author->name }}
                    </p>
                </div>
            </div>

            @if ($course->description)
            <div class="card-content">
                <p>
                    {{$course->description}}
                </p>
            </div>
            @endif

            <div class="card-footer">
                <a class="card-footer-item">Subscribe</a>
                <a class="card-footer-item">Read More</a>
            </div>
        </div>
        <br>
    @endforeach
</div>
@endsection
