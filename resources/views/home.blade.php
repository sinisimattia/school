@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section">
        <form class="form" method="GET" action="{{ route('search') }}">
            <div class="field section">
                <div class="control is-flex box is-paddingless is-marginless">
                    <input type="text" class="input is-light is-primary is-medium is-radiusless" name="school" placeholder="Search for your school" />
                    <button type="submit" class="button is-medium is-primary is-radiusless">
                        <span class="icon">
                            <i class="fas fa-search"></i>
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="section">
        <h2 class="title is-2">News</h2>
    </div>
</div>
@endsection