const password = document.getElementById('password');
const icon = document.getElementById('icon-pass');

function showHide() {

    if (password.type === 'password') {

        password.setAttribute('type', 'text');
        icon.src = '../assets/img/show.png';

    } else {

        password.setAttribute('type', 'password');
        icon.src = '../assets/img/hide.png';

    }

}