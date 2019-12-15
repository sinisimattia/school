@extends('layouts.app')

@section('page_title', 'Admin Panel')
@section('content')
<div class="hero is-dark is-small">
    <div class="hero-body container">
        <h1 class="title is-1-desktop">@lang('ui.admin.panel')</h1>
    </div>
</div>

<div class="section columns">
    <div class="column is-one-third-desktop">
        <h3 class="title is-2 has-text-primary">@lang('ui.approve')</h3>
        <hr>
        <!-- EXAMPLE -->
        <div class="card is-rounded">
            <div class="card-body section">
                <p class="title is-3">Corso di programmazione</p>
                <p class="subtitle is-4">Mattia Sinisi</p>
            </div>

            <div class="card-footer">
                <a class="card-footer-item has-text-success">@lang('ui.approve')</a><!--APPROVE-->
                <a class="card-footer-item has-text-warning">@lang('ui.reject')</a><!--REJECT BUT KEEP-->
                <a class="card-footer-item has-text-danger">@lang('ui.delete')</a><!--DELETE-->
            </div>
        </div>
    </div>
</div>
@endsection