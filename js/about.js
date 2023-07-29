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
}