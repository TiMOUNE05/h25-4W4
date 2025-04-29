(function(){
    console.log("carrousel.js");

    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let carrouselImage = document.querySelectorAll(".hero__carrousel");
    let hero__animation = document.querySelectorAll(".hero__animation");

    console.log("hero__radio__input.length=", hero__radio__input.length );

    hero__radio__input.forEach(input => {
        input.addEventListener("change", function () {
            const id = input.dataset.idCarrousel;

            updateCarrousel(id);
            parcourirAnimation();
            if (hero__animation[id]) {
                hero__animation[id].style.display = "block";
            }
        });
    });

    function updateCarrousel(id) {
        carrouselImage.forEach(item => item.classList.remove("hero__carrousel--active"));
        hero__radio__input.forEach(input => input.checked = false);

        if (carrouselImage[id]) {
            carrouselImage[id].classList.add("hero__carrousel--active");
            hero__radio__input[id].checked = true;
        }
    }

    function parcourirAnimation() {
        hero__animation.forEach(elm => {
            elm.style.display = "none";
        });
    }

    // Auto défilement toutes les 5 secondes
    let currentIndex = 0;
    setInterval(() => {
        currentIndex = (currentIndex + 1) % carrouselImage.length;
        updateCarrousel(currentIndex);
        parcourirAnimation();
        if (hero__animation[currentIndex]) {
            hero__animation[currentIndex].style.display = "block";
        }
    }, 5000);
})();
