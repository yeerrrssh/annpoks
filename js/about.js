window.onload = function (){
    const goDownButton = document.getElementById('goDownButton');
    const photoForScroll = document.getElementById('gkl-photo');
    const goToTopButton = document.getElementById('go-back-button');
    
    goDownButton.addEventListener('click', function (){
        photoForScroll.scrollIntoView();
    });
    goToTopButton.addEventListener('click', function (){
        window.scrollTo(0, 0);
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