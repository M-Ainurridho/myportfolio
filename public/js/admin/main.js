const button = document.querySelector('.navbar-toggler');
const navbar = document.querySelector('.navbar');
const footer = document.querySelector('footer');


if (window.location.href == 'http://localhost/myportfolio/public/admin/projects/add') {
    button.addEventListener('click', function () {
    const addProject = document.querySelector('.addproject');

    navbar.classList.toggle('full-navbar');
    addProject.classList.toggle('full-addproject');
    footer.classList.toggle('full-footer');
    }) 
} else {
    button.addEventListener('click', function () {
    const myProjects = document.querySelector('.myprojects');
    
    navbar.classList.toggle('full-navbar')
    myProjects.classList.toggle('full-myprojects');
    footer.classList.toggle('full-footer');
    })
}


