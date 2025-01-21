import './bootstrap';
function searchProducts() {
    const input = document.getElementById("search-input");
    const filter = input.value.toLowerCase();
    const productList = document.getElementById("product-list");
    const products = productList.getElementsByClassName("product");

    // Loop through all products and show/hide based on search input
    for (let i = 0; i < products.length; i++) {
        const productName = products[i].getElementsByClassName("product-name")[0];
        const txtValue = productName.textContent || productName.innerText;

        if (txtValue.toLowerCase().indexOf(filter) > -1) {
            products[i].style.display = "";
        } else {
            products[i].style.display = "none";
        }
    }
}
