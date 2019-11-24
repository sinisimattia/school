@extends('layouts.app')

@section('content')
<div class="container section">
    <h1 class="title is-1">Publish</h1>

    <form action="/publish/course" method="POST">
        @csrf
        
        <div class="field">
            <div class="control">
                <input name="title" class="input is-large" type="text" placeholder="Title *" required/>
                
            </div>
        </div>

        <div class="field">
            <div class="control">
                <textarea name="desc" class="textarea is-small" type="text" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <textarea name="content" class="textarea" type="text" placeholder="Content"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control is-pulled-right">
                <button type="submit" class="button is-medium is-rounded is-success">
                    <span class="icon is-medium">
                        <i class="fas fa-paper-plane"></i>
                    </span>
                                        
                    <span>Submit</span>
                </button>
            </div>
        </div>
    </form>
</div>
@endsection