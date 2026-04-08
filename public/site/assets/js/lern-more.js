/* $(document).ready(function(){

    $('#load-more').click(function(){
        fetch('lernMore')
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })

    });
}); */
$(document).ready(function () {
    let currentPage = 1;
    const perPage = 2; // 2 notícias por carregamento

    $("#load-more").click(function () {
        currentPage++;

        fetch(`lernMore`)
            .then((response) => response.json())
            .then((data) => {
                // Verifica se há dados
                if (data && data.length > 0) {
                    console.log(data);
                    const qtd = data.length;
                    // Adiciona as novas notícias ao container
                    data.forEach(function(data) {
                    const newsHtml = `
                            <div class="news-item">
                                <h4 class="h4 xl:h3 mt-4 mb-2 xl:mb-3">${
                                    data.title
                                }</h4>
                                <p>${data.subtitle || ""}</p>
                                <figure class="my-3 sm:my-4">
                                    <figure class="featured-image m-0 ratio ratio-3x2 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ url('site/assets/images/common/img-fallback.png') }}"
                                            data-src="http://127.0.0.1:8000/img/news/${
                                                data.image
                                            }"
                                            alt="${
                                                data.title
                                            }" data-uc-img="loading: lazy">
                                        <a href="http://127.0.0.1:8000/img/news/${
                                            data.image
                                        }" class="position-cover"
                                            data-caption="${data.title}"></a>
                                    </figure>
                                    <figcaption class="fs-7 mt-1 text-center text-gray-400 dark:text-gray-200">
                                        ${data.title}
                                    </figcaption>
                                </figure>
                                <p>
                                    ${data.description}
                                </p>
                            </div>
                        `;
                    
                    // Adiciona a nova notícia antes do botão "Ver Mais"
                    $("#load-more").before(newsHtml);
                })
                    // Verifica se há mais páginas para carregar
                   /*  if (currentPage >= data.last_page) {
                        $("#load-more").hide(); // Esconde o botão se não houver mais páginas
                    } */
                } else {
                    console.log('chegou')
                    $("#load-more").hide(); // Esconde o botão se não houver dados
                }
            });
        /* .catch(error => {
                console.error('Erro ao carregar mais notícias:', error);
            }); */
    });
});
