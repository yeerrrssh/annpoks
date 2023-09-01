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

    const sandwich = document.querySelector('.collapse');
    const btn = document.querySelector('.navbar-toggler');
    let count = 0;

    function showing (){
        sandwich.classList.remove('show');
    }

    btn.addEventListener('click', function(){
        count++;
        if (count % 2 === 0) {
            setTimeout(showing, 400);
        }
    });
}