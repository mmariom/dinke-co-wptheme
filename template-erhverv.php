<?php
/*Template Name: Erhverv*/
get_header();

?>

<?php $mainInformation = get_field('main_information');?>



<section class="text-center content-section" id="formatwood" style="background: #ffffff;padding-top: 200px;color: rgb(255, 255, 255);padding-bottom: 5%;">
        <div class="container-fluid" style="padding: 0px;padding-right: 10%;padding-left: 10%;padding-top: 5%;">
            <div class="row">
                <div class="col-11 col-lg-8 col-xxl-10 offset-1 offset-xxl-4 mx-auto" style="font-size: 25px;margin-top: 0px;">
                <?php echo $mainInformation['upper_text']?>
                </div>
                <div class="col-11 col-lg-8 col-xxl-10 offset-1 offset-xxl-4 mx-auto" style="font-size: 25px;margin-top: 10%;">
                <?php echo $mainInformation['lower_text']?>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer();?>