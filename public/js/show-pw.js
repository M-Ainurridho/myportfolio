const show = document.querySelector('.show-pw');

show.addEventListener('click', function () {
    const password = document.getElementById('password');

    if (this.classList.contains('fa-eye')) {
        password.setAttribute('type', 'text');
        this.classList.replace('fa-eye', 'fa-eye-slash');
    } else if (this.classList.contains('fa-eye-slash')) {
        password.setAttribute('type', 'password');
        this.classList.replace('fa-eye-slash', 'fa-eye');
    }
})