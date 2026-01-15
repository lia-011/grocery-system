document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.getElementById("search-toggle");
    const box = document.getElementById("search-box");

    toggle.addEventListener("click", () => {
        box.classList.toggle("hidden");
    });
});

document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('nav-search-toggle');
            const panel = document.getElementById('nav-search-panel');
            toggleBtn.addEventListener('click', function() {
                panel.classList.toggle('hidden');
            });
        });
   document.addEventListener('DOMContentLoaded', () => {

  document.querySelectorAll('.product-card').forEach(card => {

    const addBtn = card.querySelector('.add-to-cart');
    const cartPanel = card.querySelector('.cart-panel');

    const minusBtn = cartPanel.querySelector('.qty-control button:first-child');
    const plusBtn  = cartPanel.querySelector('.qty-control button:last-child');
    const qtyText  = cartPanel.querySelector('.qty-control span');

    let qty = 1;

    // mula-mula cart panel sorok
    cartPanel.style.display = 'none';

    // bila tekan Add to Cart
    addBtn.addEventListener('click', () => {
      addBtn.style.display = 'none';
      cartPanel.style.display = 'block';
      qty = 1;
      qtyText.textContent = qty;
    });

    // button +
    plusBtn.addEventListener('click', () => {
      qty++;
      qtyText.textContent = qty;
    });

    // button -
    minusBtn.addEventListener('click', () => {
      if (qty > 1) {
        qty--;
        qtyText.textContent = qty;
      } else {
        // kalau qty jadi 0 → balik ke Add to Cart
        cartPanel.style.display = 'none';
        addBtn.style.display = 'inline-block';
        qty = 1;
        qtyText.textContent = qty;
      }
    });

  });

});
     