let btnFetchProducts = document.getElementById('js-fetch-products')
let listProducts = document.getElementById('js-ajax-products-list')
let formProductsSearch = document.getElementById('js-products-search')
let spinner = document.getElementById('js-spinner')

formProductsSearch.addEventListener('submit', function (event) {
    event.preventDefault()

    spinner.classList.remove('hidden')

    let data = new FormData

    if (formProductsSearch.title.value.length > 0) {
        data.append('title', formProductsSearch.title.value)
    }

    if (formProductsSearch.price_min.value.length > 0) {
        data.append('price_min', formProductsSearch.price_min.value)
    }

    if (formProductsSearch.price_max.value.length > 0) {
        data.append('price_max', formProductsSearch.price_max.value)
    }

    const urlParams = new URLSearchParams(data.entries());

    fetch('http://localhost:8000/partials/products?' + urlParams)
        .then(response => response.text())
        .then(html => {
            setTimeout(function () {
                listProducts.innerHTML = html
                spinner.classList.add('hidden')
            }, 1000)
        })
})
