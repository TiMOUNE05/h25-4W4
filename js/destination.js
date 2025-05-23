(function () {
    console.log("destination.js chargé");

    const domaine = document.querySelector('base')?.getAttribute('href') || window.location.origin;
    const destinationList = document.querySelector('.destination__list');

    if (!destinationList) return;

    // ========== MÉTHODE CATEGORIES (page d'accueil ou autres avec .categorie__ul__li)
    const categorieItems = document.querySelectorAll(".categorie__ul__li");
    if (categorieItems.length > 0 && !document.body.classList.contains('page-pays')) {
        let categoryId = 3; // ID de catégorie par défaut
        let apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        mon_fetch(apiUrl);

        categorieItems.forEach(li => {
            li.addEventListener("click", function () {
                categorieItems.forEach(el => el.classList.remove("active"));
                li.classList.add("active");
                categoryId = li.dataset.id;
                apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
                mon_fetch(apiUrl);
            });
        });
    }

    // ========== MÉTHODE SEARCH (page-pays avec .menu-pays .pays__item)
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

        // Chargement initial pour "France"
        const initialSearchUrl = `${domaine}/wp-json/wp/v2/posts?search=France`;
        mon_fetch(initialSearchUrl);
    }

    // ========== Fonction commune pour afficher les articles + accordéon
    function mon_fetch(apiUrl) {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                destinationList.innerHTML = '';

                data.forEach(article => {
                    if (article.categories && article.categories.includes(5)) return; // Exclure "populaire"

                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3 class="TitreArticleCategorie">${article.title.rendered}</h3>
                        <div class="descriptionArticleCategorie">${article.excerpt.rendered}</div>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList.appendChild(articleElement);
                });

                // Accordéon animé
                const titres = document.getElementsByClassName('TitreArticleCategorie');
                Array.from(titres).forEach(titre => {
                    titre.addEventListener('click', function () {
                        const desc = titre.nextElementSibling;
                        if (desc.style.maxHeight) {
                            desc.style.maxHeight = null;
                            desc.classList.remove('open');
                        } else {
                            Array.from(document.getElementsByClassName('descriptionArticleCategorie')).forEach(el => {
                                el.style.maxHeight = null;
                                el.classList.remove('open');
                            });
                            desc.style.maxHeight = desc.scrollHeight + "px";
                            desc.classList.add('open');
                        }
                    });
                });
            })
            .catch(error => console.error('Erreur API:', error));
    }
})();
