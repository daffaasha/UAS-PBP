<?php
    include "koneksi.php";
  	session_start();
    
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['LEVEL']==""){
      header("location:index.php?pesan=gagal");
    }

    // $ID_USER = $_GET['ID_USER'];
    // $query = mysqli_query($koneksi, "SELECT * FROM tabel_user WHERE ID_USER = $ID_USER");
    // $user = mysqli_fetch_assoc($query);
    // $username = $_SESSION['USERNAME'];
    // $query = mysqli_query($koneksi, "SELECT * FROM tabel_user WHERE USERNAME = $username ");
    // $user = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="css/profile.css">
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
    <div class="title-container">
      <a href="home.php" target="_blank" rel="noopener noreferrer">
        <img src="img/left-arrow.svg" alt="back" width="24px">
      </a>
      <p class="profile-title">Profile</p>
    </div>

    <form action="prosestambahUser.php" method="POST">
      <!-- <input type="text" name = "id_user" value = ""> -->
      <div class="profile-data">
        <!-- <div class="profile-pict-container">
          <img src="" alt="profile" class="profile-pict">
        </div> -->
        <div class="profile-form">
          <div class="form-flex">
            <p class="label">Username</p>
            <div class="input-form-container">
              <input type="text" name = "username" class="input-form" value = "">
              <img src="img/pen.svg" alt="edit" class="edit-icon">
            </div>
          </div>
          <div class="name form-flex">
            <p class="label">Name</p>
            <div class="input-form-container">
              <input type="text" name = "nama" class="input-form" value = "">
              <img src="img/pen.svg" alt="edit" class="edit-icon">
            </div>
          </div>
          <div class="email form-flex">
            <p class="label">Email</p>
            <div class="input-form-container">
              <input type="text" name = "email" class="input-form" value = "">
              <img src="img/pen.svg" alt="edit" class="edit-icon">
            </div>
          </div>
          <div class="number form-flex">
            <p class="label">Number</p>
            <div class="input-form-container">
              <input type="text" name = "number" class="input-form" value = "">
              <img src="img/pen.svg" alt="edit" class="edit-icon">
            </div>
          </div>
          <!-- <div class="foto form-flex">
            <p class="label">Foto</p>
            <div class="input-form-container">
              <input type="file" name = "uploadfile" class="input-form" value = "">
              <img src="img/pen.svg" alt="edit" class="edit-icon">
            </div>
          </div> -->
        </div> 
      </div>


      <h2 class="account-title profile-title">Password</h2>

      <div class="account-data">
        <div class="form-flex">
          <p class="password label">Password</p>
          <div class="input-form-container">
            <input type="text" name = "password" class="input-form" value = "">
            <img src="img/pen.svg" alt="edit" class="edit-icon">
          </div>
        </div>
      </div>
      <input type="button" value="SIMPAN" class="save-data" onclick="confirmPoppup()">
      <!-- <input type="button" value="SIMPAN" class="save-data" onclick="confirmPoppup()"> -->

      <div class="poppup" id="poppup-confirm">
        <img src="img/confirm.svg" alt="confirm" class="poppup-pict">
        <p class="poppup-text">Apakah Anda Ingin Menyimpan User?</p>
        <div class="buttons">
          <input type="button" value="Cancel" class="cancel-btn" onclick="confirmPoppupCls()">
          <button type ="submit" class = "logout-btn">Simpan</button>
          <!-- <input type="button" value="Simpan" class="logout-btn" onclick="donePoppup()"> -->
        </div>
      </div>
    </form>
    
    <!-- <input type="button" value="LOG OUT" class="logout" onclick="logoutPoppup();"> -->
  </main>

  <!-- <div class="poppup" id="poppup-logout">
    <img src="img/logout.svg" alt="logout" class="poppup-pict">
    <p class="poppup-text">Apakah Anda Ingin Logout?</p>
    <div class="buttons">
      <input type="button" value="Cancel" class="cancel-btn" onclick="logoutPoppupCls()">
      <input type="button" value="Log Out" class="logout-btn">
    </div>
  </div> -->

  <!-- <div class="poppup" id="poppup-confirm">
    <img src="img/confirm.svg" alt="confirm" class="poppup-pict">
    <p class="poppup-text">Apakah Anda Ingin Menyimpan Perubahan?</p>
    <div class="buttons">
      <input type="button" value="Cancel" class="cancel-btn" onclick="confirmPoppupCls()">
      <input type="button" value="Simpan" class="logout-btn" onclick="donePoppup()">
    </div>
  </div> -->

  <!-- <div class="poppup" id="poppup-done">
    <img src="img/done.svg" alt="confirm" class="poppup-pict">
    <p class="poppup-text">Profil Berhasil Diperbarui</p>
    <div class="button-done">
      <input type="button" value="Simpan" class="done-btn" onclick="donePoppupCls()">
    </div>
  </div> -->


<script src="js/profile.js"></script>
</body>

</html>