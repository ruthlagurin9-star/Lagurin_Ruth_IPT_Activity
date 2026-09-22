<!DOCTYPE html>
<html>
<head>
    <title>courses</title>
</head>
<body>

    <h1>courses</h1>

    @foreach ($courses as $courses)
        <div>
            <h2>{{ $courses->name }}</h2>
            <p>{{ $courses->description }}</p>
            <p>Category: {{ $courses->category }}</p>
            <hr>
        </div>
    @endforeach

</body>
</html>