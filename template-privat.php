<?php
/*Template Name: Privat*/
get_header();
?>

<?php $mainTextAreas = get_field('main_text_areas');?>
<?php $upperArea = get_field('upper_area');?>



<section class="text-center content-section" style="background: #ffffff;padding-top: 200px;color: rgb(255, 255, 255);padding-bottom: 5%;">
        <div class="container-fluid" style="padding: 0px;padding-right: 10%;padding-left: 10%;padding-top: 5%;">
            <p style="color: rgb(48,48,48);font-size: 2rem;font-family: Raleway, sans-serif;text-align: center;padding-bottom: 25px;font-weight: bold;"> <?php echo $upperArea['title']?><br></p>
            <div class="row">
                <div class="col-12 col-xxl-6 offset-0 offset-xxl-0">
                    <div style="width: 100%;height: 85%;"><img src=" <?php echo $upperArea['image']?>" style="width: 100%;height: 100%;"></div>
                </div>
                <div class="col-11 col-lg-8 col-xxl-5 offset-1 offset-xxl-5 mx-auto" id="mobile-res-fromatwood">
                <?php echo $upperArea['text']?>

                </div>
            </div>
        </div>
    </section>
    <section class="text-center content-section" style="background: #ffffff;padding-top: 0;x;color: rgb(255, 255, 255);padding-bottom: 5%;">
        <div class="container-fluid" style="padding: 0px;padding-right: 10%;padding-left: 10%;padding-top: 10%;">
            <div class="row">
                <div class="col-11 col-lg-8 col-xxl-10 offset-1 offset-xxl-4 mx-auto" style="font-size: 25px;margin-top: 0px;">
                <?php echo $mainTextAreas['middle_text']?>
                </div>
                <div class="col-11 col-lg-8 col-xxl-10 offset-1 offset-xxl-4 mx-auto" style="font-size: 25px;margin-top: 10%;">
                <?php echo $mainTextAreas['lower_text']?>
                </div>
            </div>
        </div>
    </section>




<?php get_footer();?>

