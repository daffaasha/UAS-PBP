

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CheckOut</title>
  <link rel="shortcut icon" href="../res/meong img.jpg" type="image/x-icon" />
  <script src="https://kit.fontawesome.com/afa3537b19.js" crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="../front/css/checkout.css" />
  <!-- JavaScript Bundle with Popper -->
</head>


<body>
    <div class="main mx-5">
        <div class="row mt-3">
            <div class="col"><h4>Detail Pesanan</h4></div>
        </div>


        <div class="container-fluid py-2 px-5 rounded mt-2" style="background-color: #E6F6FF;">
            <div class="row my-2" align="center">
                <div class="col">No</div>
                <div class="col-2"> Product </div>
                <div class="col-2"> Variants </div>
                <div class="col"> Price </div>
                <div class="col"> Quantity </div>
                <div class="col-2"> Sub Total </div>
                <div class="col"> Delete </div>
            </div>
            
            <div class="row my-1" align="center">
                <div class="card mx-auto">
                    <div class="card-body px-0 py-2">
                        <div class="row">
                            <div class="col"><?php echo $no++ ?></div>
                            <div class="col-2"><?php echo $d['nama produk']?></div>
                            <div class="col-2"> 
                                <div class="dropdown">
                                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Variants
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                </div>
                            </div>
                            <div class="col"><?php echo $d['harga']?></div>
                            <div class="col"> 
                                <div class="input-group input-group-sm" >
                                    <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon1">-</button>
                                    <input type="text" class="form-control text-center" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon1">+</button>
                                </div>
                            </div>
                            <div class="col-2"> <?php echo $subtotal ?> </div>
                            <div class="col">
                            <a href="hapus.php?isbn=<?php echo $d['isbn']; ?>"><i class="fa-solid fa-trash"></i> </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1" align="center">
                <div class="card mx-auto">
                    <div class="card-body px-0 py-2">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">Product</div>
                            <div class="col"> 
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col"> 5000 </div>
                            <div class="col"> 
                                <div class="input-group input-group-sm" >
                                    <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon1">-</button>
                                    <input type="text" class="form-control text-center" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon1">+</button>
                                </div>
                            </div>
                            <div class="col"> Sub Total </div>
                            <div class="col"> <i class="fa-solid fa-trash"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1" align="center">
                <div class="card mx-auto">
                    <div class="card-body px-0 py-2">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">Product</div>
                            <div class="col"> 
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col"> 5000 </div>
                            <div class="col"> 
                                <div class="input-group input-group-sm" >
                                    <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon1">-</button>
                                    <input type="text" class="form-control text-center" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon1">+</button>
                                </div>
                            </div>
                            <div class="col"> Sub Total </div>
                            <div class="col"> <i class="fa-solid fa-trash"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row my-2 py-2 text-light" align="center" style="background-color: #37547B;">
                <div class="col">Total Harga</div>
                <div class="col-2"></div>
                <div class="col-2"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col-2"><?php echo $totalharga ?></div>
                <div class="col"></div>
            </div>
        </div>
        
        <!-- <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Product</th>
                    <th scope="col">Variant</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <th scope="row">1</th>
                            <td>Mark</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown button
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>@mdo</td>
                            <td>
                                <div class="input-group input-group-sm" >
                                    <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon1">-</button>
                                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" size="3">
                                    <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon1">+</button>
                                </div>
                            </td>
                            <td>@mdo</td>
                        
                    </tr>
                </tbody>
            </table>
        </div> -->

        <div class="row mt-5">
            <div class="col"><h4>Metode Pembayaran</h4></div>
        </div>

        <div class="container-fluid mt-2 mb-5 px-0">

            <div class="row row-cols-5 mt-2">
                <div class="col text-center ">
                    <div class="card p-3 hover-shadow" style=" width: auto; ">
                        <img src="./img/cashe.png" class="card-img" style="width: 100%; object-fit:contain; height: 80px;" alt="...">  
                    </div>
                </div>

                <div class="col text-center">
                    <div class="card p-3" style=" width: auto;">
                        <img src="./img/Gopay-Logo.png" class="card-img" style="width: 100%; object-fit:contain; height: 80px;" alt="...">  
                    </div>
                </div>

                <div class="col text-center ">
                    <div class="card p-3" style=" width: auto;">
                        <img src="./img/shopee.png" class="card-img" style="width: 100%; object-fit:contain; height: 80px;" alt="...">  
                    </div>
                </div>
                <div class="col text-center ">
                    <div class="card p-3" style=" width: auto;">
                        <img src="./img/dana.png" class="card-img" style="width: 100%; object-fit:contain; height: 80px;" alt="...">  
                    </div>
                </div>
                <div class="col text-center ">
                    <div class="card p-3">
                        <img src="./img/ovo.png" class="card-img" style="width: 100%; object-fit:contain; height: 80px;" alt="...">  
                    </div>
                </div>
            </div>
            
            
        
        </div>


    </div>


    <footer class="container-fluid text-center text-light fixed-bottom mt-5" style="background-color: #37547B; ">
        <p class="m-0 p-2">Lanjutkan Transaksi</p>
    </footer>
</body>
</html>
    