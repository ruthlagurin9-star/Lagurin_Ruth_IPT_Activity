<!DOCTYPE html>
<html>
<head>
    <title>enrollments</title>
</head>
<body>

    <h1>enrollments</h1>

    @foreach ($enrollments as $enrollments)
        <div>
            <h2>{{ $enrollments->name }}</h2>
            <p>{{ $enrollments->description }}</p>
            <p>Category: {{ $enrollments->category }}</p>
            <hr>
        </div>
    @endforeach

</body>
</html>