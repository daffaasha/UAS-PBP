<?php
    include "koneksi.php";
  	session_start();
    
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['LEVEL']==""){
      header("location:index.php?pesan=gagal");
    }

    $ID_BARANG = $_GET['ID_BARANG'];
    $query = mysqli_query($koneksi, "SELECT * FROM tabel_barang WHERE ID_BARANG = $ID_BARANG");
    $barang = mysqli_fetch_assoc($query);

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
            <h2>Edit Product</h2>
        </div>
        <!-- <div class="flex-content-left"> -->
        <form action="prosesubahProduk.php" method="POST" class="container">
        <input type="hidden" name = "id_barang" value = "<?php echo $barang['ID_BARANG']?>">
            <!-- <div class="container bg-color"> -->
                <div class="add-pr">
                    <div class="left-side">
                        <img src="<?php echo $barang['FOTO']?>" alt="" class="img-change">
                        <!-- <br> -->
                        <input type="text" name="foto" id="image" placeholder="Input Image URL" value = "<?php echo $barang['FOTO'] ?>">
                        <!-- <label for="image">Ubah</label>
                        <input type="file" name="foto" id="image" hidden required> -->
                    </div>
                    <div class="right-side">
                        <div class="inside-right-side">
                        <label for="produk">Nama Produk</label>
                        <input type="text" name="produk" id="produk" value = "<?php echo $barang['NAMA_BARANG']?>" required>
                        </div>
                        <div class="inside-right-side">
                        <label for="harga">Harga</label><input type="text" name="harga" id="harga" value = "<?php echo $barang['HARGA']?>" required>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
            <button type="submit" name="addProduct" class="btn-add">Edit</button>
            
                   

        </form>
        <a href="hapusProduk.php?ID_BARANG=<?php echo $barang['ID_BARANG'];?>" class="delete-btn">
        <button type="submit" name="addProduct" class="red">Hapus Produk</button>
        </a> 
        
    </main>
    <script>
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