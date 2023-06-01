<?php
    session_start();
    require_once 'config/config.php';

?>
<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inicio | <?php echo $titulo; ?> </title>

    <?php require_once 'config/link.php'; ?>

</head>
<body>
    <?php require_once 'nav/navbar.html'; ?>

    <!-- Start Banner Area
    ============================================= -->
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(inicio/dom/img/alberta-g7ce0e37c9_1280.jpg);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-7">
                                <div class="content">
                                    <h4>Lucha climática</h4>
                                    <h2><strong>Bonos carbono verdes y azules</strong></h2>
                                    <p>
                                        Los bonos de carbono, verdes y azules, son clave en la lucha climática.
                                        Representan la reducción de emisiones de gases de efecto invernadero.
                                        Los verdes se enfocan en energía renovable, los azules en la conservación marina.
                                        Adquiérelos y contribuye a preservar nuestro planeta.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme secondary btn-md radius animation" href="#">Conoce más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(inicio/dom/img/hintersee-g2cb931eb8_1280.jpg);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-7">
                                <div class="content">
                                    <h4>Hacia un futuro sostenible</h4>
                                    <h2><strong>Bonos de carbono </strong> para un planeta mejor</h2>
                                    <p>
                                        Promoviendo un futuro sostenible, los bonos de carbono verde y azul son instrumentos esenciales en la lucha contra el cambio climático.
                                        Los bonos verdes respaldan proyectos de energía limpia y ecoeficiencia, mientras que los bonos azules protegen y restauran los ecosistemas acuáticos.
                                        Suma tu apoyo adquiriendo estos bonos y ayúdanos a construir un mundo más verde y resiliente.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme secondary btn-md radius animation" href="#">Descubre más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <!-- End Main -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-one-area default-padding">

        <!-- Shape -->
        <div class="shape-right-top">
            <img src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/leaf.png" alt="Image not found">
        </div>
        <!-- End Shape -->

        <div class="container">
            <div class="row align-center">
                <div class="col-xl-5 col-lg-6 about-style-one pr-50 pr-md-15 pr-xs-15">
                    <div class="thumb">
                        <img src="<?php echo $link_general; ?>inicio/dom/img/mountains-g15678e16a_1280-min.jpg" alt="Image Not Found">
                        <div class="sub-item">
                            <img src="<?php echo $link_general; ?>lib/agrul/assets/img/1.jpg" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 about-style-one">
                    <div class="row align-center">
                        <div class="col-xl-7 col-lg-12">
                            <h2 class="heading">Cambio Climático y Bonos de Carbono</h2>
                            <p>
                                En Karamagua Pachamama Grupo Empresarial SAS, nos enfocamos en promover y defender la agricultura ecológica y sostenible como parte de la solución al cambio climático. A través de la adquisición de bonos de carbono verde y azul, contribuimos activamente a la reducción de emisiones de gases de efecto invernadero y la preservación de nuestros recursos naturales.
                            </p>
                            <ul class="check-solid-list mt-20">
                                <li>Los bonos de carbono apoyan proyectos de agricultura sostenible</li>
                                <li>La demanda de alimentos orgánicos impulsa la oferta de bonos verdes</li>
                                <li>Los bonos de carbono aseguran que los alimentos orgánicos sean cultivados de forma sostenible</li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-lg-12 pl-50 pl-md-15 pl-xs-15">
                            <div class="top-product-item">
                                <img src="<?php echo $link_general; ?>lib/agrul/assets/img/icon/1.svg" alt="Icono">
                                <h5><a href="#">Agricultura Sostenible</a></h5>
                                <p>
                                    Implementamos técnicas y métodos de cultivo que reducen las emisiones de carbono y preservan la biodiversidad.
                                </p>
                            </div>
                            <div class="top-product-item">
                                <img src="<?php echo $link_general; ?>lib/agrul/assets/img/icon/2.svg" alt="Icono">
                                <h5><a href="#">Productos Eco-Amigables</a></h5>
                                <p>
                                    Ofrecemos productos cultivados con prácticas amigables con el medio ambiente y certificados con bonos de carbono.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services
    ============================================= -->
    <div class="services-style-one-area default-padding bg-gray half-bg-theme">
        <div class="shape-extra">
            <img src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/18.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-info">
                            <h5 class="sub-title">Nuestro enfoque</h5>
                            <h2 class="title">Promovemos los bonos de carbono verdes y azules para una agricultura sostenible</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info">
                            <p>
                                En Karamagua, nos dedicamos a promover la agricultura sostenible y la preservación del medio ambiente a través de la emisión y adquisición de bonos de carbono.
                                Nuestro enfoque se centra en el desarrollo y mantenimiento de tierras que contribuyan a la reducción de emisiones de gases de efecto invernadero.
                                Mediante la implementación de proyectos de energía renovable y la conservación de ecosistemas marinos, buscamos generar bonos de carbono verdes y azules que impulsen la mitigación del cambio climático.
                                Creemos en un futuro donde la agricultura sea parte fundamental de la solución para construir un mundo más sostenible y resiliente.
                            </p>
                            <a class="btn btn-theme btn-md radius animation" href="#">Descubre mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/1.png" alt="Fresh Vegetables">
                                    </div>
                                    <h5><a href="#">Productos Agrícolas Orgánicos</a></h5>
                                    <p>
                                        Cuidamos el medio ambiente y promovemos la agricultura sostenible para
                                        garantizar un futuro saludable para todos.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/2.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Productos Agrícolas Sostenibles</a></h5>
                                    <p>
                                       Nos enorgullece poder ofrecer opciones saludables y responsables para ti y tu familia.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/3.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Certificación Orgánica</a></h5>
                                    <p>En Karamagua nos enfocamos en la certificación de prácticas agrícolas sostenibles y orgánicas.</p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/4.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Cuidado de la Tierra</a></h5>
                                    <p>
                                        Karamagua certifica prácticas sostenibles en tierras verdes y azules.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/6.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Frutas Exóticas Dulces</a></h5>
                                    <p>
                                        En Karamagua promovemos el cuidado de la tierra y trabajamos con productores para garantizar
                                        que los cultivos sean sostenibles y respetuosos con el medio ambiente,
                                        lo que nos permite ofrecer deliciosas frutas exóticas dulces con certificación orgánica.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-style-one-area default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Nuestra Galería</h5>
                        <h2 class="title">Tierras</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-stage">
            <div class="row">
                <div class="col-xl-12">
                    <div class="carousel-stage-right carousel-style-one swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/trees-g1610847e2_1280.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Fruta</span>
                                        <h4><a href="#">Comida Saludable</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/tree-gbcee13c57_1280.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Orgánico</span>
                                        <h4><a href="#">Leche de Vaca</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/river-gc2136a945_1280.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Verduras</span>
                                        <h4><a href="#">Verduras orgánicas</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/nature-gaabdcf799_1280-min.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Cereales</span>
                                        <h4><a href="#">Mandarinas frescas</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/lake-g90b55e3bd_1280.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Cosecha</span>
                                        <h4><a href="#">Pepinos crujientes</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-facts-area default-padding">
        <div class="shape-left">
            <img src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/27.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="item-inner">
                <div class="shape-right">
                    <img src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/26.png" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-4 fun-fact-style-one">
                        <div class="heading">
                            <div class="sub-title">Logros</div>
                            <h2 class="title">Generando valor <br> desde 1990</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 fun-fact-style-one text-end">
                        <div class="row">
                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="1000" data-speed="2000">1000</div>
                                        <div class="operator">H</div>
                                    </div>
                                    <span class="medium">Cultivo Sostenible de Tierras</span>
                                </div>
                            </div>
                            <!-- End Single item -->

                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="99" data-speed="2000">99</div>
                                        <div class="operator">%</div>
                                    </div>
                                    <span class="medium">Clientes satisfechos</span>
                                </div>
                            </div>
                            <!-- End Single item -->

                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="688" data-speed="2000">688</div>
                                        <div class="operator">K</div>
                                    </div>
                                    <span class="medium">Venta de nuestros productos</span>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <?php require_once 'nav/footer.php'; ?>
    <?php require_once 'config/script.php'; ?>
</body>
</html>