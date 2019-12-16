@extends ('layouts.user')

@section('main')
@if ( !$user->membership && $schools )
<div class="section">
    <div class="section">
        <p class="subtitle is-4">
            <span class="tag is-warning">Warning</span>
            <span>You don't belong to any school... yet!</span>
        </p>

        <p>Use the form below to request a school admin to make you join their school.</p>

        <p>If you already sent a request you'll have to wait util it is accepted.</p>
    </div>

    <form action="{{ route('request membership') }}" method="post" class="section">
        @csrf
        <div class="select is-large is-rounded">
            <select name="school_id">
                <option disabled selected>@lang('ui.your.school')</option>
                @foreach ($schools as $school)
                <option value="{{$school->id}}">{{$school->fullname}}</option>
                @endforeach                
            </select>
        </div>
        <button class="button is-large is-primary is-rounded" type="submit">@lang('ui.submit')</button>
    </form>
</div>
@endif

<div class="columns section">
    <div class="column is-one-third-desktop">
        <h2 class="title is-3">Private</h2>
        <p class="subtitle is-5">{{$user->email}}</p>
        @if ($user->membership)
            <div>
            <h2 class="title is-3">
                <span>Membership</span>
                <span class="icon has-text-primary">
                    <i class="fas fa-users"></i>
                </span>
            </h2>
            <p class="subtitle is-5">{{$user->membership->school->fullname}}</p>
        </div>
        @endif
        
    </div>

    @if ($user->courses)
    <div class="column">
        <h2 class="title is-3">Public</h2>
        <div>
            @foreach($user->courses as $course)
                @component('components.course', ['course' => $course])                
                @endcomponent
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection