<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakmie Ayam Jamur Han</title>
    <link rel="stylesheet" href="./">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f8f9fa;
                }

                header {
                    background-color: #343a40;
                    padding: 20px;
                    color: white;
                }

                nav ul {
                    list-style-type: none;
                    padding: 0;
                    margin: 0;
                    display: flex;
                    justify-content: space-around;
                }

                nav a {
                    color: white;
                    text-decoration: none;
                }

                input[type="text"] {
                    padding: 5px;
                    margin-left: 10px;
                }

                main {
                    padding: 20px;
                }

                .product {
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    margin: 10px 0;
                    padding: 10px;
                    background-color: #fff;
                }

                .product img {
                    max-width: 100%;
                    border-radius: 5px;
                }

                footer {
                    text-align: center;
                    padding: 10px;
                    background-color: #343a40;
                    color: white;
                    position: relative;
                    bottom: 0;
                    width: 100%;
                }
            </style>
        @endif
</head>
<body>
    <header>
        <!-- <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <input type="text" id="search-input" placeholder="Search..." onkeyup="searchProducts()">
            </ul>
        </nav> -->
        <!-- <section class="website-profile">
            <img src="../frontend/Gambar/gambar_logo_website.jpg" alt="Website Logo Photo">
        </section> -->
        <div class="header-container">
            <h1>Bakmie Ayam Jamur Han</h1>
            <div class="search-container">
                <form>
                    <input type="text" id="search-input" placeholder="Search..." onkeyup="searchProducts()">
                </form>
            </div>
        </div>
        <!-- <div class="notification">
            <a href="../frontend/html/notifications.html">🔔</a>
        </div> -->
    </header>

    <main id="home">
        <section>
            <h1>Our Products</h1>
            <div id="product-list">
                <div class="product">
                    <img src="image1.jpg" alt="Bakmie Ayam Jamur">
                    <h2 class="product-name">Bakmie Ayam Jamur</h2>
                    <p>Price: Rp. 30,000</p>
                    <p>Description: Delicious chicken noodle with mushrooms.</p>
                </div>
                <div class="product">
                    <img src="image2.jpg" alt="Bakmie Spesial">
                    <h2 class="product-name">Bakmie Spesial</h2>
                    <p>Price: Rp. 35,000</p>
                    <p>Description: Special chicken noodle with extra toppings.</p>
                </div>
                <div class="product">
                    <img src="image3.jpg" alt="Bakmie Ayam Bakar">
                    <h2 class="product-name">Bakmie Ayam Bakar</h2>
                    <p>Price: Rp. 40,000</p>
                    <p>Description: Grilled chicken noodle, a perfect delight!</p>
                </div>
                <!-- Add more product sections as needed -->
            </div>
            <!-- Add more product sections as needed -->
        </section>
    </main>

    <footer>
        <p>© 2025 Bakmie Ayam Jamur Han. All rights reserved.</p>
    </footer>

    <script>
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
                    products[i].style.display = ""; // Show product
                } else {
                    products[i].style.display = "none"; // Hide product
                }
            }
        }
    </script>
</body>
</html>
