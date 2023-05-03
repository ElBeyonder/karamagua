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

    <title>Inicio | <?php echo $titulo; ?></title>

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
                                    <h4>Cuidado del Medio Ambiente</h4>
                                    <h2><strong>Productos Sostenibles</strong></h2>
                                    <p>
                                        Nos esforzamos por proteger la biodiversidad y promover el equilibrio entre el ser humano, la naturaleza y todas las especies.
                                        Nuestros productos son sostenibles y respetuosos con el medio ambiente para contribuir a un planeta más verde y saludable.
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
                                    <h4>Productos Ecológicos</h4>
                                    <h2><strong>Producción Responsable</strong> con la Naturaleza</h2>
                                    <p>
                                        Nos enorgullecemos en producir alimentos ecológicos de alta calidad,
                                        cultivados de forma sostenible y respetuosa con el medio ambiente.
                                        Nuestro compromiso es proporcionar productos de calidad que cuidan la salud de las personas y del planeta.
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
                            <h2 class="heading">Agricultura Para <br> El Desarrollo Futuro</h2>
                            <p>
                                En Karamagua Pachamama Grupo Empresarial SAS, nos enfocamos en promover y defender la agricultura ecológica y sostenible
                                para asegurar el equilibrio armónico entre el ser humano, la naturaleza y las otras especies.
                            </p>
                            <ul class="check-solid-list mt-20">
                                <li>Los alimentos orgánicos contienen más vitaminas y nutrientes</li>
                                <li>Consumir orgánico porque la demanda cumple con la oferta</li>
                                <li>Los alimentos orgánicos nunca son irradiados</li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-lg-12 pl-50 pl-md-15 pl-xs-15">
                            <div class="top-product-item">
                                <img src="<?php echo $link_general; ?>lib/agrul/assets/img/icon/1.svg" alt="Icono">
                                <h5><a href="#">Agricultura Natural</a></h5>
                                <p>
                                    Implementamos técnicas y métodos de cultivo que respetan el medio ambiente y promueven la biodiversidad.
                                </p>
                            </div>
                            <div class="top-product-item">
                                <img src="<?php echo $link_general; ?>lib/agrul/assets/img/icon/2.svg" alt="Icono">
                                <h5><a href="#">Productos de Calidad</a></h5>
                                <p>
                                    Ofrecemos productos de alta calidad, cultivados con los más altos estándares de producción y cuidado del medio ambiente.
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
                            <h5 class="sub-title">Nuestra labor</h5>
                            <h2 class="title">Nos dedicamos a fomentar la agricultura ecológica y la sostenibilidad de las tierras</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info">
                            <p>
                                En Karamagua, nos dedicamos a transformar la agricultura para lograr un éxito sostenible.
                                Nos enfocamos en el desarrollo y mantenimiento de tierras para la producción de alimentos orgánicos de alta calidad,
                                sin comprometer el medio ambiente y la biodiversidad. Buscamos contribuir al cuidado y preservación del planeta,
                                fomentando la convivencia armoniosa entre los seres humanos, las diversas especies y la naturaleza en general.
                                Creemos firmemente en un futuro en el que la agricultura
                                sea una fuente de beneficios mutuos para la humanidad y el planeta.
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
                                        <div class="timer" data-to="250" data-speed="2000">250</div>
                                        <div class="operator">M</div>
                                    </div>
                                    <span class="medium">Cultivo Sostenible de Tierras</span>
                                </div>
                            </div>
                            <!-- End Single item -->

                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="98" data-speed="2000">98</div>
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