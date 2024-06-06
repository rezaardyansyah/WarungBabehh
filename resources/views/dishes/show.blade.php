<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Detail Menu</h1>
        </header>

        <div class="menu-detail">
            <img src="{{ Storage::url('dishes/'.$dish->image) }}" alt="{{ $dish->name }}">
            <h2>{{ $dish->name }}</h2>
            <p>{{ $dish->description }}</p>
            <p>Harga: Rp {{ number_format($dish->price, 2) }}</p>
            <p>Rating: {{ $dish->rating }}</p>
            <p>Kategori: {{ $dish->category->name }}</p>
        </div>
    </div>
</body>
</html>
