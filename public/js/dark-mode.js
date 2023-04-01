function light(dir) {
    const light = document.querySelector('.fa-toggle-off');

    document.body.dataset.bsTheme = 'dark'
    light.classList.replace('fa-toggle-off', 'fa-toggle-on')
    location.href = `http://localhost/myportfolio/public/${dir}/dark`;
}

function dark(dir) {
    const dark = document.querySelector('.fa-toggle-on');

    document.body.dataset.bsTheme = 'light'
    dark.classList.replace('fa-toggle-on', 'fa-toggle-off')
    location.href = `http://localhost/myportfolio/public/${dir}/light`;
}


