(function () {
    console.log("carrousel.js");

    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let carrouselImage = document.querySelectorAll(".hero__carrousel");
    let hero__animation = document.querySelectorAll(".hero__animation");

    let currentIndex = 0;

    function updateCarrousel(id) {
        carrouselImage.forEach(item => item.classList.remove("hero__carrousel--active"));
        hero__radio__input.forEach(input => input.checked = false);

        if (carrouselImage[id]) {
            carrouselImage[id].classList.add("hero__carrousel--active");
            hero__radio__input[id].checked = true;
        }
    }

    function parcourirAnimation() {
        hero__animation.forEach((elm, index) => {
            elm.classList.remove("hero__animation--active");
            if (index === currentIndex) {
                elm.classList.add("hero__animation--active");
            }
        });
    }

    hero__radio__input.forEach(input => {
        input.addEventListener("change", function () {
            const id = parseInt(input.dataset.idCarrousel);
            currentIndex = id;
            updateCarrousel(id);
            parcourirAnimation();
        });
    });

    setInterval(() => {
        currentIndex = (currentIndex + 1) % carrouselImage.length;
        updateCarrousel(currentIndex);
        parcourirAnimation();
    }, 5000);
})();
