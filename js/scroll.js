document.addEventListener("DOMContentLoaded", function() {
    var imgInfoLogo = document.querySelector('.img-info-logo');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            imgInfoLogo.classList.add('scrolled');
        } else {
            imgInfoLogo.classList.remove('scrolled');
        }
    });
});
