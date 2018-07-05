<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title>Agroenergía</title>
    <link rel="icon" type="image/png" href="<?php echo CFS()->get('favicon_general'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/';?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
<button>
    <span></span>
    <span></span>
    <span></span>
</button>
<nav>
    <div>
        <a class="item-menu" href="#home">
            <img src="<?php echo CFS()->get('logo_general'); ?>" alt="Logotipo Agroenergía">
        </a>
    </div>
    <div>
        <ul>
            <li><a class="item-menu" href="#nosotros">Nosotros</a></li>
            <li><a class="item-menu" href="#produccion">Producción</a></li>
            <li><a class="item-menu" href="#tipos-de-algas">Tipos de algas</a></li>
            <li><a class="item-menu" href="#contacto">Contacto</a></li>
        </ul>
    </div>
    <div>
        <section>
            <i class="fas fa-phone"></i>
        </section>
        <section>
            <p>Te atendemos con gusto</p>
            <a href="tel:<?php echo preg_replace('/\D/', '', CFS()->get('phone_contacto')) ?>"><p> <?php echo CFS()->get('phone_contacto'); ?></p></a>
        </section>
    </div>
</nav>
<header style="background-image: url('<?php echo CFS()->get('background_banner'); ?>');" id="home">
    <main>
        <h1><?php echo CFS()->get('title_banner'); ?></h1>
        <h2><?php echo CFS()->get('subtitle_banner'); ?></h2>
        <a class="item-menu" href="#contacto"><?php echo CFS()->get('button_banner'); ?></a>
    </main>
</header>
<div id="nosotros">
    <img src="<?php echo CFS()->get('logo_nosotros'); ?>">
    <main>
        <section>
            <h3><?php echo CFS()->get('title_nosotros'); ?></h3>
            <div id="SliderNosotros" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">

                    <?php
                    $arrayItem = CFS()->get('text_nosotros_array');
                    if($arrayItem)
                    {
                        $counter = 0;
                        $counterIndicators = 0;
                        foreach($arrayItem as $item)
                        {
                            if($counter == 0)
                            {
                                echo '<div class="item active">';
                            }
                            else {
                                $counterIndicators++;
                                echo '</div>';
                                echo '<div class="item">';
                            }
                            ?>
                            <p>
                                <?php echo $item['text_nosotros_array_text'];?>
                            </p>
                            <?php
                            $counter++;
                        }
                        echo '</div>';
                    }
                    ?>
                </div>
                <a class="left carousel-control" href="#SliderNosotros" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="right carousel-control" href="#SliderNosotros" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </section>
        <img src="<?php echo CFS()->get('img_nosotros'); ?>">
    </main>
</div>
<div id="produccion">
    <main>
        <h4><?php echo CFS()->get('title_produccion'); ?></h4>
        <section>
            <?php
            $arrayItem = CFS()->get('types_produccion_array');
            if($arrayItem)
            {
                $counter = 1;
                $counterIndicators = 0;
                foreach($arrayItem as $item)
                {
                    ?>
                    <figure>
                        <div>
                            <img src="<?php echo $item['types_produccion_array_logo'];?>">
                            <figcaption><?php echo $item['types_produccion_array_title'];?></figcaption>
                        </div>
                        <a href="#" id="BtnProduct<?php echo $counter ?>" data-product="#Product<?php echo $counter ?>">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </figure>
                    <?php
                    $counter++;
                }
            }
            ?>
        </section>
        <section>
            <?php
            $arrayItem = CFS()->get('types_produccion_array');
            if($arrayItem)
            {
                $counter = 1;
                $counterIndicators = 0;
                foreach($arrayItem as $item)
                {
                    ?>
                    <p id="Product<?php echo $counter ?>">
                        <?php echo $item['types_produccion_array_text'];?>
                    </p>
                    <?php
                    $counter++;
                }
            }
            ?>
        </section>

    </main>
</div>
<div id="tipos-de-algas">
    <section style="background-image: url('<?php echo CFS()->get('background_alga'); ?>');">
        <main>
            <div>
                <h5><?php echo CFS()->get('title_alga'); ?></h5>
                <p><?php echo CFS()->get('text_alga'); ?></p>
                <a class="item-menu" href="#contacto"><?php echo CFS()->get('button_alga'); ?></a>
            </div>
            <img src="<?php echo CFS()->get('img_alga'); ?>">
        </main>
    </section>
    <section>
        <img src="<?php echo CFS()->get('bigimg_alga'); ?>" alt="Tipos de Algas">
    </section>
</div>
<div id="contacto">
    <section style="background-image : url('<?php echo CFS()->get('background_contacto'); ?>');">
        <h6><?php echo CFS()->get('title_contacto'); ?></h6>
        <ul>
            <li><i class="fas fa-map-marker-alt"></i> <?php echo CFS()->get('address_contacto'); ?></li>
            <li><a href="tel:<?php echo preg_replace('/\D/', '', CFS()->get('phone_contacto')) ?>"><i class="fas fa-phone"></i> T. <?php echo CFS()->get('phone_contacto'); ?></a></li>
            <li><a href="mailto:<?php echo CFS()->get('email_contacto'); ?>"><i class="fas fa-envelope"></i> <?php echo CFS()->get('email_contacto'); ?></a></li>
        </ul>
    </section>
    <section>
            <?php echo do_shortcode('[contact-form-7 id="21" title="Forma de Contacto - Agroenergía"]'); ?>
    </section>
</div>
<footer>
    <header>
        <img src="<?php echo CFS()->get('logo_general'); ?>">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </header>
    <footer>
        <ul>
            <li><i class="fas fa-map-marker-alt"></i> <?php echo CFS()->get('address_contacto'); ?></li>
            <li><a href="tel:<?php echo preg_replace('/\D/', '', CFS()->get('phone_contacto')) ?>"><i class="fas fa-phone"></i> T. <?php echo CFS()->get('phone_contacto'); ?></a></li>
            <li><a href="mailto:<?php echo CFS()->get('email_contacto'); ?>"><i class="fas fa-envelope"></i> <?php echo CFS()->get('email_contacto'); ?></a></li>
        </ul>
    </footer>
    <section class="footer-rights">
        <div class="text-center footer-rights">
            <p>
                Todos los derechos reservados Agroenergia <?php echo date('Y'); ?>. | Made by: <a target="_blank" href="http://mixen.mx"><img src="http://mixen.mx/firma/logo-new.png" alt="Agencia Mixen"></a>
            </p>
        </div>
    </section>
</footer>
<?php wp_footer();?>
<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_url').'/';?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo bloginfo('template_url').'/';?>assets/js/main.js"></script>
</body>
</html>