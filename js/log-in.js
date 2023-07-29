window.onload = function (){
    const password_btn = document.querySelector('.password-btn');
    const input = document.querySelector('.password-input');

    password_btn.addEventListener('click', function (){
        password_btn.classList.toggle('active');
        if (input.getAttribute('type') === 'password'){
            input.setAttribute('type', 'text');
        } else {
            input.setAttribute('type', 'password');
        }
    });
}