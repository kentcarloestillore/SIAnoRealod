<div id="detailbody">
    <div class="flex justify-between">
        <h1 class="text-4xl">Student Details</h1>
    </div>
    <hr>
    <button class="flex flex-wrap gap-2 mt-5" hx-get='api/body' hx-swap="innerHTML" hx-target='#body'><svg class="h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" data-name="4-Arrow Left"/></svg>Back</button>
    <div class='p-4 bg-white border border-gray-200 rounded-lg shadow-md w-max m-5 flex'>
        <img class='rounded-lg mb-4 w-[20vh]' src="https://scontent.fcgy2-4.fna.fbcdn.net/v/t39.30808-6/295420810_1110429986564073_8662685786159203132_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeG_rNAtssLcYoYe_lx5ZswQds7KSlCDZP92zspKUINk_y7wxP-5qepn5b54B6SbYsIwSwnug09rWsJBuvP4oJN0&_nc_ohc=u3mlBJlNrmUQ7kNvgFDP3QD&_nc_ht=scontent.fcgy2-4.fna&oh=00_AYAA4JCq7dKyKk-qdqQdCgTlqypEOraswxaDUvvJKGuuaQ&oe=669DCC94" alt=''>
        <div class="m-4 flex flex-col justify-between">
            <div>
                <h3 class='text-xl font-semibold text-gray-900'>{{$student->first_name}} {{$student->last_name}}</h3>
                <div class="mt-2">ID: {{$student->id}}</div>
                <div class="">Birthdate: {{$student->birth_date}}</div>
                <div class="">Address: {{$student->address}}</div>
            </div>
            <div class="mt-4 grid justify-items-end">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" hx-get='api/student/show/{{$student->id}}' hx-swap="innerHTML" hx-target='#editModal'>EDIT</button>
            </div>
        </div>
    </div>
    <form
        hx-get="/api/student/detail/accounts"
        hx-trigger="load"
        hx-swap="innerHTML"
        hx-target="#accounts_list"
        class="ml-4">
        <input type="text" name="filter" placeholder="Search students..." class="p-2 border border-gray-300 rounded hidden" autocomplete="off" value="{{$student->id}}">
    </form>
</div>

<div id="accounts_list">
</div>

