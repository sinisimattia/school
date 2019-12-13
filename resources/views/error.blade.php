@extends ('layouts.app')

@if ($code)
    @section('page_title', $code)
@endif

@section ('content')
<div class="hero is-fullheight is-danger">
    <div class="hero-body container">
        <div>
            <h1 class="title is-1">
                @lang('errors.error') {{$code ? $code : ""}}
            </h1>

            @if ('message')
            <p class="subtitle is-4">
                {{$message}}
            </p>
            @endif

            <a class="button is-inverted is-outlined is-danger" href="{{ route('home') }}">@lang('ui.return.to.home')</a>
        </div>
    </div>
</div>
@endsection