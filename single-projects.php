
<?php get_header(); ?>


<?php $projectdesription = get_field('projectdesription');?>


  
<section class="text-center content-section" id="project" style="background: #ffffff;padding-top: 200px;color: rgb(255, 255, 255);padding-bottom: 5%;">
        <div class="container-fluid" style="padding: 0px;padding-right: 10%;padding-left: 10%;padding-top: 5%;">
            <p style="color: rgb(0,0,0);font-size: 3rem;font-family: Raleway, sans-serif;font-weight: bold;"><?php echo $projectdesription['project-title']?><br></p>
            <div class="row">
                <div class="col-12 col-lg-8 col-xxl-7 offset-0 offset-xxl-11 mx-auto">
                <?php echo $projectdesription['project-description']?>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-4 offset-0 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-2 offset-xxl-0 d-xxl-flex align-items-xxl-center">
                    <div style="width: 100%;height: 100%;">
                      
                    <?php

                // Check rows exists.
                if( have_rows('additional-image') ):?>
                    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img class="w-100 d-block" src="<?php echo $projectdesription['project-main-image']?>" alt="Slide Image"></div>

                                
                                <?php  while( have_rows('additional-image') ) : the_row();

                                // Load sub field value.

                                $image = get_sub_field('image');

                                // Do something...
                                ?>

                                <div class="carousel-item"><img class="w-100 d-block" src="<?php echo $image;?>" alt="Slide Image"></div>



                                <?php endwhile;

                                // No value.
                              
                endif; ?>
                
                                
                            </div>
                            <div>
                                <!-- Start: Previous --><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><!-- End: Previous -->
                                <!-- Start: Next --><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a><!-- End: Next -->
                            </div>
                            <!-- <ol class="carousel-indicators">
                                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                                <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
                            </ol> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer();?>