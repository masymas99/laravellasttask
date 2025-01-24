<x-html-body title="Student">
    <div class=" d-flex flex-column align-content-center justify-content-center"></div>
        <h1>Student data</h1>
        <table class="table ">

            <thead>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>students</th>
                <th>courses</th>
            </thead>
            <tbody>
                <tr></tr>
                    <td>{{ $track->id }}</td>
                    <td>{{ $track->name }}</td>
                    <td>{{ $track->description }}</td>
                    <td>@foreach ($students as $student)
                        <li>{{ $student->name }}</li>
                    @endforeach
                </td>
                    <td>@foreach ($courses as $course)
                        <li>{{ $course->name }}</li>
                    @endforeach
                </td>
                </tr>
            </tbody>
        </table>
</x-html-body>
