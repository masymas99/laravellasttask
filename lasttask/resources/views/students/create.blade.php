<x-html-body title="Students"></x-html-body>
    <div class="d-flex flex-column align-content-center justify-content-center">
        <h1>create student</h1>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" />

                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" />
                
            </div>
    </div>
</x-html-body>
