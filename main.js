document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('resize', () => {
        if (window.innerWidth < 600) {
            document.body.style.fontSize = '14px';
        } else {
            document.body.style.fontSize = '16px';
        }
    });
});
