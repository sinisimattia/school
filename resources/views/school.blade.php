@extends('layouts.school')

@section('course')
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
                <a class="card-footer-item" href="/home/{{$school->name}}/{{$course->id}}">Read More</a>
            </div>
        </div>
        <br>
    @endforeach
</div>
@endsection
