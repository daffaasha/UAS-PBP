<?php
    include "koneksi.php";

    if (isset($_POST['addProduct'])) {

        $prod_name = $_POST['produk'];
        $prod_img = $_FILES['foto']['name'];
        move_uploaded_file($_FILES["foto"]["tmp_name"], "../aset/" . $_FILES["foto"]["name"]);
        $prod_price = $_POST['harga'];
    

        $postQuery = "INSERT INTO rpos_products (NAMA_BARANG, FOTO, HARGA) VALUES(?,?,?)";
        $postStmt = $koneksi->prepare($postQuery);

        $rc = $postStmt->bind_param('sss', $prod_name, $prod_img, $prod_price);
        $postStmt->execute();
    }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Petstar - add product</title>
    <!-- logo -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap"
        rel="stylesheet"
        />
  </head>
  <body>
    <header>
        <nav>
            <div class="logo">
                <!-- <img src="img/logo.png" alt="" class="logo-kotak" width="25%"> -->
                <img src="img/petstar.png" alt="" width="50%">
            </div>
            <div class="menu">
                <a href="#"><img src="img/history.svg" alt="nama-user" width="75%"></a>
                <a href="#"><img src="img/user-white.svg" alt="setting" width="75%" ></a>
                <!-- <ul class="dropdown">
                    <li><a href="#">Log Out</a></li>
                </ul> -->
        </nav>
    </header>
    <main>
        <div class="container flex-content-middle">
            <img src="img/left-arrow.svg" alt="back" width="24px">
            <h2>Tambah Product</h2>
        </div>
        <!-- <div class="flex-content-left"> -->
        <form method="POST" class="container">
            <!-- <div class="container bg-color"> -->
                <div class="add-pr">
                    <div class="left-side">
                        <img src="img/product-image.png" alt="" class="img-change">
                        <!-- <br> -->
                        <label for="image">Ubah</label>
                        <input type="file" name="foto" id="image" hidden required>
                    </div>
                    <div class="right-side">
                        <div class="inside-right-side">
                        <label for="produk">Nama Produk</label>
                        <input type="text" name="produk" id="produk" required>
                        </div>
                        <div class="inside-right-side">
                        <label for="harga">Harga</label><input type="text" name="harga" id="harga" required>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
            <button type="submit" name="addProduct" class="btn-add">Tambahkan</button>       

        </form>
    </main>
    <script>
        const image = document.getElementById("image");
        const imgChange = document.querySelector(".img-change");
        image.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
            const reader = new FileReader();
            reader.addEventListener("load", function () {
                imgChange.setAttribute("src", this.result);
                imgChange.style.width = "200px";
                imgChange.style.height = "200px";
                imgChange.style.objectFit = "cover";
                imgChange.style.objectPosition = "25% 25%";
            });
            reader.readAsDataURL(file);
            }
        });
    </script>
  </body>
</html>