<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>POS Web</title>
  <script src="https://kit.fontawesome.com/afa3537b19.js" crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/index.css" />
  <!-- JavaScript Bundle with Popper -->
</head>

<body style="background-color: #f1faff; font-family: inter">
  <div class="container-fluid">
    <div class="row">
      <img src="../res/meong img.jpg" alt="Ini Gambar Kucing" class="img-logo" />
    </div>
    <form action="cek.php" method="post">
      <div class="row input-container-uni">
        <div class="input-group mb-3 login-input">
          <span class="input-group-text login-input login-span" id="basic-addon1"><i class="fa-regular fa-circle-user icon-color fa-lg"></i> </span>
          <input type="text" class="form-control login-input input-container shadow-none" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" />
        </div>
        <div class="input-group mb-3 login-input">
          <span class="input-group-text login-input login-span" id="basic-addon1"><i class="fa-solid fa-lock icon-color fa-lg"></i> </span>
          <input type="password" class="form-control login-input input-container shadow-none" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password" />
        </div>
        <input class="btn btn-submit btn-primary btn-lg" type="submit" name="login" value="Sign In">
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>