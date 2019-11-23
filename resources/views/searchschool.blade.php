@extends('layouts.app');

@section('content')
<div class="container section">
    <!--<form class="form" method="GET" action="">
        <div class="field columns is-1 is-vcentered">
            <div class="column is-flex">
                <p class="subtitle is-3 has-text-right-desktop is-marginless">Search for</p>

                <div class="control is-flex">
                    <input type="text" class="input is-light is-medium" name="school" placeholder="your school"/>
                    <button type="submit" class="button is-medium is-primary">Q</button>
                </div>
            </div>
        </div>
    </form>-->

    <form class="form" method="GET" action="">
        <div class="field section">
            <div class="control is-flex">
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
@endsection