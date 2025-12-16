(() => {
    // Smooth scroll for internal anchors
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', event => {
            const targetId = link.getAttribute('href');
            const target = targetId && document.querySelector(targetId);
            if (target) {
                event.preventDefault();
                window.scrollTo({
                    top: target.offsetTop - 70,
                    behavior: 'smooth'
                });
            }
        });
    });
})();
