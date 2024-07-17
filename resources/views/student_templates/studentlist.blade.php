<table class="min-w-full bg-white shadow-md rounded-lg mt-3">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">ID</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Last Name</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600 w-[18vh]">First Name</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Birth Date</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Address</th>
            <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600 text-center">Actions</th>
        </tr>
    </thead>
    <tbody id="studentsTableBody">
        @foreach ($students as $student)
            @include('student_templates.student', ['student' => $student])
        @endforeach
    </tbody>
</table>
