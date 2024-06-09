document.addEventListener('DOMContentLoaded', init);

const BASE_URI = 'http://localhost:8000/kahuna/api/';
let products = [];

function init() {
    loadProducts();
    bindAddProduct();
}

function loadProducts() {
    fetch(`${BASE_URI}product`, {
        mode: 'cors',
        method: 'GET'
    })
    .then(res => res.json())
    .then(res => {
        products = res.data;
        displayProducts();
    })
    .catch(err => console.error(err));
}

function displayProducts() {
    let html = '';
    if (products.length === 0) {
        html = '<p>You have no pruducts yet!</p>';
    } else {
        html = '<table><thead>';
        html += '<tr><th>Serial</th><th>Name</th><th>Warranty Length</th></tr>';
        html += '</thead><tbody>';
        for (const product of products) {
            html += '<tr>';
            html += `<td>${product.serial}</td>`;
            html += `<td>${product.name}</td>`;
            html += `<td>${product.warrantyLength}</td>`;
            html += '</tr>';
        }
        html += '</tbody></table>';
    }
    document.getElementById('productList').innerHTML = html;
}

function bindAddProduct() {
    document.getElementById('productForm').addEventListener('submit', (evt) => {
        evt.preventDefault();
        productData = new FormData(document.getElementById('productForm'));
        fetch(`${BASE_URI}product`, {
            mode: 'cors',
            method: 'POST',
            body: productData
        })
        .then(loadProducts)
        .catch(err => console.error(err));
    });
}