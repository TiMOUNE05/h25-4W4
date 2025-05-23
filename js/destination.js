(function () {
    const domaine = document.querySelector('base')?.getAttribute('href') || window.location.origin;

    // ========== MÉTHODE SEARCH (template-pays)
    const paysItems = document.querySelectorAll(".menu-pays .pays__item");
    if (paysItems.length > 0 && document.querySelector('.global__pays')) {
        paysItems.forEach(li => {
            li.addEventListener("click", function () {
                const nomPays = li.dataset.pays;
                const apiUrl = `${domaine}/wp-json/wp/v2/posts?search=${encodeURIComponent(nomPays)}`;

                paysItems.forEach(item => item.classList.remove("selected"));
                li.classList.add("selected");

                mon_fetch(apiUrl);
            });
        });

        // Chargement initial : France
        const defaultUrl = `${domaine}/wp-json/wp/v2/posts?search=France`;
        mon_fetch(defaultUrl);
    }

    // ========== MÉTHODE CATÉGORIE (front-page)
    const categorieItems = document.querySelectorAll(".categorie__ul__li");
    if (categorieItems.length > 0) {
        let categoryId = 3; // ID par défaut
        let apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;

        categorieItems.forEach(li => {
            li.addEventListener("click", function () {
                categorieItems.forEach(el => el.classList.remove("active"));
                li.classList.add("active");

                categoryId = li.dataset.id;
                apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
                mon_fetch(apiUrl);
            });
        });

        // Chargement initial :
        mon_fetch(apiUrl);
    }

    function mon_fetch(apiUrl) {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ''; // Vider la liste avant d'ajouter les nouveaux articles

                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3 class="TitreArticleCategorie">${article.title.rendered}</h3>
                        <div class="descriptionArticleCategorie"> ${article.excerpt.rendered}</div>
                        <a class="descriptionArticleCategorie" href="${article.link}">Lire plus</a>
                    `;
                    destinationList.appendChild(articleElement);
                });

                // Ajouter un event listener à chaque élément avec la classe 'TitreArticleCategorie'
                const titreElements = document.getElementsByClassName('TitreArticleCategorie')
                Array.from(titreElements).forEach(titre => {
                    titre.addEventListener('click', function () {
                        const parent = titre.parentElement;
                        const descriptionElements = parent.querySelectorAll('.descriptionArticleCategorie');
                        descriptionElements.forEach(el => {
                            el.classList.toggle('active');
                        });
                    });
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
})();
