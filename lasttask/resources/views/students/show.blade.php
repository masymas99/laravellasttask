<x-html-body title="Student">
    <div class=" d-flex flex-column align-content-center justify-content-center"></div>
        <h1>Student data</h1>
        <table class="table w-25">

            <thead>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>track</th>
                <th>course</th>
            </thead>
            <tbody>
                <tr></tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $track->name }}</td>
                    <td>@foreach ($courses as $course)
                        <li>{{ $course->name }}</li>
                    @endforeach
                </td>
                </tr>
            </tbody>
        </table>
</x-html-body>
