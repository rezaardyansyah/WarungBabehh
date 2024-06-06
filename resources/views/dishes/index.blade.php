<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaroengBabeh</title>
    <link rel="icon" type="png" href="../asset/img/babe.png">
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
            padding: 20px;
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
            max-width: calc(100% - 10%);
            margin-left: 20px;
            margin-top: 350px;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .menu-section {
            width: 100%;
            max-width: 1200px;
            margin-top: 70px;
            text-align: center;
        }

        .menu-section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .menu-items-wrapper {
            overflow-x: auto;
            display: flex;
            justify-content: flex-start; 
            -ms-overflow-style: none;  
            scrollbar-width: none;  
            padding-left: 10px; 
        }

        .menu-items-wrapper::-webkit-scrollbar { 
            display: none;  
        }

        .menu-items {
            display: flex;
            gap: 20px;
            padding: 15px 0; 
            flex-wrap: nowrap;
        }

        .menu-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s ease;
            cursor: pointer;
            flex: 0 0 auto; 
            position: relative;
        }

        .menu-item:hover {
            transform: translateY(-10px);
        }

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .menu-item-info {
            padding: 15px;
            text-align: center;
        }

        .menu-item-info h3 {
            font-size: 1.5em;
            margin: 10px 0;
            color: #333;
        }

        .menu-item-info p {
            font-size: 1em;
            color: #666;
            margin-bottom: 15px;
        }

        .price-rating {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }

        .rating {
            font-size: 1em;
            color: #ffb400;
        }

        .rating i {
            margin-right: 5px;
        }

        .description-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            text-align: center;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            color: #aaa;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            height: 100%;
            overflow-y: auto;
        }

        .sidebar nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar nav ul li {
            margin-bottom: 10px;
        }

        .sidebar nav ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar nav ul li a:hover {
            background-color: #575757;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .menu-actions {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .menu-actions button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-button {
            background-color: #007bff;
            color: #fff;
        }

        .delete-button {
            background-color: #dc3545;
            color: #fff;
        }

        .edit-button:hover {
            background-color: #0056b3;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-nav">
        <a href="{{ route('dishes.create')}}"> Tambah Menu </a>
        </div>
    </nav>
    <div class="container">
        <main>
            <nav class="title-container">
                <h1>DAFTAR MENU</h1>
            </nav>
            @foreach($categories as $category)
                <section id="{{ $category->name }}" class="menu-section" role="region" aria-labelledby="{{ $category->name }}-title">
                    <h2 id="{{ $category->name }}-title">{{ $category->name }}</h2>
                    <div class="menu-items-wrapper">
                        <div class="menu-items">
                            @foreach($category->dishes as $dish)
                                <div class="menu-item">
                                    <img src="{{ Storage::url('dishes/'.$dish->image) }}" alt="{{ $dish->name }}">
                                    <div class="menu-item-info">
                                        <h3>{{ $dish->name }}</h3>
                                        <p>{{ $dish->description }}</p>
                                        <div class="price-rating">
                                            <span class="price">Rp {{ number_format($dish->price, 2) }}</span>
                                            <span class="rating"><i class="fas fa-star"></i> {{ $dish->rating }}</span>
                                        </div>
                                    </div>
                                    <div class="menu-actions">
                                        <button class="edit-button" onclick="window.location.href='{{ route('dishes.edit', $dish->id) }}'">Edit</button>
                                        <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-button">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endforeach
        </main>
    </div>
    <script src="{{ asset('js/deskripsi.js') }}"></script>
</body>
</html>
