<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATShop</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>
    <!-- header -->
    <header>
        <!-- mobile menu -->
        <div class="mobile-menu bg-second">
            <a href="index.php" class="mb-logo">EnredateGE</a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class="bx bx-menu"></i>
            </span>
        </div>
        <!-- end mobile menu -->
        <!-- main header -->
        <div class="header-wrapper" id="header-wrapper">
            <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                <i class='bx bx-x'></i>
            </span>
            <!-- top header -->
            <div class="bg-second">
                <div class="top-header container">
                    <ul class="devided">
                        <li>
                            <a href="#">+51 947177181</a>
                        </li>
                        <li>
                            <a href="#">soporte@enredatege.com</a>
                        </li>
                    </ul>
                    <ul class="devided">
                        <li><a href="#">RESTREA TU PEDIDO</a></li>
                    </ul>
                </div>
            </div>
            <!-- end top header -->
            <!-- mid header -->
            <div class="bg-main">
                <div class="mid-header container">
                    <a href="index.php" class="logo">EnredateGE</a>
                    <div class="search">
                        <input type="text" placeholder="Buscar producto..">
                        <i class="bx bx-search-alt"></i>
                    </div>
                    <ul class="user-menu">
                        <li><a href="#"><i class="bx bx-bell"></i></a></li>
                        <li><a href="#"><i class="bx bx-user-circle"></i></a></li>
                        <li><a href="#"><i class="bx bx-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end mid header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="bottom-header container">
                    <ul class="main-menu">
                        <li><a href="index.php">inicio</a></li>
                        <!-- mega menu -->
                        <li class="mega-dropdown">
                            <a href="./products.php">Productos<i class='bx bxs-chevron-down'></i></a>
                            <div class="mega-content">
                                <div class="row">
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Laptop's</h3>
                                            <ul>
                                                <li><a href="#">Huawei</a></li>
                                                <li><a href="#">HP</a></li>
                                                <li><a href="#">Lenovo</a></li>
                                                <li><a href="#">Otros</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Impresoras</h3>
                                            <ul>
                                                <li><a href="#">Canon</a></li>
                                                <li><a href="#">Epson</a></li>
                                                <li><a href="#">HP</a></li>
                                                <li><a href="#">Otros</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Celulares</h3>
                                            <ul>
                                                <li><a href="#">Huawei</a></li>
                                                <li><a href="#">Samsung</a></li>
                                                <li><a href="#">Motorola</a></li>
                                                <li><a href="#">Otros</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Mas productos</h3>
                                            <ul>
                                                <li><a href="#">Audifonos</a></li>
                                                <li><a href="#">Discos duros</a></li>
                                                <li><a href="#">Memorias</a></li>
                                                <li><a href="#">Otros</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row img-row">
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./imagenes/laptop-acer.png" alt="audifonos">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./imagenes/impresora-epson.png" alt="audifonos">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./imagenes/cell-samsung.png" alt="audifonos">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./imagenes/audifonos-sony.jpg" alt="audifonos">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end mega menu -->
                        <li><a href="#">nosotros</a></li>
                        <li><a href="#">contacto</a></li>
                    </ul>
                </div>
            </div>
            <!-- end bottom header -->
        </div>
        <!-- end main header -->
    </header>
    <!-- end header -->