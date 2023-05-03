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
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(<?php echo $link_general; ?>contacto/dom/img/beach-ga85e1959b_1280.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contacto</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo $link_general; ?>"><i class="fas fa-home"></i> Inicio</a></li>
                            <li class="active">Contacto</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-area default-padding" style="background-image: url(<?php echo $link_general; ?>lib/agrul/assets/img/shape/28.png);">
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-lg-7 mb-md-50">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">¿Tienes preguntas?</h5>
                        <h2 class="heading">Envíanos un mensaje</h2>
                        <form id="form_contacto" onsubmit="event.preventDefault();" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input required class="form-control" id="name" name="name" placeholder="Nombre completo*" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input required class="form-control" id="email" name="email" placeholder="Correo*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input required class="form-control" id="phone" name="phone" placeholder="Celular" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea required class="form-control" id="comments" name="comments" placeholder="Cuéntanos acerca de tu proyecto *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Ponte en contacto
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <h2>
                            Contacto
                            <span>
                                Información
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                    <path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path>
                                </svg>
                            </span>
                        </h2>
                        <p>
                            Desde Karamagua trabajamos incansablemente para promover la agricultura sostenible y el cuidado de las tierras,
                            tanto verdes como azules. A través de nuestras certificaciones,
                            aseguramos que los productos que llegan a tu mesa son
                            cultivados y producidos de manera responsable y respetuosa con el medio ambiente.
                            ¡Únete a nosotros en este camino hacia un futuro más saludable y sostenible!
                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Celular</h5>
                                    <a href="">+4733378901</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Nuestra ubicacion</h5>
                                    <p>
                                        55 Main Street, The Grand Avenue 2nd Block, <br> New York City
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Nuestro correo oficial</h5>
                                    <a href="mailto:info@karamagua.com">info@karamagua.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->


    <?php require_once '../nav/footer.php'; ?>
    <?php require_once '../config/script.php'; ?>
</body>
</html>