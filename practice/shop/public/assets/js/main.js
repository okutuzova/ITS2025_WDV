const TITLE = document.querySelector("#productName");
const CATEGORY = document.querySelector("#productBrand");
const PRICE = document.querySelector("#productPrice");
const IMAGE = document.querySelector("#productImage");
const DESCRIPTION = document.querySelector("#productDescription");

const URL = 'https://fakestoreapi.com/products/category/';

function printer(product) {
    fetch(URL + product)
       .then(r => r.json())
       .then(data => {
            const productData = data[0];
            TITLE.value = productData.title ?? '';
            CATEGORY.value = productData.category ?? '';
            PRICE.value = productData.price ?? '';
            IMAGE.value = productData.image ?? '';
            DESCRIPTION.value = productData.description ?? '';
       });
}

TITLE.addEventListener('blur', function () {
    printer(this.value); 
})