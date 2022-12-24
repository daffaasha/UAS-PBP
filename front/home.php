<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="shortcut icon" href="../res/meong img.jpg" type="image/x-icon" />
  <script src="https://kit.fontawesome.com/afa3537b19.js" crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/home.css" />
  <!-- JavaScript Bundle with Popper -->
</head>

<body>
  <nav class="navbar navbar-expand-lg nav-prop">

    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../res/meong img.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top brand-logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup"></div>
    </div>
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fa-solid fa-clock-rotate-left icon-prop fa-lg"></i></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fa-regular fa-circle-user icon-prop fa-lg"></i></a>
      </li>
    </ul>
  </nav>

  <div class="main">
    <div class="row search-container">
      <div class="input-group mb-3 no-margin">
        <span class="input-group-text login-input login-span" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i>
        </span>
        <input type="text" class="form-control input-container shadow-none border-start-0 login-input form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" />
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h4 class="product">Products</h4>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary btn-tambah">
          + Tambah
        </button>
      </div>
    </div>

    <div class="container-fluid no-margin">
      <div class="row g-0">
        <div class="col col-card">
          <input class="form-check-input justify-content-center" type="checkbox" value="" id="product-checkboxes" />
          <label class="form-check-label" for="flexCheckDefault">
            <div class="card">
              <img src="../res/meong img.jpg" class="card-img-top" alt="product" />
              <div class="card-img-overlay text-end card-content">
                <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
              </div>
              <div class="card-body card-content">
                <p class="card-text">Ini Judul Produk</p>
                <h5 class="card-title">Rp 60.000</h5>
              </div>
              <div class="card-body text-end card-content">
                <span class="stok"> </span>
              </div>
            </div>
          </label>
        </div>

      </div>
      <div class="row g-0">
        <div class="col col-card">
          <input class="form-check-input justify-content-center" type="checkbox" value="" id="product-checkboxes" />
          <label class="form-check-label" for="flexCheckDefault">
            <div class="card">
              <img src="../res/meong img.jpg" class="card-img-top" alt="product" />
              <div class="card-img-overlay text-end card-content">
                <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
              </div>
              <div class="card-body card-content">
                <p class="card-text">Ini Judul Produk</p>
                <h5 class="card-title">Rp 60.000</h5>
              </div>
              <div class="card-body text-end card-content">
                <span class="stok"> </span>
              </div>
            </div>
          </label>
        </div>
        <div class="row g-0">
          <div class="col col-card">
            <input class="form-check-input justify-content-center" type="checkbox" value="" id="product-checkboxes" />
            <label class="form-check-label" for="flexCheckDefault">
              <div class="card">
                <img src="../res/meong img.jpg" class="card-img-top" alt="product" />
                <div class="card-img-overlay text-end card-content">
                  <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>
                <div class="card-body card-content">
                  <p class="card-text">Ini Judul Produk</p>
                  <h5 class="card-title">Rp 60.000</h5>
                </div>
                <div class="card-body text-end card-content">
                  <span class="stok"> </span>
                </div>
              </div>
            </label>
          </div>

        </div>

      </div>
    </div>

  </div>

  <footer>
    <div class="submit-container">
      <input type="button" value="LANJUT" style="float: right;" class="btn-submit">
    </div>
  </footer>

  <form action="#" method="get"></form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>