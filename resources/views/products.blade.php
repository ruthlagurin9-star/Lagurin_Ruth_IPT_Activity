<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

    <h1>Products</h1>

    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Category: {{ $product->category }}</p>
            <hr>
        </div>
    @endforeach

</body>
</html>