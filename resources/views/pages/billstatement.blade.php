@extends('templates.base')

@section('content')
    <div class="flex justify-between">
        <h1 class="text-4xl">Students</h1>
        <div class="flex gap-5">
            <form
            hx-get="/api/products"
            hx-trigger="keyup"
            hx-swap="innerHTML"
            hx-target="#product_list"
            class="ml-4">
            <input type="text" name="filter" placeholder="Search students..." class="p-2 border border-gray-300 rounded" autocomplete="off">
        </form>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="openModalButton" >Add</button>
        </div>
    </div>
    <hr>
    <div id="student_list" 
        class="flex flex-wrap gap-3 mt-5"
        hx-get="api/students"
        hx-trigger="load delay:500ms"
        hx-swap="innerHTML">
    </div>
    <div id="editModal"class="flex flex-wrap gap-3 mt-5"></div>
    <div id="addModal"class="flex flex-wrap gap-3 mt-5"></div>
@endsection