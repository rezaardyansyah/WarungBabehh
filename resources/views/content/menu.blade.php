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
    margin: 0;
    background-color: #87CEFA;
    background-image: url('../asset/img/cover2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow-x: hidden; 
}

.container {
    max-width: 100%;
    height: 100vh; 
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-direction: column;
    overflow-y: auto; 
    -ms-overflow-style: none;  
    scrollbar-width: none;  
}

.container::-webkit-scrollbar {
    display: none; 
}

main {
    flex: 1;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
}

h1 {
    text-align: center;
    color: #333;
}

.crud-btn {
    background-color: #f1a501;
    color: #fff;
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.crud-btn:hover {
    background-color: #d98a00;
}

.menu-section {
    flex: 1;
    margin-top: 20px; 
    display: flex;
    flex-direction: column;
}

.menu-section h2 {
    text-align: center;
    color: #333;
}

.menu-items {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    padding: 15px 0; 
    flex: 1; 
}

.menu-item {
    background-color: #f9f9f9;
    border-radius: 10px;
    margin: 10px; 
    padding: 20px; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    flex: 0 0 20%; 
    max-width: 20%; 
    scroll-snap-align: start;
    min-height: 300px; 
    display: flex;
    flex-direction: column;
    justify-content: space-between; 
    align-items: center;
}

.menu-item img {
    border-radius: 50%;
    width: 100px; 
    height: 100px; 
    object-fit: cover;
    margin-bottom: 10px; 
}

.menu-item h3 {
    font-size: 1.2em; 
    margin: 8px 0;
    color: #333;
}

.menu-item p {
    font-size: 0.9em;
    color: #666;
}

.rating {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 8px;
}

.rating-number {
    font-size: 1.2em; 
    color: #ff0;
    margin-right: 5px;
}

.price-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 8px;
}

.price {
    font-size: 1.2em; 
    font-weight: bold;
    margin-right: 8px;
    color: #333;
}

.order-btn {
    background-color: #ff6347;
    border: none;
    border-radius: 5px;
    color: #fff;
    padding: 8px 12px; 
    cursor: pointer;
    font-size: 1.2em;
    margin: 0 5px; 
}

.order-quantity {
    font-size: 1.2rem;
    color: black;
    font-weight: bold;
    margin: 0 10px; 
}

.order-btn:hover {
    background-color: #ff4500;
}

.checkout-section {
background-color: #652424;
color: #fff;
border-radius: 15px;
padding: 20px;
display: flex;
justify-content: space-between;
align-items: center;
width: 100%;
max-width: 1170px;
margin: 20px auto;
}

.checkout-details {
    display: flex;
    flex-direction: column;
}

.order-summary,
.total-price {
    margin-bottom: 10px;
}

.order-label,
.price-label {
    font-weight: bold;
}

.order-value,
.price-value {
    font-size: 1.2em;
}

.checkout-btn {
background-color: #f1a501;
color: #fff;
border: none;
border-radius: 25px;
padding: 10px 20px;
font-size: 1em;
cursor: pointer;
transition: background-color 0.3s ease;
}

.checkout-btn:hover {
background-color: #d98a00;
}

.order-details-container {
    display: none; 
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    z-index: 1000;
    overflow-y: auto;
    height: 100vh;
    padding: 20px;
    box-sizing: border-box;
}

.order-details-content {
    background-color: #652424;
    border-radius: 10px;
    padding: 20px;
    max-width: 600px;
    margin: 50px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.order-details-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #fff;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.order-details-header h2 {
    margin: 0;
}

.close-btn {
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 1.5em;
    cursor: pointer;
}
.menu-items::-webkit-scrollbar {
    display: none;
}

.menu-items {
    -ms-overflow-style: none; 
    scrollbar-width: none; 
}
    </style>
</head>
</html>
@extends('layout/navbar')

@section('container')
<body>
    <div class="container">
        <main>
            <h1>Pilih Pesananmu Disini</h1>
            @foreach($categories as $category)
                <section id="{{ $category->name }}" class="menu-section" role="region" aria-labelledby="{{ $category->name }}-title">
                    <h2 id="{{ $category->name }}-title">{{ $category->name }}</h2>
                    <div class="menu-items">
                        @foreach($category->dishes as $dish)
                            <div class="menu-item">
                                <img src="{{ Storage::url('dishes/'.$dish->image) }}" alt="{{ $dish->name }}">
                                <h3>{{ $dish->name }}</h3>
                                <p>{{ $dish->description }}</p>
                                <div class="rating">
                                    <span class="rating-number"><i class="fas fa-star"></i>{{ $dish->rating }}</span>
                                </div>
                                <div class="price-container">
                                    <span class="price">Rp {{ number_format($dish->price, 0, ',', '.') }} </span>
                                </div>
                                <div class="order-container">
                                    <button class="order-btn" onclick="changeQuantity(this, -1)">-</button>
                                    <span class="order-quantity">0</span>
                                    <button class="order-btn" onclick="changeQuantity(this, 1)">+</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endforeach
            <footer>
            <div class="checkout-section">
                <div class="checkout-details">
                    <div class="order-summary">
                        <span class="order-label">Jumlah Pesanan: </span>
                        <span id="order-count" class="order-value">0</span>
                    </div>
                    <div class="total-price">
                        <span class="price-label">Total harga: </span>
                        <span id="total-price" class="price-value">Rp. 0</span>
                    </div>
                </div>
                <button class="checkout-btn" onclick="showOrderDetails()">Detail Pesanan</button>
            </div> 
            </footer>
        </main>
    </div>
    <div class="order-details-container" id="order-details">
        <div class="order-details-content">
            <div class="order-details-header">
                <h2>Detail Pesanan</h2>
                <button class="close-btn" onclick="hideOrderDetails()">&times;</button>
            </div>
            <div id="order-details-list"></div>
            <div class="total-price">
                <span class="price-label">Total harga: </span>
                <span id="order-details-total-price" class="price-value">Rp. 0</span>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>
@endsection
