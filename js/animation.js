document.addEventListener('DOMContentLoaded', () => {
    anime({
        targets: '#heroText h1',
        translateY: [-100, 0],
        scale: [3.8, 1],
        opacity: [0, 1],
        duration: 2000,
        easing: 'easeOutExpo'
    });

    anime({
        targets: '#heroText p',
        translateY: [-50, 0],
        opacity: [0, 1],
        duration: 2000,
        delay: 500,
        easing: 'easeOutExpo'
    });

    anime({
        targets: '#heroText button',
        scale: [2.8, 1],
        opacity: [0, 1],
        duration: 2000,
        delay: 1000,
        easing: 'easeOutExpo'
    });

    anime({
        targets: '#media',
        scale: [8, 1],
        opacity: [0, 1],
        duration: 3000,
        delay: 1000,
        easing: 'easeOutExpo'
    });

    anime({
        targets: '#location',
        scale: [4, 1],
        opacity: [0, 1],
        duration: 2500,
        delay: 1200,
        easing: 'easeOutExpo'
    });

});