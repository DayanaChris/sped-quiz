<body class="run-animation Alphabet_bg" >
  <a href="<?php echo base_url(); ?>lessons/submenu_alphabets "> <img class="btn zoom  container float-left  card-img-top img-fluid    "  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/left.png"   /></a>

          <a href="<?php echo base_url(); ?>lessons/lesson_vowels "> <img class="btn zoom  container float-right card-img-top img-fluid   "  src="<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/btn_change.png"   /></a>


       <div class="container-fluid " >


           <?php
           if($lesimg->num_rows() > 0){
             $que = $lesimg->row();
             ?>

                     <!--START OF TEMPLATE 1  -->
                       <?php
                     if($que->template_num ==1){
                       ?>
                         <?php
                         if($images->num_rows() > 0){

                           ?>
                           <?php
                           $count=0  ?>
                           <!-- LESSON IMAGES  -->
                          <div class="d-inline" data-toggle="modal" data-target="#myModal">
                                 <?php
                                 foreach ($images->result() as $key => $value) {
                                 ?>
                                   <a href="#carousel-example-generic" data-slide-to="<?php echo $count?>">
                                     <img  class=" letter   center zoom card-img-top img-fluid marg0"
                                     src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>"  ></a>
                                     <?php echo $value->img_name?>

                                 <?php
                                 }
                                 $count++;
                                 ?>
                          </div>
                          <!-- END OF LESSON IMAGES  -->



                          <div class="container-fluid">
                          <!-- <a href="#myModal" role="button" class="btn btn-primary " data-toggle="modal">OPEN</a> -->
                          <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" >
                              <div class="modal-dialog modal-full" role="document" >
                                  <div class="modal-content " style=" background: transparent;" >
                                    <div class="modal-header" style="margin-top: 20px" >
                                        <!-- mag animate -->
                                          <a href="<?php echo base_url(); ?>lessons/lesson_actionwords " class="fixed-top" style="margin-right: 10px"> <img class="zoom  container float-right card-img-top img-fluid   " style=" width: 90px;
                                              margin-right: 0px;
                                              border: 0;
                                              background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/A/close_button.png"   /></a>
                                    </div>
                                        <!--  data-interval="false" dont go to the next page automatically  -->
                                      <div id="carousel-example-generic" class="carousel slide actionwords_bg " data-interval="false">
                                          <!-- Wrapper for slides -->
                                          <!-- Wrapper for slides -->
                                           <div class="carousel-inner  " role="listbox">
                                             <?php
                                             if($example->num_rows() > 0){
                                               ?>




                                              <div class="item active color_black" >
                                                <div>
                                                      <div  >
                                                        <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/COLOR_BLACK.png"  alt="Letter A"  >
                                                      </div>
                                                      <div class="row">
                                                              <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/black_ink.png"  alt="black book"  > </div>
                                                             <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Colors/_Lessons/black_eagle.png"  alt="Letter A" > </div>
                                                      </div>

                                                      <div class="row">
                                                              <div class="col-sm-6  " style="margin-top:0%">
                                                               <h1 class="centered">INK</h1>
                                                             </div>
                                                             <div class="col-sm-6   " style="margin-top:0%" >
                                                               <h1 class="centered">EAGLE</h1>
                                                             </div>
                                                      </div>
                                                </div>
                                                <br><br> <br>
                                              </div>


                                              <div class="item "  >
                                                <div>
                                                      <div class="text-center">

                                                              <h1 class="font-weight-bold"> <big>  <h1><?php echo $que->lesson_name?></h1> </big> </h1>
                                                      </div>
                                                      <div class="row">

                                                              <?php
                                                              foreach ($example->result() as $key => $values) {
                                                              ?>
                                                              <div class="col-sm-6  " style="margin-top:0%">
                                                                <img class=" mx-auto d-block" style="width:60%" src="<?php echo base_url()?>assets/uploads/<?php echo $values->img_name?>"  alt="Letter A"  >
                                                              </div>
                                                              <?php
                                                              }
                                                              ?>


                                                      </div>
                                                </div>
                                              </div>
                                              <?php
                                            }else {
                                              echo "NO EXAMPLE FOUND.....";
                                            }
                                              ?>

                                            </div>
                                                      <!-- Controls -->
                                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                              <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                              <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>














                          <?php
                          }else {
                          ?>
                            <h1>
                          <?php
                            echo 'No LESSON found...';
                          }?>
                            </h1>

                       <!--END OF TEMPLATE 9  -->






                  <?php
                }
                   ?>
                <!--END OF IF TEMPLATE 1    -->























             <?php
             // END OF 1ST IF
             }else {
             ?>

                   <h1>
                         <?php
                       echo 'No LESSON found...';
                     }
                     ?>
                   </h1>












      </div>




























      <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>


  </body>
</html>
