</main>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-3">
          <a class="footer-logo" href="<?php echo home_url();?>"><h3>Reve<span class="fg-primary">Tive.</span></h3></a>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Information</h5>
          <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          <p>Email: example@mail.com</p>
          <p>Phone: +00 112323980</p>
        </div>
        <div class="col-lg-3 py-3">
            <?php $menu = wp_get_nav_menu_object("Company" );?>
            <p style="color: white"><?php echo $menu->name; ?></p>
        <?php wp_nav_menu(array(
                        'menu' => 'headerMenu',
                        'theme_location' => 'header-main',
                        'menu_class' => 'footer-menu',
                        'container' => 'false'
                    )); ?>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
          </form>
        </div>
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          <p>Copyright 2020. This template designed by <a href="https://macodeid.com">MACode ID</a></p>
        </div>
        <div class="col-md-6 text-right">
             <?php wp_nav_menu(array(
                       'menu' => 'footcont',
                       'theme_location' => 'footer-contact',
                       'menu_class' => ' sosmed-button',
                       'container' => 'false'
                   )); ?>
        </div>
      </div>
    </div>
  </footer>

  
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->
<?php wp_footer();?>
</body>
</html>