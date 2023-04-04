const button = document.querySelector('.navbar-toggler');
const navbar = document.querySelector('.navbar');
const footer = document.querySelector('footer');
const id = window.location.href.split('/')

if (window.location.href == 'http://localhost/myportfolio/public/projects/add') {
    button.addEventListener('click', function () {
    const addProject = document.querySelector('.addproject');

    navbar.classList.toggle('full-navbar');
    addProject.classList.toggle('full-addproject');
    footer.classList.toggle('full-footer');
}) 
} else if (window.location.href == `http://localhost/myportfolio/public/projects/edit/${id[7]}`) {
    button.addEventListener('click', function () {
    const editProject = document.querySelector('.editproject');

    navbar.classList.toggle('full-navbar');
    editProject.classList.toggle('full-editproject');
    footer.classList.toggle('full-footer');
    }) 
} else if (window.location.href == `http://localhost/myportfolio/public/admin/info`) {
    button.addEventListener('click', function () {
    const editProject = document.querySelector('.information');

    navbar.classList.toggle('full-navbar');
    editProject.classList.toggle('full-information');
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


