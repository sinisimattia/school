@extends('layouts.school')

@section('course')
<div class="container">
    @foreach ($list as $course)
        @component('components.course', [
            'course' => $course,
            'school' => $school
        ])
        @endcomponent
        <br>
    @endforeach
</div>
@endsection
