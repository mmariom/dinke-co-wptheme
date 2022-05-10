 <?php get_header();?>



 <?php $hero = get_field('hero');?>
 <?php $mainInformation = get_field('main_information');?>


 <header class="d-flex justify-content-center align-items-end masthead" style="background: url(<?php echo $hero['background_image']?>) center / cover no-repeat;padding: 0;padding-top: 0px;min-width: 100%;min-height: 100%;">
        <div class="d-flex intro-body" style="margin-top: 37px;width: 552px;">
            <div class="container" style="transform: perspective(0px);opacity: 1;padding-right: 0px;padding-left: 0px;">
                <div class="row" style="margin: 0px;padding: 0px;">
                    <div class="col-12 col-lg-12 col-xl-12 col-xxl-12 offset-0 offset-xxl-3 mx-auto" style="padding-right: 0px;padding-left: 0px;">
                        <p class="d-flex flex-column brand-heading" style="font-family: Raleway, sans-serif;font-size: 65px;font-weight: bold;"><?php echo $hero['title']?><br></p>
                        <p class="intro-text" style="font-weight: bold;font-family: Raleway, sans-serif;"><?php echo $hero['slogan']?></p>
                        <div class="row" style="margin-left: 0px;margin-right: 0px;">
                            <div class="col-12 col-xxl-12 offset-0 offset-xxl-0 d-flex flex-row justify-content-evenly" style="padding: 0px;">
                                <div class="d-flex flex-row justify-content-around" style="width: 80%;"><a class="text-capitalize" role="button" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" id="homebutton" style="background: rgba(0,0,0,0);font-size: 22px;color: var(--bs-light);padding: 135px 10px 10px 10px;padding-top: 16px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;font-family: Raleway, sans-serif;font-weight: bold;min-width: 20%;width: 60%;height: 100%;border-style: none;--bs-light-rgb: 248,249,250;--bs-info-rgb: 240,13,95;--bs-danger-rgb: 53,220,70;" href="<?php echo $hero['button_left_link']?>"><?php echo $hero['buttonleft']?></a><a class="text-capitalize" role="button" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" id="homebutton" style="background: rgba(0,0,0,0);font-size: 22px;color: var(--bs-light);padding: 135px 10px 10px 10px;padding-top: 16px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;font-family: Raleway, sans-serif;font-weight: bold;min-width: 20%;width: 60%;height: 100%;border-style: none;--bs-primary-rgb: 232,11,11;--bs-light-rgb: 248,249,250;" href="<?php echo $hero['button_right_link']?>"><?php echo $hero['buttonright']?></a></div>
                            </div>
                        </div><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center content-section" id="about" style="background: #ffffff;padding-top: 200px;color: rgb(255, 255, 255);padding-bottom: 100px;">
        <div class="container-fluid" style="padding: 0px;padding-right: 10%;padding-left: 10%;">
            <div class="row">
                <div class="col-12 col-lg-8 col-xxl-12 offset-0 offset-xxl-1 mx-auto">
                    <p class="text-start" id="home-section2-p"><?php echo $mainInformation['top_text']?></p>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding: 0px;padding-right: 10%;padding-left: 10%;padding-top: 10%;">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 col-xxl-4 offset-md-1 offset-lg-2 offset-xl-3 offset-xxl-0">
                    <div style="width: 100%;height: 70%;"><img src=" <?php echo $mainInformation['left_image']?>" style="width: 100%;height: 100%;" alt="mainimage"></div>
                </div>
                <div class="col-12 col-lg-8 col-xxl-7 offset-0 offset-xxl-8 mx-auto">
                    <?php echo $mainInformation['right_text']?>
                </div>
            </div>
        </div>
   

            <?php

            // Check rows exists.
            if( have_rows('projects') ):?>
             </section><!-- Start: Projects Clean -->
                 <section id="projects" class="projects-clean" style="font-family: Raleway, sans-serif;">
                     <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center" style="font-family: Raleway, sans-serif;font-weight: bold;font-size: 3rem;"><?php echo $mainInformation['project_title']?></h2>
                <p class="text-center"><?php echo $mainInformation['project_subtitle']?></p>
            </div><!-- End: Intro -->
            <!-- Start: Projects -->
            <div class="row projects">
           
                <?php  while( have_rows('projects') ) : the_row();

                    // Load sub field value.
                    $projectLink = get_sub_field('project_link');
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $projectInfo = get_sub_field('project_info');
                    // Do something...
                    ?>
                    <div class="col-sm-6 col-lg-4 item"><a href="<?php echo $projectLink;?>"><img class="img-fluid" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" src="<?php echo $image;?>"></a>
                    <h3 class="name" style="font-family: Raleway, sans-serif;font-weight: bold;"><?php echo $title;?></h3>
                    <p class="description"><?php echo $projectInfo;?></p>
                    </div>

                
               <?php endwhile;

            // No value.
            else :
                // Do something...
            endif;
            ?>

            
               
            
            </div><!-- End: Projects -->
        </div>
    </section><!-- End: Projects Clean -->


    <?php get_footer();?>
