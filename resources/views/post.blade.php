@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Publish</h1>

    <form action="/publish/course" method="POST">
        @csrf
        
        title: <input name="title" type="text" required/>
        description: <input name="desc" type="text"/>
        content: <textarea name="content"></textarea>
        <button type="submit">Invia</button>
    </form>
</div>
@endsection