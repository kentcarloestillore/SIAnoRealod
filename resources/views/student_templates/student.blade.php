<tr id="student-{{ $student->id }}" class="bg-gray-100 border-b border-gray-200 fade-me-out">
    <td class="px-4 py-2">{{ $student->id }}</td>
    <td class="px-4 py-2">{{ $student->last_name }}</td>
    <td class="px-4 py-2">{{ $student->first_name }}</td>
    <td class="px-4 py-2">{{ $student->birth_date }}</td>
    <td class="px-4 py-2">{{ $student->address }}</td>
    <td class="px-4 py-2 flex space-x-2">
        <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm" hx-get='api/student/detail/{{$student->id}}' hx-swap="innerHTML" hx-target='#body'>View</button>
        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm" hx-get='api/student/del/{{$student->id}}' hx-swap="innerHTML" hx-target='#editModal'>Delete</button>
    </td>
</tr>
