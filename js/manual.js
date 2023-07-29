window.onload = function (){
    const firstSlide = document.getElementById('first-step');
    const secondSlide = document.getElementById('second-step');
    const thirdSlide = document.getElementById('third-step');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    function checking(){
        if (firstSlide.classList.contains('active')){
            nextBtn.classList.remove('d-none');
            prevBtn.classList.add('d-none');
        }
        if (secondSlide.classList.contains('active')){
            nextBtn.classList.remove('d-none');
            prevBtn.classList.remove('d-none');
        }
        if (thirdSlide.classList.contains('active')){
            nextBtn.classList.add('d-none');
            prevBtn.classList.remove('d-none');
        }
    }

    nextBtn.addEventListener('click', function (){
        setTimeout(checking, 700);
    });
    prevBtn.addEventListener('click', function (){
        setTimeout(checking, 700);
    });

}