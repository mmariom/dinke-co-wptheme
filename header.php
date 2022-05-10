<!DOCTYPE html>
<html class="text-break">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php bloginfo("name") ?> - <?php single_post_title(); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway+Dots&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    

    <?php wp_head();?>


</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77" style="font-family: 'Raleway';--bs-danger: rgba(220,53,69,0);--bs-danger-rgb: 220,53,69;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top d-flex" id="mainNav" style="font-family: Raleway, sans-serif;">
        <div class="container-fluid">
            <div class="row flex-fill">
                <div class="col-12 col-sm-12 offset-0 offset-sm-0 offset-xl-5 offset-xxl-3">
                    <div class="d-flex justify-content-center align-items-center justify-content-sm-center justify-content-md-center justify-content-lg-start justify-content-xl-start justify-content-xxl-start"><a href="<?php echo get_home_url(); ?>">
                            <div></div><img class="img-fluid" alt="logo" src="<?php echo get_field('logo', 'option');?>" width="170px" height="120px">
                        </a></div>
                </div>
                <div class="col-12 offset-0" style="margin-top: 15px;">
                    <div class="d-flex justify-content-center"><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" id="navbar-toggler-changeposition" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu" style="background: var(--bs-gray-900);"><i class="fa fa-bars"></i></button></div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: Raleway, sans-serif;font-weight: bold;line-height: 9px;font-size: 18px;">
                

                <!-- 
                Static menu ......
                <ul class="navbar-nav ms-auto" style="color: var(--bs-blue);font-family: Raleway, sans-serif;font-size: 12px;">
                    <li class="nav-item nav-link" style="color: var(--bs-purple);"><a class="nav-link active" href="omdinkeco.html" style="color: #000000;background: transparent;border-style: none;">Om Dinke &amp; co</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="formatwood.html" style="color: rgb(0,0,0);">Form at Wood </a></li>
                    <li class="nav-item nav-link" style="color: var(--bs-purple);"><a class="nav-link active" href="erhverv.html" style="color: #000000;background: transparent;">Erhverv</a></li>
                    <li class="nav-item nav-link" style="color: var(--bs-purple);"><a class="nav-link active" href="privat.html" style="color: #000000;background: transparent;"><strong>PRIVAT</strong></a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="kontakt.html" style="color: rgb(0,0,0);">Kontakt</a></li>
                </ul> -->


                    <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 1,
                                'container'         => 'ul',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'navbarResponsive',
                                'menu_class'        => 'navbar-nav ms-auto',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                    ?>


      
            
            </div>
        </div>
    </nav>



