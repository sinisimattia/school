@extends ('layouts.user')

@section('main')
<div class="columns section">
    <div class="column is-one-third-desktop">
        <h2 class="title is-3">Private</h2>
        <p class="subtitle is-5">{{$user->email}}</p>
    </div>

    <div class="column">
        <h2 class="title is-3">Public</h2>
        <div>
            @foreach($user->courses as $course)
                @component('components.course', ['course' => $course])                
                @endcomponent
            @endforeach
        </div>
    </div>
</div>
@endsection