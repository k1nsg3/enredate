<?php
    include_once 'Controlador/Conexion/config.php';
    include_once 'Controlador/Conexion/conexion.php';
    $sentencia = $bd -> query ("SELECT * FROM tb_productos_slider");
    $sentencia2 = $bd -> query ("SELECT * FROM tb_producto_pack");
    $sentencia3 = $bd -> query ("SELECT * FROM tb_productos");
    $productos = $sentencia -> fetchAll(PDO::FETCH_OBJ);
    $productos2 = $sentencia2 -> fetchAll(PDO::FETCH_OBJ);
    $productos3 = $sentencia3 -> fetchAll(PDO::FETCH_OBJ);
    //print_r($productos3);
    include_once 'header.php';
?>

    <!-- hero section -->
    <div class="hero">
        <div class="slider">
            <div class="container">
                <!-- slide item -->
                <?php foreach ($productos as $dato) { ?>
                    <div class="slide active">
                        <div class="info">
                            <div class="info-content">
                                <h3 class="top-down">
                                    <?php echo $dato->marca_prod ?>
                                </h3>
                                <h2 class="top-down trans-delay-0-2">
                                    <?php echo $dato->nombre_prod ?>
                                </h2>
                                <p class="top-down trans-delay-0-4">
                                    <?php echo $dato->descripcion_prod ?>
                                </p>
                                <div class="top-down trans-delay-0-6">
                                    <button class="btn-flat btn-hover">
                                        <span>Comprar ahora!</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="img top-down">
                            <img src="./imagenes/<?php echo $dato->image_prod ?>" alt="">
                        </div>
                    </div> 
                <?php } ?>  
                <!-- end slide item -->
            </div>
            <!-- slider controller -->
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <!-- end slider controller -->
        </div>
    </div>
    <!-- end hero section -->

    <!-- promotion section -->
    <div class="promotion">
        <div class="row">
            <?php foreach ($productos2 as $dato) { ?>
                <div class="col-4 col-md-12 col-sm-12">
                    <div class="promotion-box">
                        <div class="text">
                            <h3><?php echo $dato->nombre_prod_pack ?></h3>
                            <button class="btn-flat btn-hover">
                                <span>Comprar pack</span>
                            </button>
                        </div>
                        <img src="./imagenes/<?php echo $dato->image_prod_pack ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- end promotion section -->

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>Ultimos Productos</h2>
            </div>
            <div class="row" id="latest-products">
                <?php foreach ($productos3 as $dato) { ?>
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./imagenes/<?php echo $dato->image1_prod ?>" alt="">
                                <img src="./imagenes/<?php echo $dato->image2_prod ?>" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">
                                        Comprar ahora!
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class="bx bxs-cart-add"></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class="bx bxs-heart"></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    <?php echo $dato->nombre_prod ?>
                                </div>
                                <div class="product-card-price">
                                    <span>
                                        <del>S/.<?php echo $dato->precio_ante_prod ?></del>
                                    </span>
                                    <span class="curr-price">
                                        S/.<?php echo $dato->precio_prod ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="section-footer">
                <a href="products.php" class="btn-flat btn-hover">Ver todo</a>
            </div>
        </div>
    </div>
    <!-- end product list -->

    <!-- special product -->
    <div class="bg-second">
        <div class="section container">
            <div class="row">
                <div class="col-4 col-md-4">
                    <div class="sp-item-img">
                        <img src="./images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="sp-item-info">
                        <div class="sp-item-name">JBL TUNE 750TNC</div>
                        <p class="sp-item-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos itaque et eaque quod harum vero autem? Reprehenderit enim non voluptate! Qui provident modi est non eius ratione, debitis iure.
                        </p>
                        <button class="btn-flat btn-hover">shop now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end special product -->

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>Productos mas vendidos</h2>
            </div>
            <div class="row" id="best-products">
                <?php foreach ($productos3 as $dato) { ?>
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="product-card">
                            <div class="product-card-img">
                                <img src="./imagenes/<?php echo $dato->image1_prod ?>" alt="">
                                <img src="./imagenes/<?php echo $dato->image2_prod ?>" alt="">
                            </div>
                            <div class="product-card-info">
                                <div class="product-btn">
                                    <button class="btn-flat btn-hover btn-shop-now">
                                        Comprar ahora!
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class="bx bxs-cart-add"></i>
                                    </button>
                                    <button class="btn-flat btn-hover btn-cart-add">
                                        <i class="bx bxs-heart"></i>
                                    </button>
                                </div>
                                <div class="product-card-name">
                                    <?php echo $dato->nombre_prod ?>
                                </div>
                                <div class="product-card-price">
                                    <span>
                                        <del>S/.<?php echo $dato->precio_ante_prod ?></del>
                                    </span>
                                    <span class="curr-price">
                                        S/.<?php echo $dato->precio_prod ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="section-footer">
                <a href="products.php" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div>
    <!-- end product list -->

    <!-- blogs -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>latest blog</h2>
            </div>
            <div class="blog">
                <div class="blog-img">
                    <img src="./images/JBL_Quantum400_Lifestyle1.png" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover">leer mas</button>
                </div>
            </div>
            <div class="blog row-revere">
                <div class="blog-img">
                    <img src="./images/JBL_TUNE220TWS_Lifestyle_black.png" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover">leer mas</button>
                </div>
            </div>
            <div class="section-footer">
                <a href="#" class="btn-flat btn-hover">ver mas</a>
            </div>
        </div>
    </div>
    <!-- end blogs -->
<?php
    include_once 'footer.php';
?>