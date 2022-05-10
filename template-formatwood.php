
<?php
/*Template Name: Formatwood*/
get_header();

?>

<?php $mainInformation = get_field('main_information');?>


    <section class="text-center content-section" id="formatwood" style="background: #ffffff;padding-top: 200px;color: rgb(255, 255, 255);padding-bottom: 5%;">
        <div class="container-fluid" style="padding: 0px;padding-right: 10%;padding-left: 10%;padding-top: 5%;">
            <div class="row">
                <div class="col-12 col-xxl-6 offset-0 offset-xxl-0">
                    <div style="width: 100%;height: 100%;"><img src="<?php echo $mainInformation['image']?>" style="width: 100%;height: 100%;"></div>
                </div>
                <div class="col-11 col-lg-8 col-xxl-5 offset-1 offset-xxl-4 mx-auto" id="mobile-res-fromatwood">
                    <?php echo $mainInformation['text']?>
                </div>
            </div>
        </div>
    </section>


<?php get_footer();?>