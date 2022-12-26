
<?php

include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM `tabel_barang`");
$produk = mysqli_fetch_all($query, MYSQLI_ASSOC);  

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="css/kucing.css">
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <a href="home.php" target="_blank" rel="noopener noreferrer"><img src="img/petstar.png" alt="" width="50%"></a>
      </div>
      <div class="menu">
        <a href="#"><img src="img/history.svg" alt="nama-user" width="75%"></a>
        <a href="profile.php"><img src="img/user-white.svg" alt="setting" width="75%"></a>
    </nav>
  </header>

  <main>
    <div class="product-side">
      <div class="search-container">
        <img src="img/lup.svg" alt="find" class="find-logo">
        <input type="text" class="search-input">
      </div>
      <div class="title-container">
        <p class="product-title">Product</p>
        <input type="button" value="+ Add" class="btn-tambah">
      </div>
      <div class="product-container">
      <?php foreach($produk as $p) : ?>
            <div class="product-card">
              <img src="aset/<?php echo $p['FOTO']; ?>" alt="product" class="img-product">
              <div class="product-info">
                <p class="product-name"><?php echo $p['NAMA_BARANG']; ?></p>
                <p class="product-price"><?php echo $p['HARGA']; ?></p>
              </div>
              <input type="button" value="Add Product" class="product-add">
            </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="price-side">
      <div class="cart-cont">
        <div class="cart-col-header">
          <div class="cart-name">
            <h3 class="name-header">Product Name</h3>
          </div>
          <div class="cart-quantity">
            <h3 class="quantity-header">Quantity</h3>
          </div>
          <div class="cart-price">
            <h3 class="price-header">Price</h3>
          </div>
        </div>

        <div class="cart-col">
          <!-- <div class="cart-name">
            <p class="name-item">Royal Canin Enak</p>
          </div>
          <div class="cart-quantity">
            <div class="quantity-input">
              <input type="number" value=1>
            </div>
            <button class="delete-item"><img src="img/bin.svg" alt="delete"></button>
          </div>
          <div class="cart-price">
            <p class="price-item">Rp. 60.000</p>
          </div> -->
        </div>
      </div>
      <div class="total-price">
        <p class="total-text">Total</p>
        <p class="price-final">Rp. Sekian</p>
      </div>

      <form action="">
        <div class="process-cont">
          <div class="paying-method">
            <label for="gopay"><img src="img/gopay.jpeg" alt=""/></label>
            <input type="radio" id="gopay" name="pembayaran" value="gopay" hidden required/>
            
            <label for="dana"><img src="img/dana.jpeg" alt=""/></label>
            <input type="radio" id="dana" name="pembayaran" value="dana" hidden required/>
            
            <label for="ovo"><img src="img/ovo.png" alt=""/></label>
            <input type="radio" id="ovo" name="pembayaran" value="ovo" hidden required/>
            
            <label for="shopee"><img src="img/shopeepay.jpeg" alt=""/></label>
            <input type="radio" id="shopee" name="pembayaran" value="shopee" hidden required/>
            
            <label for="cash"><img src="img/cash.webp" alt=""/></label>
            <input type="radio" id="cash" name="pembayaran" value="cash" hidden required/>
          </div>
          <div class="pay-btn">
            <button class="pay-final">Finish Payment</button>
          </div>
        </div>
      </form>
    </div>
  </main>
  <script src="./js/home.js">
    // get product and add to cart
    //ambil semua button add product
    const addBtn = document.querySelectorAll(".product-add");
    console.log(addBtn);
    let deleteItem = document.querySelectorAll(".delete-item");
    console.log(deleteItem);

    //buat fungsi
    const addToChart = () => {
      // loop semua button add product
      addBtn.forEach((btn) => {
        //tambah event listener clik ke button yang di klik
        btn.addEventListener("click", () => {
          //ngambil data dari product card
          const product = btn.parentElement;
          const name = product.querySelector(".product-name").innerText;
          const price = product.querySelector(".product-price").innerText;
          console.log(name, price);

          //buat element baru
          const cartRow = document.createElement("div");
          cartRow.classList.add("cart-col");
          // ambil element cart-cont untuk nambahin elemnt (entar di append)
          const cartItems = document.querySelector(".cart-cont");
          // buat isi element baru yang bakalan di append
          const cartRowContent = document.createElement("div");
          cartRowContent.classList.add("cart-name");
          cartRowContent.innerHTML = `<p class="name-item">${name}</p>`;
          cartRow.append(cartRowContent);

          const cartRowContent2 = document.createElement("div");
          cartRowContent2.classList.add("cart-quantity");
          const cartRowContent21 = document.createElement("div");
          cartRowContent21.classList.add("quantity-input");
          cartRowContent21.innerHTML = `<input type="number" value="1">`;
          cartRowContent2.append(cartRowContent21);
          const cartRowContent22 = document.createElement("button");
          cartRowContent22.classList.add("delete-item");
          cartRowContent22.innerHTML = `<img src="img/bin.svg" alt="delete">`;
          cartRowContent2.append(cartRowContent22);
          cartRow.append(cartRowContent2);

          const cartRowContent3 = document.createElement("div");
          cartRowContent3.classList.add("cart-price");
          cartRowContent3.innerHTML = `<p class="price-item">Rp. ${price}</p>`;
          cartRow.append(cartRowContent3);

          cartItems.append(cartRow);
          //   const cartRowContents = `
          //           <div class="cart-name">
          //             <p class="name-item">${name}</p>
          //           </div>
          //           <div class="cart-quantity">
          //             <div class="quantity-input">
          //               <input type="number">
          //             </div>
          //             <button class="delete-item"><img src="img/bin.svg" alt="delete"></button>
          //           </div>
          //           <div class="cart-price">
          //             <p class="price-item">Rp. ${price}</p>
          //           </div>
          //         `;
          // isi element barunya
          //   cartRow.innerHTML = cartRowContents;
          // append element baru ke cart-cont supaya muncul di cart
          //   cartItems.append(cartRow);
        });
      });
    };

    const deleteChart = () => {
      deleteItem.forEach((btn) => {
        btn.addEventListener("click", () => {
          console.log(btn.parentElement.parentElement);
          btn.parentElement.parentElement.remove();
        });
      });
    };

    // invoke fungsi
    addToChart();
    deleteChart();

  </script>
</body>
</html>
