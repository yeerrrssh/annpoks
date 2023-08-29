window.onload = function (){
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