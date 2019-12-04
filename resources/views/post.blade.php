@extends('layouts.app')

@section('page_title', 'Post')
@section('content')
<div class="container section">
    <h1 class="title is-1">@lang('ui.publish')</h1>

    <form action="{{route('publish course')}}" method="POST">
        @csrf
        
        <div class="field">
            <div class="control">
                <input name="title" class="input is-large" type="text" placeholder="@lang('ui.title') *" required/>
                
            </div>
        </div>

        <div class="field">
            <div class="control">
                <textarea name="desc" class="textarea is-small" type="text" placeholder="@lang('ui.description')"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <textarea name="content" class="textarea" type="text" placeholder="@lang('ui.content')"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-medium is-rounded is-success">
                    <span class="icon is-medium">
                        <i class="fas fa-paper-plane"></i>
                    </span>
                                        
                    <span>@lang('ui.submit')</span>
                </button>
            </div>
        </div>
    </form>
</div>
@endsection