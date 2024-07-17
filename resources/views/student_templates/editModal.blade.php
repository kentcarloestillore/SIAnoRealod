<div id="editStudentModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3">
        <div class="px-4 py-3 border-b flex justify-between items-center">
            <h2 class="text-xl font-semibold">Edit Student</h2>
            <button id="closeModalButton" class="text-gray-500 hover:text-gray-700 text-2xl" hx-get='api/student/close' hx-target='#editModal' hx-swap="innerHTML">&times;</button>
        </div>
        <div class="p-4">
            <form id="editProductForm"
                action="api/student/{{$student->id}}"
                hx-put="api/student/{{$student->id}}"
                hx-target="#body"
                hx-swap="innerHTML"
                method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="firstname" class="block text-sm font-medium text-gray-700">Firstname</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" id="firstname" name="first_name" value="{{$student->first_name}}">
                    <div id="firstname_error" class="text-danger"></div>
                </div>
                <div class="mb-4">
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Lastname</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" id="lastname" name="last_name" value="{{$student->last_name}}">
                    <div id="lastname_error" class="text-danger"></div>
                </div>
                <div class="mb-4">
                    <label for="birthday" class="block text-sm font-medium text-gray-700">Birthdate</label>
                    <input type="date" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" id="birthday" name="birth_date" value="{{$student->birth_date}}">
                    <div id="birthday_error" class="text-danger"></div>
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" step="0.01" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" id="address" name="address" value="{{$student->address}}">
                    <div id="address_error" class="text-danger"></div>
                </div>
                <div id="StatusMessage" class=""></div>
                <div class="flex justify-end" id="addbutton">
                    <button type="button" id="cancelButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2" hx-get='api/student/close' hx-target='#editModal' hx-swap="innerHTML">Cancel</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("htmx:configRequest", (event) => {
        let token = document.querySelector('meta[name="csrf-token"]').content;
        event.detail.headers['X-CSRF-TOKEN'] = token;
    });
</script>
