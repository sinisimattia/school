@extends ('layouts.user')

@section('main')
<div>
    @foreach ($courses as $course)
        @component('components.course', [
            'course' => $course,
            'school' => $user->school()
        ])
        @endcomponent
    @endforeach
</div>
@endsection