<x-html-body title="create track">

    <div class="d-flex flex-column align-content-center justify-content-center"></div>
        <h1>create track</h1>

        <form action="{{ route('tracks.store') }}" method="POST"></form>
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" />

                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" />

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</x-html-body>
