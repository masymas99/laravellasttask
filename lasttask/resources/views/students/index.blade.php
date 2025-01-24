
 <x-html-body title="Students">
    <div class=" d-flex flex-column align-content-center justify-content-center">
        <h1>Students data</h1>
        <table class="table w-25">
          <thead>

              <th>id</th>
              <th>name</th>
              <th>email</th>
              <th>view</th>
              <th>delete</th>
          </thead>
          <tbody></tbody>

          @foreach ($students as $student)
          <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->name }}</td>
              <td>{{ $student->email }}</td>
              <td><a class="btn btn-primary btn-sm" href="{{ route('students.show', $student->id) }}">View</a></td>
              <td><a class="btn btn-danger btn-sm" href="{{ route('students.destroy', ($student->id)) }}">Delete</a></td>
          </tr>
      @endforeach
  </tbody>
</table>

<div class="d-flex justify-content-center ">
  {{$students->links()}}
</div>
</div>
</x-html-body>


