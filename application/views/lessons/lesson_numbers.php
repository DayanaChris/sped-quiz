
 <body class="run-animation number_bg">
   <?php
   if($cat->num_rows() > 0){
     foreach ($cat->result() as $key => $value) {

   ?>
   <?php
      $cat = $this->ion_auth->user()->row();
   ?>


     <a href="<?php echo base_url(); ?>category_menu "> <img class=" btn zoom  container float-left  card-img-top img-fluid    " style=" " src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/left.png"   /></a>

          <div class="container-fluid " >
                  <div class="d-inline  " data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="0">    <img  class="    number   center zoom card-img-top img-fluid number0margin" style="margin-top:2%"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/0.png"   ></a></div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="1">    <img  class="   number   center zoom card-img-top img-fluid"  style="margin-top:2%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/1.png"   ></a></div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="2">    <img  class="   number   center zoom card-img-top img-fluid"   style="margin-top:2%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/2.png"   ></a></div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="3">    <img  class="   number   center zoom card-img-top img-fluid"   style="margin-top:2%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/3.png"   ></a></div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="4">     <img  class="   number   center zoom card-img-top img-fluid number1margin"    src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/4.png"   >  </a> </div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="5">    <img  class="   number   center zoom card-img-top img-fluid"    src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/5.png"   ></a></div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="6">    <img  class="   number   center zoom card-img-top img-fluid"    src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/6.png"   ></a></div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="7">    <img  class="   number   center zoom card-img-top img-fluid"    src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/7.png"   ></a></div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="8">    <img  class="   number   center zoom card-img-top img-fluid number2margin"    src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/8.png"   ></a></div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="9">    <img  class="   number   center zoom card-img-top img-fluid"    src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/9.png"   ></a></div>
                  <div class="d-inline" data-toggle="modal" data-target="#myModal"> <a href="#carousel-example-generic" data-slide-to="10">    <img  class="   number   center zoom card-img-top img-fluid"    src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Number/10.png"   ></a></div>
          </div>


          <div class="container-fluid">
          <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" >
              <div class="modal-dialog modal-full" role="document" >
                  <div class="modal-content " style=" background: transparent;" >
                    <div class="modal-header" style="margin-top: 20px" >
                        <!-- mag animate -->
                          <a href="<?php echo base_url(); ?>lessons/lesson_numbers " class="fixed-top" style="margin-right: 10px;"> <img class="zoom  container float-right card-img-top img-fluid   " style=" width: 90px;

                              margin-right: 0px;
                              border: 0;
                              background: transparent; " src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/_Lessons/A/close_button.png"   /></a>

                      </div>
                      <div id="carousel-example-generic" class="carousel slide number_bg" data-interval="false" >
                          <!-- <div class="carousel-inner"> -->
                            <div class="carousel-inner  " role="listbox">


                              <div class="item active " >
                                <div>
                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/0.png"  alt="Letter A"  > </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:100%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/word_zero.png"  alt="Letter A" > </div>
                                      </div>
                                </div>
                                <br><br> <br>
                              </div>


                              <div class="item "  >
                                <div>
                                      <div  >
                                        <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/one_word.png"  alt="Letter A"  >
                                      </div>
                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/1_ball.png"  alt="Letter A"  > </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/1_cookie.png"  alt="Letter A" > </div>
                                      </div>

                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%">
                                               <h1 class="centered">1 BALL</h1>
                                             </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >
                                               <h1 class="centered">1 COOKIE</h1>
                                             </div>
                                      </div>
                                </div>
                                <br><br> <br>
                              </div>

                              <div class="item "  >
                                <div>
                                      <div  >
                                        <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/one_word.png"  alt="Letter A"  >
                                      </div>
                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/1_ball.png"  alt="Letter A"  > </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/1_cookie.png"  alt="Letter A" > </div>
                                      </div>

                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%">
                                               <h1 class="centered">1 BALL</h1>
                                             </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >
                                               <h1 class="centered">1 COOKIE</h1>
                                             </div>
                                      </div>
                                </div>
                                <br><br> <br>
                              </div>


                              <div class="item "  >
                                <div>
                                      <div  >
                                        <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/one_word.png"  alt="Letter A"  >
                                      </div>
                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/1_elephant.png"  alt="Letter A"  > </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/1_turtle.png"  alt="Letter A" > </div>
                                      </div>

                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%">
                                               <h1 class="centered">1 ELEPHANT</h1>
                                             </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >
                                               <h1 class="centered">1 TURTLE</h1>
                                             </div>
                                      </div>
                                </div>
                                <br><br> <br>
                              </div>

                              <div class="item "  >
                                <div>
                                      <div  >
                                        <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/two_word.png"  alt="Letter A"  >
                                      </div>
                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/2_bells.png"  alt="Letter A"  > </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/2_candy.png"  alt="Letter A" > </div>
                                      </div>

                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%">
                                               <h1 class="centered">2 BELLS</h1>
                                             </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >
                                               <h1 class="centered">2 CANDY</h1>
                                             </div>
                                      </div>
                                </div>
                                <br><br> <br>
                              </div>


           <!-- 3 -->


                              <div class="item "  >
                                <div>
                                      <div  >
                                        <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/three_word.png"  alt="Letter A"  >
                                      </div>
                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/3_guitar.png"  alt="3 Guitars"  > </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/3_hammer.png"  alt="3 Hammers" > </div>
                                      </div>

                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%">
                                               <h1 class="centered">3 Guitars</h1>
                                             </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >
                                               <h1 class="centered">3 Hammers </h1>
                                             </div>
                                      </div>
                                </div>
                                <br><br> <br>
                              </div>

                              <div class="item "  >
                                <div>
                                      <div  >
                                        <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/three_word.png"  alt="Letter A"  >
                                      </div>
                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/3_ice_cream.png"  alt="3 Ice Cream"  > </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/3_jackets.png"  alt="3 Jackets" > </div>
                                      </div>

                                      <div class="row">
                                              <div class="col-sm-6  " style="margin-top:0%">
                                               <h1 class="centered">3 Ice Cream</h1>
                                             </div>
                                             <div class="col-sm-6   " style="margin-top:0%" >
                                               <h1 class="centered">3 Jackets </h1>
                                             </div>
                                      </div>
                                </div>
                                <br><br> <br>
                              </div>

                             <!-- 4 -->

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/four_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/4_kite.png"  alt="4 kite"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/4_milk.png"  alt="4 milk" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">4 kite</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">4 milk </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/four_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/4_paint.png"  alt="4 paint"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/4_pencil.png"  alt="4 pencil" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">4 paint </h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">4 pencil </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <!-- 5 -->

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/five_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/5_popcorn.png"  alt="5 popcorn"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/5_roses.png"  alt="5 roses" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">5 popcorn</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">5 roses </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/five_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/5_sanwiches.png"  alt="5 sandwiches"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/5_umbrella.png"  alt="5 umbrella" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">5 sandwiches</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">5 umbrella </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <!-- 6 -->

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/six_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/6_unicycle.png"  alt="6 unicycle"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/6_worms.png"  alt="6 worms" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">6 unicycle</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">6 worms </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/six_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/6_xylophone.png"  alt="6 xylophone"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/6_yogurt.png"  alt="6 yogurt" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">6 xylophone</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">6 yogurt </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <!-- 7 -->

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/seven_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/7_apron.png"  alt="7 apron"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/7_chair.png"  alt="7 chair" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">7 apron</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">7 chair </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/seven_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/7_drums.png"  alt="7 drums"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/7_zebra.png"  alt="7 zebra" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">7 drums</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">7 zebra </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <!-- 8 -->

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/eight_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/8_duck.png"  alt="8 duck"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/8_hamburger.png"  alt="8 hamburger" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">8 duck</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">8 hamburger </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/eight_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/8_duck.png"  alt="8 honey"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/8_hamburger.png"  alt="8 muffin" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">8 honey</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">8 muffin </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <!-- 9 -->

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/nine_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/9_owl.png"  alt="9 owl"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/9_pies.png"  alt="9 pies" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">9 owl</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">9 pies </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/nine_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/9_pumpkin.png"  alt="9 pumpkin"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/9_rings.png"  alt="9 rings" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">9 pumpkin</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">9 rings </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <!-- 10 -->

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/ten_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/10_starfish.png"  alt="10 starfish"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/10_tent.png"  alt="9 tent" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">10 starfish</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">10 tent </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>

                             <div class="item "  >
                               <div>
                                     <div  >
                                       <img   class=" mx-auto d-block letterA" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/ten_word.png"  alt="Letter A"  >
                                     </div>
                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%"> <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/10_watches.png"  alt="10 watches"  > </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >   <img class=" mx-auto d-block" style="width:60%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Numbers/__Lesson/10_whales.png"  alt="10 whales" > </div>
                                     </div>

                                     <div class="row">
                                             <div class="col-sm-6  " style="margin-top:0%">
                                              <h1 class="centered">10 watches</h1>
                                            </div>
                                            <div class="col-sm-6   " style="margin-top:0%" >
                                              <h1 class="centered">10 whales </h1>
                                            </div>
                                     </div>
                               </div>
                               <br><br> <br>
                             </div>





                            </div>

                                      <!-- Controls -->
                                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                      </a>
                                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                      </a>
                        </div>
                      <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                      </div> -->
                  </div>
              </div>
            </div>
          </div>


       <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
       <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>


   </body>
 </html>
