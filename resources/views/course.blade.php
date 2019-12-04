@extends('layouts.school')

@if ($course)
    @section('page_title', $course->title)
    @section('course')
    <div class="container">
        <div class="hero is-small">
            <div class="hero-body">
                <div class="container">
                    <h2 class="subtitle is-1">
                        {{$course->title}}
                        <span class="tag is-primary is-light">#{{$course->id}}</span>
                    </h2>
                    
                    <div>
                        <h3 class="subtitle is-3">
                            {{$course->author->name}}
                        </h3>

                        <span class="has-text-grey">{{$course->updated_at}}</span>
                    </div>                
                </div>
            </div>

            @if ($course->description)
            <div class="hero-footer">
                <div class="container">
                    <p class="subtitle is-4">{{$course->description}}</p>
                </div>
            </div>
            <hr>
            @endif
        </div>

        @if ($course->content)
        <div class="section">
            <div class="content">
                <p>
                    {{$course->content}}
                </p>
            </div>
        </div>
        @endif
    </div>
    @endsection
@else
    @section('content')
    <div class="hero is-full-widescreen">
        <div class="hero-body container">
            <h1 class="title is-1">@lang('ui.sorry')...</h1>
            <p class="subtitle is-3">This course does not exist...</p>
        </div>
    </div>
    @endsection
@endif