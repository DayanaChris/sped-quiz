

<?php
  $this->load->view('templates/header');
  $this->load->view('templates/nav');  ?>

    <body class=" category_menu_bg"  >

                <div class="containers" style=" margin-top: 0%;margin-bottom: 0%; padding-top: 70px;" id="shad" >
                    <div class="card run-animation" style="background: skyblue; ">
                       <div class="card-header" style=" background:#FF1E9D"> <h2> <b> CHOOSE A LESSON </b></h2></div>
                                <div class="containers ">
                                    <ul>
                                    <?php
                                    if($cat->num_rows() > 0){
                                      foreach ($cat->result() as $key => $value) {
                                    ?>
                                        <li > <a href="<?php echo base_url(); ?>lessons/category/<?php echo $value->id?>"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/uploads/<?php echo $value->category_image?>" alt="<?php echo $value->category_name?>" style="width: 100%"></a></li>
                                      <?php
                                      }
                                    }
                                      ?>
                                    </ul>
                                </div>
                        </div>
                </div>
                <a href="<?php echo base_url(); ?>category_menu " class="fixed-bottom" style="margin-right: 150px"> <img class="zoom  container float-right card-img-top img-fluid   " style=" width: 130px;
                margin-top: 0px;
                margin-bottom: 20px;
                border: 0;
                background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/result.png"   />
              </a>
                <a href="<?php echo base_url(); ?>videos_menu " class="fixed-bottom" > <img class="zoom  container float-right card-img-top img-fluid    " style=" width: 150px;
                margin-top: 0px;
                margin-bottom: 20px;
                border: 0;
                background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/video_button.png"   />
              </a>





                            <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

                            <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
                    </body>
                </html>
