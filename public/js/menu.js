function changeQuantity(button, change) {
    const quantityElement = button.parentElement.querySelector('.order-quantity');
    let quantity = parseInt(quantityElement.textContent) + change;
    if (quantity < 0) quantity = 0;
    quantityElement.textContent = quantity;

    updateOrderSummary();
}

function updateOrderSummary() {
    let orderCount = 0;
    let totalPrice = 0;

    document.querySelectorAll('.menu-item').forEach(item => {
        const quantity = parseInt(item.querySelector('.order-quantity').textContent);
        const price = parseFloat(item.querySelector('.price').textContent.replace(/[Rp. ]/g, ''));

        orderCount += quantity;
        totalPrice += quantity * price;
    });

    document.getElementById('order-count').textContent = orderCount;
    document.getElementById('total-price').textContent = 'Rp. ' + totalPrice.toLocaleString();

    document.getElementById('order-details-total-price').textContent = 'Rp. ' + totalPrice.toLocaleString();
}

function showOrderDetails() {
    const orderDetailsContainer = document.getElementById('order-details');
    const orderDetailsList = document.getElementById('order-details-list');

    orderDetailsList.innerHTML = ''; // Clear previous order details

    document.querySelectorAll('.menu-item').forEach(item => {
        const quantity = parseInt(item.querySelector('.order-quantity').textContent);
        if (quantity > 0) {
            const name = item.querySelector('h3').textContent;
            const price = parseFloat(item.querySelector('.price').textContent.replace(/[Rp. ]/g, ''));
            const total = (quantity * price).toLocaleString();

            orderDetailsList.innerHTML += `<p>${quantity} x ${name} - Rp. ${total}</p>`;
        }
    });

    orderDetailsContainer.style.display = 'block';
}

function hideOrderDetails() {
    const orderDetailsContainer = document.getElementById('order-details');
    orderDetailsContainer.style.display = 'none';
}