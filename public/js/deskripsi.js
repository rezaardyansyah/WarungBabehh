function showDescription(name, description, price, rating, image) {
    document.getElementById('description-title').textContent = name;
    document.getElementById('description-text').textContent = description;
    document.getElementById('description-price').textContent = 'Harga: Rp ' + price.toFixed(2);
    document.getElementById('description-rating').textContent = 'Rating: ' + rating + ' bintang';
    document.getElementById('description-image').src = image;
    document.getElementById('description-modal').style.display = 'block';
}

function closeDescription() {
    document.getElementById('description-modal').style.display = 'none';
}
