<?php


/*Template Name: About*/
get_header();

?>

<?php $aboutCompany = get_field('about_company__content');?>
<?php $aboutTheTeam = get_field('about_the_team');?>
<?php $aboutCompany = get_field('about_company__content');?>


<section class="text-center content-section" id="dinkeco" style="background: #ffffff;padding-top: 200px;color: rgb(255, 255, 255);padding-bottom: 5%;">
        <div class="container-fluid" style="padding: 0px;padding-right: 10%;padding-left: 10%;padding-top: 5%;">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-6 col-xxl-3 offset-sm-2 offset-md-2 offset-lg-3 offset-xxl-1">
                    <div style="width: 100%;height: 81%;"><img src="<?php echo $aboutCompany['image']?>" style="width: 100%;height: 100%;"></div>
                </div>
                <div class="col-12 col-lg-8 col-xxl-5 offset-0 offset-xxl-9 mx-auto">
                <?php echo $aboutCompany['text']?>
                <div class="d-flex flex-row justify-content-around justify-content-xxl-center align-items-xxl-start" style="width: 100%;"><a class="btn btn-dark text-capitalize" role="button" style="background: var(--bs-gray-900);font-size: 22px;color: var(--bs-light);padding: 135px 10px 10px 10px;padding-top: 16px;padding-right: 15px;padding-bottom: 15px;padding-left: 15px;font-family: Raleway, sans-serif;font-weight: bold;min-width: 20%;width: 60%;height: 100%;border-style: none;border-right-style: none;border-right-color: rgb(0,0,0);" href="<?php echo $aboutCompany['button_link']?>"><?php echo $aboutCompany['button_text']?></a></div>
                </div>
            </div>
        </div>
    </section><!-- Start: Team Grid -->
    <section class="team-grid" style="padding-top: 5%;">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center" style="font-family: Raleway, sans-serif;font-size: 3rem;font-weight: bold;"> <?php echo $aboutTheTeam['title']?></h2>
                <p class="text-center" style="font-family: Raleway, sans-serif;"><?php echo $aboutTheTeam['subtitle']?></p>
            </div><!-- End: Intro -->
            <!-- Start: People -->
            <div class="row d-md-flex d-xxl-flex justify-content-md-center justify-content-xxl-center align-items-xxl-center people">
                <div class="col-sm-8 col-md-5 col-lg-4 col-xxl-4 offset-sm-2 offset-md-0 offset-xxl-0 item">
                    <div class="box" style="background: url(<?php echo $aboutTheTeam['person_1_image']?>) center / cover no-repeat;">
                        <div class="cover" style="background: rgba(132,184,231,0.75);">
                            <h3 class="name" style="font-family: Raleway, sans-serif;"><?php echo $aboutTheTeam['person_1_name']?></h3>
                            <p class="title" style="font-family: Raleway, sans-serif;"><?php echo $aboutTheTeam['person_1_title']?></p>
                            <div class="social"><a href="<?php echo $aboutTheTeam['person_1_fb_']?>"><i class="fa fa-facebook-official"></i></a><a href="<?php echo $aboutTheTeam['person_1_ig']?>"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-5 col-lg-4 col-xxl-4 offset-sm-2 offset-md-1 offset-xxl-0 item">
                    <div class="box" style="background: url(<?php echo $aboutTheTeam['person_2_image']?>) center / cover no-repeat;">
                        <div class="cover" style="background: rgba(132,184,231,0.75);">
                            <h3 class="name" style="font-family: Raleway, sans-serif;"><?php echo $aboutTheTeam['person_2_name']?></h3>
                            <p class="title" style="font-family: Raleway, sans-serif;"><?php echo $aboutTheTeam['person_2_title']?> </p>
                            <div class="social"><a href="<?php echo $aboutTheTeam['person_2_fb_']?>"><i class="fa fa-facebook-official"></i></a><a href="<?php echo $aboutTheTeam['person_2_ig']?>"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div><!-- End: People -->
        </div>
    </section><!-- End: Team Grid -->


    <?php get_footer();?>