
      <!-- Start: Footer Basic -->
     <footer id="footer" class="footer-basic" style="padding-top: 10%;">
        <!-- Start: Social Icons -->
        <div class="social">
            <a href="<?php echo get_field('instagram_link', 'option');?>"><i class="icon ion-social-instagram"></i></a>
            <a href="<?php echo get_field('linkedin_link', 'option');?>"><i class="fa fa-star fa fa-linkedin"></i></a>
            <a href="<?php echo get_field('facebook_link', 'option');?>"><i class="icon ion-social-facebook"></i></a>
                
        </div><!-- End: Social Icons -->
    

     


        <!-- Start: Copyright -->
        <p class="copyright">
            <?php echo get_field('copyright', 'option');?>
            <?php echo currentYear(); ?>
        </p><!-- End: Copyright -->
    </footer><!-- End: Footer Basic -->
  


<?php wp_footer();?>

</body>

</html>