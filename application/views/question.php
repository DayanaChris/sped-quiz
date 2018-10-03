<?php $this->load->view('templates/temp_alphabets');  ?>

      <?php


      // print_r($question);
      // exit();

      if($question->num_rows() > 0){
        // $que = $question->row();
        // $get_temp = $que->template_num;
        // $bg = $que->background;

        // $ques = $question_image->row();


        // $get_temp = $this->query->get_template();

        // $get_answer = $this->query->get_answer($que->quizID);
      ?>

      <!-- <div class="">

    		<pre>
    		<?php
    		// print_r($get_temp)
    		?>
    		</pre>
    	</div> -->

      <body class="run-animation">

        <?php
        // TEMPLATE 1
        // if($que->template_num ==2){

         ?>
         <!-- <body class=" run-animation" style="background:#<?php echo $que->background?>"> -->
           <?php
           // echo "<script> alert('$question->num_rows')</script>";
           // for($i=0;$i<$question->num_rows();$i++){
           // print_r($question);
           $count=0;
           foreach($question->result() as $q){

             // print_r($q);
             // exit();
             // $bg=$q->background;
             // $q=$ques
             $get_answer = $this->query->get_answer($q->quizID);
             $display="";
             if($count!=0)
              $display="display:none;";
             else $display="display:block;"
             ?>
             <div  id="<?php echo $count; ?>"  style="<?php echo $display; ?> width:100%; height:100%; background:#<?php echo $q->background?>">
                 <div class="container">
                         <img  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/head.png" style="width:80%; margin-top:2%">
                         <div class="centered_text">
                                 <h1 class="font-weight-bold"> <big>  <h1><?php echo $q->question?></h1> </big> </h1>
                         </div>
                 </div>
                 <div class="container">
                   <div class="row">
                     <div class="col  " style="margin-top:0%">
                         <div class="col  " style="margin-top:5%">
                           <img src="<?php echo base_url()?>assets/uploads/<?php echo $q->question_image?>" style="width:260px">
                         </div>
                       </div>
                   </div>
                 </div>

                  <div class="container-fluid">
                    <div class="row">
                      <?php
                      if($get_answer->num_rows() > 0){
                        ?>
                      <?php
                      foreach ($get_answer->result() as $key => $value) {
                      ?>
                        <div class="col  " style="margin-top:5%">  <img data-toggle="modal" data-target="#exampleModal" src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>" style="width:260px" class="clickimage zoom letterA"
                          data-answer="<?php echo $value->is_correct ?>" data-id="<?php echo $value->quiz_id ?>" question-number="<?php echo $count;?>" >
                        </div>
                      <?php
                      }
                      ?>
                      <?php
                    }else {
                      echo "NO Choices found";
                    } ?>




                    </div>

                  </div>
               </div>
             <?php
             $count++;
           }

            ?>
         <!-- <div class="container">
                 <img  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/head.png" style="width:80%; margin-top:2%">
                 <div class="centered_text">
                         <h1 class="font-weight-bold"> <big>  <h1><?php echo $que->question?></h1> </big> </h1>
                 </div>
         </div>
         <div class="container">
           <div class="row">
             <div class="col  " style="margin-top:0%">

                 <div class="col  " style="margin-top:5%">
                   <img src="<?php echo base_url()?>assets/uploads/<?php echo $que->question_image?>" style="width:260px">
                 </div>

               </div>


           </div>

         </div> -->
<!--
         <div class="container-fluid">
           <div class="row">
             <?php
             if($get_answer->num_rows() > 0){
               ?>
             <?php
             foreach ($get_answer->result() as $key => $value) {

             ?>
               <div class="col  " style="margin-top:5%">  <img data-toggle="modal" data-target="#exampleModal" src="<?php echo base_url()?>assets/uploads/<?php echo $value->img_name?>" style="width:260px" class="clickimage zoom letterA"
                 data-answer="<?php echo $value->is_correct ?>" data-id="<?php echo $value->quiz_id ?>" >
               </div>

             <?php
             }
             ?>

             <?php
           }else {
             echo "NO Choices found";
           } ?>




           </div>

         </div> -->

      <!--END OF TEMPLATE 1  -->

      <!--START OF TEMPLATE 2  -->

        <?php
      }else {
        echo "NO question found";
      }
      ?>
      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          </div>

        </div>
      </div>
    </div>

<style>
  .modal-body img{
    width:100%;
  }
</style>
<div class="base_url" style="display:none"><?php echo base_url()?></div>


<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
 <script src="<?php echo base_url(); ?>assets/apps/scripts/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
</body>
</html>
