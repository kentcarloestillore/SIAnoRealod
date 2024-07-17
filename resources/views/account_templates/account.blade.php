<div class='p-4 bg-white border border-gray-200 rounded-lg shadow-md w-max m-5 flex'>
    <div class="m-4 flex flex-col justify-between">
        <div>
            <h3 class='text-xl font-semibold text-gray-900'>{{$account->student_id->first_name}} {{$account->student_id->last_name}}</h3>
            <div class="mt-2">Section: {{$account->section}}</div>
            <div class="">Remarks: {{$account->remarks}}</div>
        </div>
        <div class="mt-4 grid justify-items-end">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</button>
        </div>
    </div>
</div>
