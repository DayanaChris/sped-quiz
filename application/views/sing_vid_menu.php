

<?php
  $this->load->view('templates/header');
  $this->load->view('templates/nav');  ?>

    <body class=" category_menu_bg"  >




                <div class="containers " style=" margin-top: 0%;margin-bottom: 0%; padding-top: 70px;" id="shad" >
                    <div class="card run-animation" style="background: skyblue; ">
                       <div class="card-header" style=" background:#FF1E9D"> <h2> <b> CHOOSE A LESSON </b></h2></div>
                                <div class="containers ">
                                    <ul>
                                        <li > <a href="<?php echo base_url(); ?>lessons/submenu_alphabets"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a2.png" alt="Card image cap"></a></li>
                                        <li > <a  href="<?php echo base_url(); ?>lessons/submenu_numbers"> <img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a5.png" alt="Card image cap"></a></li>
                                        <li> <a href="<?php echo base_url(); ?>lessons/submenu_colors"> <img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a3.png" alt="Card image cap"></a></li>
                                        <li><a href="<?php echo base_url(); ?>lessons/submenu_shapes"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a6.png" alt="Card image cap"></a></li>
                                        <li><a href="<?php echo base_url(); ?>lessons/submenu_expressions"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a4.png" alt="Card image cap"></a></li>
                                        <li><a href="<?php echo base_url(); ?>lessons/submenu_actionwords"><img class="card-img-top img-fluid box"   src="<?php echo site_url(); ?>assets/images/SPEDEMY/Menupage/a1.png" alt="Card image cap"></a></li>
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
                <a href="<?php echo base_url(); ?>sing_vid_menu " class="fixed-bottom" > <img class="zoom  container float-right card-img-top img-fluid    " style=" width: 150px;
                margin-top: 0px;
                margin-bottom: 20px;
                border: 0;
                background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/video_button.png"   />
              </a>





                            <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

                            <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
                    </body>
                </html>
