document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    const aboutBanner = document.querySelector('.about-banner');
    const aboutContent = document.querySelector('.about-content');
    const aboutMedia = document.querySelector('.about-media video');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    aboutBanner.addEventListener('mouseover', () => {
        aboutBanner.classList.add('hovered');
    });

    aboutBanner.addEventListener('mouseout', () => {
        aboutBanner.classList.remove('hovered');
    });

    aboutContent.addEventListener('mouseover', () => {
        aboutContent.classList.add('highlight');
    });

    aboutContent.addEventListener('mouseout', () => {
        aboutContent.classList.remove('highlight');
    });

    aboutMedia.addEventListener('play', () => {
        aboutMedia.classList.add('playing');
    });

    aboutMedia.addEventListener('pause', () => {
        aboutMedia.classList.remove('playing');
    });
});
