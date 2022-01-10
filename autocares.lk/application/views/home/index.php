<!-- ======= Counts Section ======= -->
    <section id="counts" class="counts" style="margin-top:20px;">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" style="margin-top:10px;">
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="<?php echo base_url(); ?>assets/img/banner/1.jpg" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo base_url(); ?>assets/img/banner/2.jpg" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo base_url(); ?>assets/img/banner/3.jpg" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo base_url(); ?>assets/img/banner/4.jpg" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo base_url(); ?>assets/img/banner/5.jpg" class="img-fluid" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo base_url(); ?>assets/img/banner/6.jpg" class="img-fluid" alt="">
              </div>
              
            </div>
            <div class="swiper-pagination"></div>
          </div>
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

        <div>
          <?php
          if ($this->session->flashdata('booking_success')) {
            echo $this->session->flashdata('booking_success');
          }
          ?>
        </div>

        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-6">
            <label>Location</label>
            <select class="form-control">
              <option value=''>All</option>
              <?php
              foreach ($locations as $loc) {
                echo "<option value='$loc->district'>$loc->district</option>";
              }
              ?>
            </select>
          </div>
          <div class="col-md-6">
            <label>Service</label>
            <select class="form-control">
              <option>All</option>
              <?php
              foreach ($services as $ser) {
                echo "<option value='$ser->service'>$ser->service</option>";
              }
              ?>
            </select>
          </div>
        </div>

        <style>
        .logoimg img{
          width : 180px;
        }
        </style>

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
                      <div style="text-align:left;" class="img-fluid">
                        <img src="<?php echo base_url(); ?>assets/img/logo/<?php echo $shop->image; ?>" alt="" class="img-fluid">
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

                  <?php
                  $shop_id = $shop->id;
                  if ($CI->Home_model->service_available($shop_id) > 0) {
                    ?>
                    <div style="font-size: 17px; margin-top: 8px; text-align: left; margin-bottom:8px;">Available Services</div>
                  
                    <div>
                      <ul style="text-align:left; font-size:14px; font-style: italic;">
                        <?php
                        $services = $CI->Home_model->services($shop_id);
                        foreach ($services as $ser) {
                          echo "<li>$ser->service</li>";
                        } 
                        ?>
                      </ul>
                    </div>
                    <?php
                  }
                  ?>
                  <a href="<?php echo base_url(); ?>Booking/index/<?php echo $shop_id; ?>" class="btn-buy">Book Now</a>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
      </div>
    </div>
</section><!-- End Pricing Section -->

