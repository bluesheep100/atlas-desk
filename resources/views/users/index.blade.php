<x-app>
    <table class="table table-bordered">
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
                <td>N/A</td>
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
