(function(){
    console.log("carrousel.js");

    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let carrouselImage = document.querySelectorAll(".hero__carrousel");
    console.log("hero__radio__input.length=" , hero__radio__input.length );

    hero__radio__input.forEach(elm => {
        console.log("elm.id_carrousel=", elm.dataset.idCarrousel)
    });

    hero__radio__input.forEach(input => {
        input.addEventListener("click", function () {
            const id = input.dataset.idCarrousel;
            updateCarrousel(id);
        });
    });

    // Fonction pour mettre à jour le carrousel
    function updateCarrousel(id) {
        carrouselImage.forEach(item => item.classList.remove("hero__carrousel--active"));
        hero__radio__input.forEach(input => input.checked = false);
        
        if (carrouselImage[id]) {
            carrouselImage[id].classList.add("hero__carrousel--active");
            hero__radio__input[id].checked = true;
        }
    }

    // Auto défilement toutes les 5 secondes
    let currentIndex = 0;
    setInterval(() => {
        currentIndex = (currentIndex + 1) % carrouselImage.length;
        updateCarrousel(currentIndex);
    }, 5000); // 5 secondes
})();
