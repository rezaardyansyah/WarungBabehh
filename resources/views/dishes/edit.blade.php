<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dish</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .navbar {
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-logo img {
            height: 40px;
            margin-right: 20px;
        }

        .navbar-nav {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .navbar-nav a, .navbar-nav button {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .navbar-nav a:hover, .navbar-nav button:hover {
            background-color: #575757;
        }

        .container {
            max-width: calc(100% - 250px);
            margin-left: 250px;
            margin-top: 70px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group textarea {
            height: 100px;
        }

        .form-group button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <nav class="navbar">
        <a href="home.html" class="navbar-logo"><img src="../assets/img/logo babe.png" alt="Logo"></a>
        <div class="navbar-nav">
            <button onclick="window.location.href='{{ route('dishes.index') }}'">Kembali ke Menu</button>
        </div>
    </nav>
    <div class="container">
        <div class="form-container">
            <h2>Edit Menu</h2>
            <form action="{{ route('dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" value="{{ $dish->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" required>{{ $dish->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" id="price" name="price" value="{{ $dish->price }}" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="number" id="rating" name="rating" value="{{ $dish->rating }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" id="image" name="image">
                    @if ($dish->image)
                        <img src="{{ Storage::url('dishes/'.$dish->image) }}" alt="{{ $dish->name }}" style="width: 100px; margin-top: 10px;">
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
