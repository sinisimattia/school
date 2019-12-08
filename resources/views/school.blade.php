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
                @if (Auth::user() && Auth::user()->school->id == $school->id)
                    @if (!$course->subscribed)
                    <a class="card-footer-item has-text-success" href="/subscribe/{{$course->id}}">@lang('ui.subscribe')</a>
                    @else
                    <a class="card-footer-item has-text-danger" href="/unsubscribe/{{$course->id}}">@lang('ui.unsubscribe')</a>
                    @endif
                @endif
                <a class="card-footer-item" href="/home/{{$school->name}}/{{$course->id}}">@lang('ui.info')</a>
            </div>
        </div>
        <br>
    @endforeach
</div>
@endsection
