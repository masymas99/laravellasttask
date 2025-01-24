<x-html-body title="tracks">
    <div class=" d-flex flex-column align-content-center justify-content-center"></div>
        <h1>Tracks data</h1>
        <a class="btn btn-primary btn-sm" href="{{ route('tracks.create') }}">Create</a>
        <table class="table w-25">
            <thead>

                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>view</th>
                <th>delete</th>
            </thead>
            <tbody></tbody>

            @foreach ($tracks as $track)
            <td>{{$track->id }}</td>
                <td>{{ $track->name }}</td>
                <td>{{ $track->description }}</td>
                <td><a class="btn btn-primary btn-sm" href="{{ route('tracks.show', $track->id) }}">View</a></td>
                <td><form action="{{ route('tracks.destroy', $track->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this track?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form> </td>
              </tr>
        @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center ">
    {{$tracks->links()}}
  </div>
  </div>
</x-html-body>
