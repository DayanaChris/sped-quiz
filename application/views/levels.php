<?php $this->load->view('templates/temp_alphabets');  ?>
<body class="learn_alphabets run-animation">



        <a href="<?php echo base_url(); ?>category_menu "> <img class="zoom  container float-left card-img-top img-fluid   " style=" width: 15%;
            padding: 10px;
            margin-top: 0px;
            margin-bottom: 20px;
            border: 0;
            background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/Menu_button.png"   /></a>

                <div  id="logo" class=" container "  >
                        <div class="container">
                            <br>
                            <?php if($level->num_rows() > 0){
                              $count = 0;

                              foreach ($level->result() as $key => $value) {
                                  $margin = 'left';
                                // code...
                                if($count == 0){
                                $percent = '40%';
                              }else{
                                if($count == 1){
                                  $margin = 'right';
                                }
                                $percent = '50%';

                              }
                                ?>
                                <a href="<?php echo base_url()?>question/<?php echo $category_id?>/<?php echo $value->id?>"><img   class="container  zoom    log  "  src="<?php echo site_url(); ?>assets/uploads/level_image/<?php echo $value->level_image?>" style="width:<?php echo $percent?>;margin-top: 0px; margin-<?php echo $margin?>: 15%;"  ></a>
                                <?php
                                  $count++;
                              }

                              ?>

                            <?php
                            }?>


                        </div>
                </div>






<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

<script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
</body>
</html>
