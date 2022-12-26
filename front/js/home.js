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

      cartItems.append(cartRow);
      const cartRowContents = `
                <div class="cart-name">
                  <p class="name-item">${name}</p>
                </div>
                <div class="cart-quantity">
                  <div class="quantity-input">
                    <input type="number">
                  </div>
                  <button class="delete-item"><img src="img/bin.svg" alt="delete"></button>
                </div>
                <div class="cart-price">
                  <p class="price-item">Rp. ${price}</p>
                </div>
              `;
      //   isi element barunya
      cartRow.innerHTML = cartRowContents;
      //   append element baru ke cart-cont supaya muncul di cart
      cartItems.append(cartRow);
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
