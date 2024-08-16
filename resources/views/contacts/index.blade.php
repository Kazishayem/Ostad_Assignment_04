<!DOCTYPE html>
<html>
<head>
    <title>Contact Management</title>
</head>
<body>
    <h2>Contact Management</h2>

    <form method="GET" action="{{ route('contacts.index') }}">
        <input type="text" name="search" placeholder="Search by name or email">
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('contacts.create') }}">Create New Contact</a>

    <table>
        <tr>
            <th><a href="{{ route('contacts.index', ['sort' => 'name']) }}">Name</a></th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th><a href="{{ route('contacts.index', ['sort' => 'created_at']) }}">Created At</a></th>
            <th>Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->address }}</td>
            <td>{{ $contact->created_at }}</td>
            <td>
                <a href="{{ route('contacts.show', $contact->id) }}">Show</a>
                <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
