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
                                Existen muchas variaciones de pasajes de ipsum disponibles, pero la mayoría han sufrido alguna alteración por la inserción de humor o palabras al azar que no tienen sentido. En Karamagua Pachamama Grupo Empresarial SAS, nos enfocamos en promover y defender la agricultura ecológica y sostenible para asegurar el equilibrio armónico entre el ser humano, la naturaleza y las otras especies.
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
            <img src="assets/img/shape/18.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-info">
                            <h5 class="sub-title">What we do</h5>
                            <h2 class="title">Currently we are <br> selling organic food</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info">
                            <p>
                                Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. ladies she basket season age her uneasy saw. Discourse unwilling am no described.
                            </p>
                            <a class="btn btn-theme btn-md radius animation" href="#">Discover More</a>
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
                                        <img src="assets/img/thumb/1.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Fresh Vegetables</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="assets/img/thumb/2.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Agricultural Products</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="assets/img/thumb/3.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Organic Products</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="assets/img/thumb/4.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Dairy Production</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="assets/img/thumb/6.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Sweet Exotic Fruits</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
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

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area default-padding bg-gray" style="background-image: url(assets/img/shape/23.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="testimonial-info text-center">
                        <h4>Testimonial</h4>
                        <div class="thumb">
                            <img src="assets/img/800x800.png" alt="Image Not Found">
                            <img src="assets/img/800x800.png" alt="Image Not Found">
                            <img src="assets/img/800x800.png" alt="Image Not Found">
                            <img src="assets/img/800x800.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="testimonial-carousel testimonial-style-one swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">

                                    <div class="item">
                                        <div class="content">
                                            <p>
                                                “Targetingconsultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="info">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Senior Consultant</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item">
                                        <div class="content">
                                            <p>
                                                “Consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="info">
                                                <h4>Anthom Bu Spar</h4>
                                                <span>Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item">
                                        <div class="content">
                                            <p>
                                                “Business discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="info">
                                                <h4>Metho k. Partho</h4>
                                                <span>Senior Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <?php require_once 'nav/footer.php'; ?>
    <?php require_once 'config/script.php'; ?>
</body>
</html>