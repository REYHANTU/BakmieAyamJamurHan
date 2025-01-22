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
                    font-family: Serif;
                }

                header {
                    background-color: #343a40;
                    padding: 20px;
                    color: white;
                }

                .header-container {
                    display: flex;
                    justify-content: space-between; /* Space between title and search */
                    align-items: center; /* Center items vertically */
                }

                h1 {
                    margin: 0; /* Remove default margin */
                }

                section > h1 {
                    font-size: 30px;
                }

                section > h2 {
                    text-align: center;
                    color: #FFA07A;
                }

                .search-container {
                    margin-right: 20px;
                    margin-top: 10px;
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
                    padding: 7px;
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
            <h2>Food</h2>
            <div id="product-list">
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/af3224e5-270b-42a5-bb7d-5de6fc3b4d0d_Go-Biz_20220218_194116.jpeg?auto=format" 
                    alt="Mie Ayam Jamur" style="width: 300px; height: auto;">
                    <h2 class="product-name">Mie Ayam Jamur</h2>
                    <p>Price: Rp. 30,000</p>
                    <p>Description: Noodles with mushroom chicken meat</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/d51625e1-a37e-4497-ab39-2467590875ae_Go-Biz_20220219_184730.jpeg?auto=format" 
                    alt="Mie Lebar Ayam Jamur" style="width: 300px; height: auto;">
                    <h2 class="product-name">Mie Lebar Ayam Jamur</h2>
                    <p>Price: Rp. 30,000</p>
                    <p>Description: Wide noodles with mushroom chicken meat</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/67984c4a-f0ef-4f4b-b6bc-283b11d1da81_Go-Biz_20220219_183157.jpeg?auto=format" 
                    alt="Bihun Ayam Jamur" style="width: 300px; height: auto;">
                    <h2 class="product-name">Bihun Ayam Jamur</h2>
                    <p>Price: Rp. 30,000</p>
                    <p>Description: Vermicelli with mushroom chicken</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/37d8a106-c319-4d0c-bf77-656b09900e83_Go-Biz_20220219_182043.jpeg?auto=format" 
                    alt="Kwetiaw Ayam Jamur" style="width: 300px; height: auto;">
                    <h2 class="product-name">Kwetiaw Ayam Jamur</h2>
                    <p>Price: Rp. 30,000</p>
                    <p>Description: Kwetiaw with mushroom chicken meat</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/ffa300bd-c615-4495-a57f-18b2180c3edb_Go-Biz_20220218_195548.jpeg?auto=format" 
                    alt="Bakmie/Bihun/Kwetiaw Ayam Jamur Special" style="width: 300px; height: auto;">
                    <h2 class="product-name">Bakmie/Bihun/Kwetiaw Ayam Jamur Special</h2>
                    <p>Price: Rp. 42,000</p>
                    <p>Description: Noodles/vermicelli/kwetiaw with mushroom chicken and 2 squid meatballs</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/be886d96-fb61-4072-bc39-528ee8f152b0_Go-Biz_20220811_163029.jpeg?auto=format" 
                    alt="Paket Mie/Mie Lebar/Kwetiaw/Bihun Ayam Jamur + Bakso Cumi" style="width: 300px; height: auto;">
                    <h2 class="product-name">Paket Mie/Mie Lebar/Kwetiaw/Bihun Ayam Jamur + Bakso Cumi</h2>
                    <p>Price: Rp. 52,000</p>
                    <p>Description: Noodles/wide noodles/kwetiaw/chicken mushroom vermicelli with 2 squid meatballs and 1 drink</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/8fcae986-7729-4415-ba7c-cdfe079273e5_Go-Biz_20221020_153428.jpeg?auto=format" 
                    alt="Bacang Ketan Babi" style="width: 300px; height: auto;">
                    <h2 class="product-name">Bacang Ketan Babi</h2>
                    <p>Price: Rp. 25,000</p>
                    <p>Description: Bacang sticky rice with minced pork filling with soy sauce</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/de5839b2-b48e-4ea5-ac7c-50b7b11131ae_Go-Biz_20230127_154457.jpeg?auto=format" 
                    alt="Mie/Mie Lebar/Kwetiaw/Bihun Ayam Jamur Jumbo" style="width: 300px; height: auto;">
                    <h2 class="product-name">Mie/Mie Lebar/Kwetiaw/Bihun Ayam Jamur Jumbo</h2>
                    <p>Price: Rp. 45,000</p>
                    <p>Description: Noodles/wide noodles/kwetiaw/mushroom chicken vermicelli with 1.5 servings</p>
                </div>
                <!-- Add more product sections as needed -->
            </div>
            <h2>Drink</h2>
            <div id="product-list">
                
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
