@extends('templates.base')

@section('content')
    <div id="body"
        hx-get="api/body"
        hx-trigger="load delay:500ms"
        hx-swap="innerHTML">
    </div>
    <div id="editModal"class="flex flex-wrap gap-3 mt-5"></div>
    <div id="addModal"class="flex flex-wrap gap-3 mt-5"></div>
@endsection
