function addToCart(product) {
    let cart = JSON.parse(localStorage.getItem("cart") || "[]");

    const exists = cart.find(item => item.id === product.id);
    if (!exists) {
        cart.push(product);
        localStorage.setItem("cart", JSON.stringify(cart));
        alert(`${product.name} added to cart!`);
    } else {
        alert(`${product.name} is already in your cart.`);
    }
}
  
function loadCart() {
    const cart = JSON.parse(localStorage.getItem("cart") || "[]");
    const cartContainer = document.getElementById("cart-container");
    const totalPriceEl = document.getElementById("total-price");

    if (!cartContainer || !totalPriceEl) return;

    let total = 0;
    cart.forEach(item => {
        const card = document.createElement("div");
        card.className = "product-card";
        card.innerHTML = `
        <img src="${item.img}" alt="${item.name}" />
        <h4>${item.name}</h4>
        <p>$${item.price.toFixed(2)}</p>
        <button onclick="removeItem(${item.id})">Remove</button>
        `;
        total += item.price;
        cartContainer.appendChild(card);
    });

    totalPriceEl.textContent = `Total: $${total.toFixed(2)}`;
}
  
function removeItem(id) {
    let cart = JSON.parse(localStorage.getItem("cart") || "[]");
    cart = cart.filter(item => item.id !== id);
    localStorage.setItem("cart", JSON.stringify(cart));
    location.reload();
}
  
  // ---------- ANIMATIONS ----------
window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.fade-in').forEach(el => {
        el.classList.add('visible');
    });

    loadCart();
});
  