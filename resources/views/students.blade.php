<!DOCTYPE html>
<html>
<head>
    <title>students</title>
</head>
<body>

    <h1>students</h1>

    @foreach ($students as $students)
        <div>
            <h2>{{ $students->name }}</h2>
            <p>{{ $students->description }}</p>
            <p>Category: {{ $students->category }}</p>
            <hr>
        </div>
    @endforeach

</body>
</html>