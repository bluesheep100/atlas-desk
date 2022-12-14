<x-app :back="route('projects.index')">
    <div class="row flex-row-reverse">
        <div class="col-auto">
            <a href="{{ route('users.create') }}" class="btn btn-primary">New User</a>
        </div>
    </div>
    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Admin?</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->isAdmin() ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('users.edit', compact('user')) }}" class="btn btn-info"><i class="fa-solid fa-edit"></i></a>
                    <form action="{{ route('users.destroy', compact('user')) }}" method="post" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app>
