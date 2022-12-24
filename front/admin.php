<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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
                <img src="img/logo.png" alt="" class="logo-kotak" width="25%">
                <img src="img/petstar.png" alt="" width="50%">
            </div>
            <div class="menu">
                <a href="#"><img src="img/user.svg" alt="nama-user" width="75%"></a>
                <a href="#"><img src="img/setting.svg" alt="setting" width="75%"></a>
                <a href="#" class="logout">Logout</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Data Admin</h1>
            <button type="submit" class="add">+ Tambah Admin</button>
        </div>
        <div class="container">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="active-row">
                        <td>1</td>
                        <td>zulfan</td>
                        <td>ganteng</td>
                        <td>uhuyyy</td>
                        <td><button>Edit</button></td>
                        <td><button>Delete</button></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>zulfan</td>
                        <td>ganteng</td>
                        <td>uhuyyy</td>
                        <td>edit</td>
                        <td>delete</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>zulfan</td>
                        <td>ganteng</td>
                        <td>uhuyyy</td>
                        <td>edit</td>
                        <td>delete</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
  </body>
</html>
