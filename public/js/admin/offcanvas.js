const offcanvas = document.querySelector('.offcanvas')
const btnClose = document.querySelector('.btn-close');

if (window.innerWidth < 992) {
    offcanvas.classList.remove('show')
    btnClose.style.display = 'inline-block';
}

if (window.innerWidth > 992) {
    btnClose.style.display = 'none';
}
    
window.addEventListener('resize', function () {
    if (window.innerWidth < 992) {
        offcanvas.classList.remove('show')
        btnClose.style.display = 'inline-block';
    }
    
    if (window.innerWidth > 992) {
        offcanvas.classList.add('show') 
        btnClose.style.display = 'none';
    }
})
