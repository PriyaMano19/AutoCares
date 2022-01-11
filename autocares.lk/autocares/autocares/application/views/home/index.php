<!-- ======= Counts Section ======= -->
    <section id="counts" class="counts" style="margin-top:20px;">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <img  class="img-fluid" src="<?php echo base_url(); ?>assets/img/1.jpeg">
          </div>

          <div class="col-lg-3 col-md-6">
            <img  class="img-fluid" src="<?php echo base_url(); ?>assets/img/3.jpg">
          </div>

          <div class="col-lg-3 col-md-6">
            <img  class="img-fluid" src="<?php echo base_url(); ?>assets/img/4.jpg">
          </div>

          <div class="col-lg-3 col-md-6">
            <img  class="img-fluid" src="<?php echo base_url(); ?>assets/img/6.jpg">
          </div>


        </div>

      </div>
    </section><!-- End Counts Section -->

     <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>Choose your one</p>
        </header>

        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-6">
            <label>Location</label>
            <select class="form-control">
              <option>Jaffna</option>
              <option>Vavuniya</option>
            </select>
          </div>
          <div class="col-md-6">
            <label>Service</label>
            <select class="form-control">
              <option>Oil Change</option>
              <option>Body Wash</option>
            </select>
          </div>
        </div>

        <div class="row gy-4" data-aos="fade-left">

          <?php

          $CI =& get_instance();
          $CI->load->model('Home_model');

          foreach ($shops as $shop) {
            ?>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">

                  <div class="row">
                    <div class="col-sm-5">
                      <div style="text-align:center; background-color: #919191;">
                        <img src="<?php echo base_url(); ?>assets/img/logosample.jpg" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div style="color: #07d5c0; text-align: left; font-weight: 700; font-size: 18px;">  <?php echo $shop->name; ?>
                      </div>
                      <div style="text-align: left; font-size:13px;"><?php echo $shop->address; ?></div>

                      <div class="stars" style="text-align:left; color: #ffc107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                    </div>

                  <div style="font-size: 17px; margin-top: 8px; text-align: left; margin-bottom:8px;">Available Services</div>
                  
                  <div>
                    <ul style="text-align:left; font-size:14px; font-style: italic;">
                      <?php
                      $shop_id = $shop->id;
                      $services = $CI->Home_model->services($shop_id);
                      foreach ($services as $ser) {
                         echo "<li>$ser->service</li>";
                       } 
                      ?>
                    </ul>
                  </div>
                  <a href="#" class="btn-buy">Book Now</a>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
      </div>
    </div>
</section><!-- End Pricing Section -->