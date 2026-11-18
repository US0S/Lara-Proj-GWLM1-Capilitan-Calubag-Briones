document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('read-toggle');
    const story = document.getElementById('extra-story');

    button?.addEventListener('click', () => {
        const isOpen = story.classList.toggle('open');
        button.setAttribute('aria-expanded', String(isOpen));
        button.innerHTML = isOpen ? 'Read less <span>-</span>' : 'Read more <span>+</span>';
    });
});
