<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin-top:25px;">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Book Your Service</p>
        </header>

        <div>
          <?php
          if ($this->session->flashdata('booking_success')) {
            echo $this->session->flashdata('booking_success');
          }
          ?>
        </div>


        <style type="text/css">
          .shop-name{
            margin: 10px 0 0 0;
            padding: 0;
            font-size: 25px;
            line-height: 20px;
            font-weight: 700;
            color: #012970;
          }
          .select-ser{
            box-shadow: none;
            font-size: 14px;
            border-radius: 0;
          }
        </style>

        <div class="row gy-4">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="text-center" style="margin-bottom:10px;">
                <img src="<?php echo base_url(); ?>assets/img/logo.png">
                <span class="shop-name"><?php echo $shop->name; ?></span>
              </div>
            <form action="<?php echo base_url(); ?>Booking/Validation" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-12">
                  <input type="text" name="shop_id" class="form-control" value="<?php echo $shop->id; ?>" hidden>
                </div>

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                  <span class="text-danger" style="font-size:12px;"><?php echo form_error('name'); ?></span>
                </div>

                <div class="col-md-12">
                  <input type="text" name="v_no" class="form-control" placeholder="Vehicle No">
                  <span class="text-danger" style="font-size:12px;"><?php echo form_error('v_no'); ?></span>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email">
                </div>
                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="mobile" placeholder="Your Mobile">
                  <span class="text-danger" style="font-size:12px;"><?php echo form_error('mobile'); ?></span>
                </div>

                <div class="col-md-12">
                  <select class="form-control select-ser" name="service">
                    <option value="">Select Service</option>
                    <?php
                      foreach ($services as $ser) {
                       echo "<option value='$ser->id'>$ser->service</option>";
                      } 
                    ?>
                  </select>
                  <span class="text-danger" style="font-size:12px;"><?php echo form_error('service'); ?></span>
                </div>

                <div class="col-md-12">
                  <select class="form-control select-ser" name="time">
                    <option value="">Select Time</option>
                    <option value="1">8.00 AM - 11.00 AM</option>
                    <option value="2">11.00 AM - 3.00 PM</option>
                    <option value="3">3.00 PM - 7.00 PM</option>
                  </select>
                  <span class="text-danger" style="font-size:12px;"><?php echo form_error('time'); ?></span>
                </div>

                <div class="col-md-12 text-center">
                  <button onclick="showAlert()" type="submit">Book Now</button>
                </div>
                
                

              </div>
            </form></div>
            <div class="col-md-3"></div>
        </div>

      </div>

    </section><!-- End Contact Section -->