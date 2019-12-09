<div class="card">
    <div class="card-content">
        <div>
            <p class="title is-3 is-marginless">
                {{ $course->title }}
            </p>

            <p>
                {{ $course->user->name }}
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
        @if (Auth::user() && Auth::user()->id == $course->user->id)
            @if (!$course->subscribed)
            <a class="card-footer-item has-text-success" href="/subscribe/{{$course->id}}">@lang('ui.subscribe')</a>
            @else
            <a class="card-footer-item has-text-danger" href="/unsubscribe/{{$course->id}}">@lang('ui.unsubscribe')</a>
            @endif
        @endif
        <a class="card-footer-item" href="/home/{{$course->user->school->name}}/{{$course->id}}">@lang('ui.info')</a>
    </div>
</div>