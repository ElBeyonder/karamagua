<?php
    session_start();
    require_once '../config/config.php';

?>
<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Contacto | <?php echo $titulo; ?></title>

    <?php require_once '../config/link.php'; ?>

</head>
<body>

    <?php require_once '../nav/navbar.html'; ?>

    <!-- Start Breadcrumb
  ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(<?php echo $link_general; ?>inicio/dom/img/fox-g0f710e3b3_1280-min.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Sobre nosotros</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Inicio</a></li>
                            <li class="active">Nosotros</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

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

    <!-- Start Farmer
    ============================================= -->
    <div class="farmer-area default-padding bottom-less bg-gray" style="background-image: url(assets/img/shape/36.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Our Farmers</h5>
                        <h2 class="title">Meet Our Farm Experts</h2>
                        <div class="devider"></div>
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting <br> projection off. Connection stimulated estimating.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">

                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="assets/img/800x800.png" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Farmer of tomatoes</span>
                                    <h4><a href="#">Aleesha Brown</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="assets/img/800x800.png" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Farmer of cherry</span>
                                    <h4><a href="#">Kevin Martin</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="assets/img/800x800.png" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Farmer of potato</span>
                                    <h4><a href="#">Sarah Albert</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Farmer -->

    <!-- Start Food Order Process
    ============================================= -->
    <div class="process-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 process-style-one">
                    <h5 class="sub-title">Order process</h5>
                    <h2 class="title">Order Now and <br> get pure Organic Food</h2>
                    <div class="call-to-action mt-45">
                        <div class="icon">
                            <i class="fas fa-user-headset"></i>
                        </div>
                        <div class="info">
                            <span>Get quick support</span>
                            <h4><a href="tel:2151234567">+123 34598768</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 process-style-one">
                    <div class="row">
                        <div class="shape">
                            <img src="assets/img/shape/35.webp" alt="Image Not Found">
                        </div>

                        <div class="col-lg-4">
                            <div class="nav nav-tabs order-process-tab-navs" id="nav-tab" role="tablist">
                                <button class="nav-link" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                    <span>Process - 01 </span>
                                    <strong>Home Delivary</strong>
                                </button>
                                <button class="nav-link active" id="nav-id-2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                    <span>Process - 02 </span>
                                    <strong>Live Purchase</strong>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="tab-content order-process-tab-content" id="nav-tabContent">
                                <!-- Single Item -->
                                <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                                    <h3 class="title">Get products from home</h3>
                                    <p>
                                        Give lady of they such they sure it. Me contained explained  education. Vulgar as hearts by garret. Perceived is determine departure explained no forfeited he something an join.
                                    </p>
                                    <ul>
                                        <li>Product will be delivered to your door</li>
                                        <li>The product will be checked before being sent to you.</li>
                                    </ul>
                                </div>
                                <!-- End Single Item -->

                                <!-- Single Item -->
                                <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                                    <div class="row align-center">
                                        <h3 class="title">Collect food from the farm</h3>
                                        <p>
                                            Take join of they such they sure it. Me contained explained  education. Vulgar as hearts by garret. Perceived is determine departure explained no forfeited he something an come.
                                        </p>
                                        <ul>
                                            <li>You must come for purchasing the product</li>
                                            <li>The product quality depends on your choice</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Item -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Food Order Process -->

    <!-- Start Why Choose Us
   ============================================= -->
    <div class="choose-us-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 choose-us-style-one">
                    <div class="thumb">
                        <img src="assets/img/800x800.png" alt="Image Not Found">
                        <div class="shape">
                            <img class="wow fadeInDown" src="assets/img/shape/22.png" alt="Image not found">
                        </div>
                        <div class="product-produce">
                            <div class="icon">
                                <i class="flaticon-farmer"></i>
                            </div>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="258" data-speed="2000">258</div>
                                    <div class="operator">K</div>
                                </div>
                                <span class="medium">Agriculture, Organic Products</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 choose-us-style-one">
                    <h5 class="sub-title">Get to know us</h5>
                    <h2 class="title">Agriculture matters to <br> the future of development</h2>
                    <div class="accordion accordion-regular mt-35" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What do you add to the soil before you plant a crop?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Bennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you use herbicides?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Cennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Where does the water come from that you use on your crops?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Tennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose us -->

    <?php require_once '../nav/footer.php'; ?>
    <?php require_once '../config/script.php'; ?>
</body>
</html>