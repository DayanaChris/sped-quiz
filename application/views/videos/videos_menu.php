
<!-- 'mp4' => array('video/mp4', 'application/octet-stream'), -->

  <?php
    $this->load->view('templates/temp_videos');
    $this->load->view('templates/nav');  ?>

      <body class=" category_menu_bg"  >


                  <div class="container " style=" margin-top: 0%;margin-bottom: 0%; padding-top: 90px;" id="shad" >
                      <div class="card run-animation" style="background: skyblue; ">
                         <div class="card-header" style=" background:#FF1E9D"> <h2> <b> VIDEOS </b></h2></div>
                         <a href="<?php echo base_url(); ?>category_menu "> <img class="btn zoom  container float-right card-img-top img-fluid   "  src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/Menu_button.png"   /></a>

                                  <div class="container " style="padding: 40px" >
                                    <!-- style="padding-bottom: 150px" -->
                                    <div class="col-sm-4   "  > <a  href="<?php echo base_url(); ?>videos/Lesson"> <img class="zoom   card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Videos/Lesson.png" alt="Card image cap"></a> </div>
                                    <div class="col-sm-4   "  > <a  href="<?php echo base_url(); ?>videos/StorySeries"> <img class="zoom   card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Videos/StorySeries.png" alt="Card image cap"></a> </div>
                                    <div class="col-sm-4   "  > <a  href="<?php echo base_url(); ?>videos/SingALong"> <img class=" zoom  card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Videos/SingALong.png" alt="Card image cap"></a> </div>





                                  </div>

                          </div>
                  </div>







                              <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

                              <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
                      </body>
                  </html>
