
 <x-html-body title="Students">
    <div class=" d-flex flex-column align-content-center justify-content-center">
        <h1>Students data</h1>
        <a class="btn btn-primary btn-sm" href="{{ route('students.create') }}">Create</a>

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
              <td><form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form> </td>
            </tr>
      @endforeach
  </tbody>
</table>

<div class="d-flex justify-content-center ">
  {{$students->links()}}
</div>
</div>
</x-html-body>


