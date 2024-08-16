<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h2>Edit Contact</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', ['id' => $contact->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $contact->name }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $contact->email }}" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ $contact->phone }}">
        <br>
        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ $contact->address }}">
        <br>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('contacts.index') }}">Back</a>
</body>
</html>
