<div id="deleteModal{{$student->id}}" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3 p-4">
        <div class="justify-end">
            <div class="">
                <h1>Delete Student</h1>
                <div class="">Are you sure you want to delete this retarded person? <br>
                    {{$student->first_name}} - {{$student->last_name}}
                </div>
            </div>
            <button type="button" id="cancelButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2" hx-get='api/student/close' hx-target='#editModal' hx-swap="innerHTML">Cancel</button>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" hx-delete='/api/student/{{ $student->id }}' hx-target='#student-{{ $student->id }}' hx-swap="delete swap:1.1s"
                onclick="document.getElementById('deleteModal{{$student->id}}').classList.add('hidden')">Delete</button>
        </div>
    </div>
