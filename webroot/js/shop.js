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