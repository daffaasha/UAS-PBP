<?php
    include "koneksi.php";
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['LEVEL']==""){
        header("location:index.php?pesan=gagal");
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
            <a href="home.php" rel="noopener noreferrer"><img src="img/petstar.png" alt="" width="50%"></a>
            </div>
            <div class="menu">
                <a href="history.php"><img src="img/history.svg" alt="nama-user" width="75%"></a>
                <a href="logout.php"><img src="img/logout-icon.svg" alt="setting" width="30%" ></a>
        </nav>
    </header>
    <main>
        <div class="container flex-content-middle">
        <a href="home.php" rel="noopener noreferrer">
        <img src="img/left-arrow.svg" alt="back" width="24px">
      </a>
            <h2>Tambah Product</h2>
        </div>
        <!-- <div class="flex-content-left"> -->
        <form action="prosestambahProduct.php" method="POST" class="container">
            <!-- <div class="container bg-color"> -->
                <div class="add-pr">
                    <div class="left-side">
                        <img src="img/product-image.png" alt="" class="img-change">
                        <!-- <br> -->
                        <input type="url" name="foto" id="image" required>
                        <!-- <label for="image">Ubah</label>
                        <input type="file" name="foto" id="image" hidden required> -->
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
        // const image = document.getElementById("image");
        // const imgChange = document.querySelector(".img-change");
        // image.addEventListener("change", function () {
        //     const file = this.files[0];
        //     if (file) {
        //     const reader = new FileReader();
        //     reader.addEventListener("load", function () {
        //         imgChange.setAttribute("src", this.result);
        //         imgChange.style.width = "200px";
        //         imgChange.style.height = "200px";
        //         imgChange.style.objectFit = "cover";
        //         imgChange.style.objectPosition = "25% 25%";
        //     });
        //     reader.readAsDataURL(file);
        //     }
        // });
        
        // change image using url
        const image = document.getElementById("image");
        const imgChange = document.querySelector(".img-change");
        image.addEventListener("keyup", function (event) {
            console.log("enter pressed")
            imgChange.setAttribute("src", this.value);
            imgChange.style.width = "200px";
            imgChange.style.height = "200px";
            imgChange.style.objectFit = "cover";
            imgChange.style.objectPosition = "25% 25%";
        });
    </script>
  </body>
</html>