document.addEventListener('DOMContentLoaded', () => {
    const slides = Array.from(document.querySelectorAll('.slide'));
    const count = document.getElementById('slide-count');
    const hero = document.querySelector('.hero');
    let currentSlide = 0;
    let autoplayTimer;

    function showSlide(index) {
        if (
            index === currentSlide &&
            slides[index].classList.contains('active')
        )
            return;
        slides.forEach((slide, i) =>
            slide.classList.toggle('active', i === index),
        );
        currentSlide = index;
        if (count)
            count.textContent = `${String(index + 1).padStart(2, '0')} / ${String(slides.length).padStart(2, '0')}`;
    }

    function goToNextSlide() {
        showSlide((currentSlide + 1) % slides.length);
    }

    function startAutoplay() {
        window.clearInterval(autoplayTimer);
        autoplayTimer = window.setInterval(goToNextSlide, 7000);
    }

    slides.forEach((slide) => {
        const match = (slide.style.backgroundImage || '').match(
            /url\(["']?(.*?)["']?\)/,
        );
        if (match) {
            const image = new Image();
            image.src = match[1];
        }
    });

    document.getElementById('previous-slide')?.addEventListener('click', () => {
        showSlide((currentSlide - 1 + slides.length) % slides.length);
        startAutoplay();
    });
    document.getElementById('next-slide')?.addEventListener('click', () => {
        goToNextSlide();
        startAutoplay();
    });

    hero?.addEventListener('mouseenter', () =>
        window.clearInterval(autoplayTimer),
    );
    hero?.addEventListener('mouseleave', startAutoplay);
    hero?.addEventListener('focusin', () =>
        window.clearInterval(autoplayTimer),
    );
    hero?.addEventListener('focusout', startAutoplay);

    startAutoplay();

    const themeToggle = document.getElementById('theme-toggle');
    themeToggle?.addEventListener('click', () => {
        const dark = document.body.classList.toggle('dark-mode');
        themeToggle.textContent = dark ? '☀' : '☾';
        themeToggle.setAttribute(
            'aria-label',
            dark ? 'Switch to light mode' : 'Switch to dark mode',
        );
        localStorage.setItem('velvet-crema-theme', dark ? 'dark' : 'light');
    });

    if (localStorage.getItem('velvet-crema-theme') === 'dark') {
        document.body.classList.add('dark-mode');
        if (themeToggle) {
            themeToggle.textContent = '☀';
            themeToggle.setAttribute('aria-label', 'Switch to light mode');
        }
    }
});
