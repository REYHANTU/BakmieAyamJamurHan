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

                #home {
                    padding: 20px;
                }

                .foodTitle {
                    margin-bottom: -70px;
                    margin-top: 20px;
                }

                #product-list {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 20px;
                }
                

                .product-section {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center; /* Pusatkan elemen di dalam section */
                    gap: 20px; /* Tambahkan jarak antar elemen */
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
                    width: 320px; /* Lebar konsisten untuk semua produk */
                    height: 450px; /* Tinggi konsisten untuk semua produk */
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: flex-start;
                    border: 1px solid #ddd; /* Opsional: Tambahkan border */
                    border-radius: 10px; /* Opsional: Tambahkan sudut membulat */
                    margin: 55px; /* Tambahkan spasi antar produk */
                    padding: 10px; /* Tambahkan padding dalam kontainer */
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Opsional: Tambahkan bayangan */
                    background-color: #f9f9f9; /* Opsional: Tambahkan latar belakang */
                }

                .product img {
                    width: 300px; /* Ukuran gambar konsisten */
                    height: 200px; /* Tinggi gambar tetap */
                    object-fit: cover; /* Sesuaikan gambar dengan kotak tanpa mengubah proporsi */
                    border-radius: 5px; /* Opsional: Tambahkan sudut membulat pada gambar */
                }

                .product h2 {
                    font-size: 18px;
                    margin: 10px 0 5px; /* Spasi antara teks dan elemen lainnya */
                    text-align: center;
                }

                .product p {
                    font-size: 14px;
                    text-align: center;
                    margin: 5px 0; /* Spasi antar paragraf */
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
        <h1>Our Products</h1>
        <div id="product-list">
            <!-- Section 1 -->
            <div class="foodTitle">
                <h2>Food</h2>
            </div>
            <div class="product-section">
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
                    <p>Description: Bacang sticky rice with soy sauce minced pork filling</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/de5839b2-b48e-4ea5-ac7c-50b7b11131ae_Go-Biz_20230127_154457.jpeg?auto=format" 
                    alt="Mie/Mie Lebar/Kwetiaw/Bihun Ayam Jamur Jumbo" style="width: 300px; height: auto;">
                    <h2 class="product-name">Mie/Mie Lebar/Kwetiaw/Bihun Ayam Jamur Jumbo</h2>
                    <p>Price: Rp. 45,000</p>
                    <p>Description: Noodles/wide noodles/kwetiaw/mushroom chicken vermicelli with 1.5 portions</p>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="foodTitle">
                <h2>Drink</h2>
            </div>
            <div class="product-section">
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/5218152b-ee11-48c1-b616-a9a73be6dbcf_Go-Biz_20240422_133810.jpeg?auto=format" 
                    alt="Teh Gelas (Botol)" style="width: 300px; height: auto;">
                    <h2 class="product-name">Teh Gelas (Botol)</h2>
                    <p>Price: Rp. 11,000</p>
                    <p>Description: Tea cups 350ml</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/5f149b7c-b75b-4114-bf3b-dd270ef982dc_Go-Biz_20230412_195735.jpeg?auto=format" 
                    alt="Ichi Ocha Teh Jasmine/Green Tea Botol 350ml" style="width: 300px; height: auto;">
                    <h2 class="product-name">Ichi Ocha Teh Jasmine/Green Tea Botol 350ml</h2>
                    <p>Price: Rp. 12,000</p>
                    <p>Description: Ichi ocha contents 350ml</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/ce67c5c4-d9ea-44d9-82a1-d41a0d577902_Go-Biz_20220213_071204.jpeg?auto=format" 
                    alt="Teh Pucuk Botol 350ml" style="width: 300px; height: auto;">
                    <h2 class="product-name">Teh Pucuk Botol 350ml</h2>
                    <p>Price: Rp. 12,000</p>
                    <p>Description: Tea Shoot Bottle 350ml</p>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="foodTitle">
                <h2>Toppings</h2>
            </div>
            <div class="product-section">
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/4f5e23fd-03fa-427e-a829-d3e20f107aaf_Go-Biz_20220219_184325.jpeg?auto=format" 
                    alt="Bakso Cumi" style="width: 300px; height: auto;">
                    <h2 class="product-name">Bakso Cumi</h2>
                    <p>Price: Rp. 7,000</p>
                    <p>Description: Squid meatballs per pcs</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/7328237d-e263-4640-a476-03f87e860061_Go-Biz_20220409_182338.jpeg?auto=format" 
                    alt="Bakso Sapi" style="width: 300px; height: auto;">
                    <h2 class="product-name">Bakso Sapi</h2>
                    <p>Price: Rp. 7,500</p>
                    <p>Description: Beef meatballs per pcs</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/3968aef8-b6c2-4b09-8f62-ad5dfd9ff115_Go-Biz_20220409_182358.jpeg?auto=format" 
                    alt="Bakso Ikan" style="width: 300px; height: auto;">
                    <h2 class="product-name">Bakso Ikan</h2>
                    <p>Price: Rp. 7,000</p>
                    <p>Description: Fish meatballs per pcs</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/0cd1a35d-9a69-4e4b-9314-410b53443253_Go-Biz_20221106_105837.jpeg?auto=format" 
                    alt="Krupuk Bangka Isi 2" style="width: 300px; height: auto;">
                    <h2 class="product-name">Krupuk Bangka Isi 2</h2>
                    <p>Price: Rp. 12,500</p>
                    <p>Description: Bangka crackers contains 2 pcs</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/8db1b793-4dc8-45d4-bcbb-f82e90600568_Go-Biz_20221011_155633.jpeg?auto=format" 
                    alt="Bakso Kepiting" style="width: 300px; height: auto;">
                    <h2 class="product-name">Bakso Kepiting</h2>
                    <p>Price: Rp. 7,500</p>
                    <p>Description: Crab meatballs per pcs</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/de24f230-ebed-405d-9025-47e0f4888310_Go-Biz_20221011_155740.jpeg?auto=format" 
                    alt="Bakso Udang" style="width: 300px; height: auto;">
                    <h2 class="product-name">Bakso Udang</h2>
                    <p>Price: Rp. 6,500</p>
                    <p>Description: Shrimp meatballs per pcs</p>
                </div>
                <div class="product">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/d63350cb-112a-488a-b5f4-77df54924adf_Go-Biz_20240114_093208.jpeg?auto=format" 
                    alt="Pangsit Rebus" style="width: 300px; height: auto;">
                    <h2 class="product-name">Pangsit Rebus</h2>
                    <p>Price: Rp. 27,000</p>
                    <p>Description: Dumplings stuffed with chicken and shrimp (5pcs)</p>
                </div>
            </div>
        </div>
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
