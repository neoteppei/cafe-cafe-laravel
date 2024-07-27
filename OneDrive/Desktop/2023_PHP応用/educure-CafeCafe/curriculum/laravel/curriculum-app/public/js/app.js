document.addEventListener('DOMContentLoaded', function() {
    const signInLink = document.getElementById('signInLink');
    const loginOverlay = document.getElementById('login');

    signInLink.addEventListener('click', function(event) {
        event.preventDefault();
        loginOverlay.style.display = 'block';
    });

    loginOverlay.addEventListener('click', function(event) {
        if (event.target === loginOverlay) {
            loginOverlay.style.display = 'none';
        }
    });
});