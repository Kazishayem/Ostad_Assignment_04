<!DOCTYPE html>
<html>
<head>
    <title>View Contact</title>
</head>
<body>
    <h2>View Contact</h2>

    <p>Name: {{ $contact->name }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Phone: {{ $contact->phone }}</p>
    <p>Address: {{ $contact->address }}</p>
    <p>Created At: {{ $contact->created_at }}</p>

    <a href="{{ route('contacts.index') }}">Back</a>
</body>
</html>
