(function(){
    console.log("carrousel.js");
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let carrouselImage = document.querySelectorAll(".hero__carrousel");
    console.log("hero__radio__input.length=" , hero__radio__input.length );

    hero__radio__input.forEach(elm => {
    console.log("elm.id_carrousel=", elm.dataset.id_carrousel)
    })
    hero__radio__input.forEach(input => {
        input.addEventListener("click", function () {
            const id = input.dataset.idCarrousel;
            carrouselImage.forEach(item => item.classList.remove("hero__carrousel--active"));
            if (carrouselImage[id]) {
                carrouselImage[id].classList.add("hero__carrousel--active");
            }
        });
    });
})();
