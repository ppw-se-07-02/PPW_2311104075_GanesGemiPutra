// Fungsi untuk transisi saat refresh (fade-in)
function applyRefreshTransition() {
    const elements = document.querySelectorAll('.fade-in-refresh');
    elements.forEach(element => {
        element.classList.add('fade-in-refresh');
    });
}

// Fungsi untuk transisi saat scroll (kanan kiri)
function applyScrollTransition() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);

    // Observasi elemen dengan kelas slide-in-left dan slide-in-right
    const leftElements = document.querySelectorAll('.slide-in-left');
    const rightElements = document.querySelectorAll('.slide-in-right');

    leftElements.forEach(el => observer.observe(el));
    rightElements.forEach(el => observer.observe(el));
}

// Jalankan transisi saat halaman dimuat
window.addEventListener('load', function() {
    applyRefreshTransition();
    applyScrollTransition();
});

// Fungsi tambahan untuk transisi dinamis jika diperlukan
function triggerTransition(element, transitionClass) {
    if (element) {
        element.classList.add(transitionClass);
    }
}
