@extends('layouts.school')

@section('course')
<div class="container">
    @foreach ($list as $course)
        <div class="card">
            <div class="card-content">
                <div>
                    <p class="title is-3 is-marginless">
                        {{ $course->title }}
                    </p>

                    <p>
                        {{ $course->author->name }}
                    </p>
                </div>

                @if ($course->description)
                <hr>

                <p>
                    {{$course->description}}
                </p>
                @endif
            </div>

            <div class="card-footer">
                <a class="card-footer-item has-text-success">Subscribe</a>
                <a class="card-footer-item" href="/home/{{$school->name}}/{{$course->id}}">Read More</a>
            </div>
        </div>
        <br>
    @endforeach
</div>
@endsection
