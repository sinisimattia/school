@extends ('layouts.user')

@section('main')
@if ( !$user->school && !$user->request && $schools )
<div class="section">
    <div class="section">
        <p class="subtitle is-4">
            <span class="tag is-warning">Warning</span>
            <span>You don't belong to any school</span>
        </p>

        <p>Use the form below to request a school admin to make you join their school.</p>
    </div>

    <form action="{{ route('request') }}" method="post" class="section">
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
@elseif ($user->request)
<div class="section">
    <div class="section">
        <p class="subtitle is-4">
            <span class="tag is-success">Success</span>
            <span>Your request was sent</span>
        </p>

        <p>You'll now have to wait for your school to approve it.</p>
    </div>
</div>
@endif

<div class="columns section">
    <div class="column is-one-third-desktop">
        <h2 class="title is-3">Private</h2>
        <p class="subtitle is-5">{{$user->email}}</p>
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