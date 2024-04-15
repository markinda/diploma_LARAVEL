window.onload = function(){

    this.swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },

        loop: true,

        navigation: {
            nextEl: '.button__next',
            prevEl: '.button__prev',
        },
    });
}
