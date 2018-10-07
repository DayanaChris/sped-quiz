<?php $this->load->view('templates/temp_alphabets');  ?>
<style>
    input.transparent-input{
       background-color:transparent !important;
       border:none !important;
    }
    body{

    }
</style>
<body class="" style="padding:0">
      <div class="container float-right" id="clock" > </div>



      <?php
      if($question->num_rows() > 0){
      ?>


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
             <div  class="" id="<?php echo $count; ?>"  style="<?php echo $display; ?>   background:#<?php echo $q->background?> no-repeat fixed center; padding:0">
               <div class="run-animation">
                 <div class="container ">
                 <img  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/head.png" style="width:80%; margin-top:2%">
                 <div class="centered_text">
                    <h1 class="font-weight-bold"> <big>  <h1><?php echo $q->question?></h1> </big> </h1>
                 </div>
                 </div>
                 <div class="container run-animation ">
                   <div class="row">
                     <div class="col  " style="margin-top:0%">
                         <div class="col  " style="margin-top:5%">
                           <img src="<?php echo base_url()?>assets/uploads/<?php echo $q->question_image?>" style="width:260px">
                         </div>
                       </div>
                   </div>
                 </div>

                  <div class="container-fluid run-animation">
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
             </div>
             <?php
             $count++;
           }
            ?>


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


    <div class="result_div bg" style="display:none;  width: 100%; height: 100%;repeat fixed center; pading:0; "  >
        <div class="container" style="margin-top: 0">
          <img src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/try_again.png" style="width: 50% ; margin-top: 30px ">
        </div>
        <div class="container-fluid" style="margin-top: 10px">
          <img src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/platform.png" style="width: 70% ;">
            <div class="container centered_text mx-auto d-block">
              <form class="text-center" role="form" method="post" action="<?php echo base_url()?>results/post"   style="font-size: 30px; color: white; font-weight: 1000;" >
                <div class="text-center">
                <div class="form-group row" style="display:none;">
                   <label for="staticEmail" class="col col-form-label">SCORE</label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="score" type="text" name="score" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label">FINAL SCORE</label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="final_score" type="text" name="final_score" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col  col-form-label">ATTEMPTS</label>
                  <div class="col ">
                    <input class="form-control-plaintext"  id="attempts" type="text" name="attempts" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label">TOTAL TIME</label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="total_time" type="text" name="total_time" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label">ACCURACY</label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="accuracy" type="text" name="accuracy" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label">AVERAGE SPEED</label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="average_speed" type="text" name="average_speed" value="0"  >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col col-form-label">TOTAL WRONG</label>
                  <div class="col">
                    <input class="form-control-plaintext"  id="total_wrong" type="text" name="total_wrong" value="0"  >
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col">
                    <input type="hidden" class="form-control-plaintext" name="category_id"  value="<?php echo $category_id?>"  >
                  </div>
                </div>
                <div class="form-group row" >
                  <div class="col">
                    <input type="hidden" class="form-control-plaintext" name="level_id"  value="<?php echo $level_id?>"  >
                  </div>
                </div>


              </div>

              <div class="form-actions noborder">
                <button type="submit" class="  btn blue">
                  <img src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/yes_button.png" style="width: 100% ;">

                </button>
                <a href="<?php echo base_url()?>question" class="btn default">
                  <img src="<?php echo base_url()?>assets/images/SPEDEMY/Evaluation/no_button.png" style="width: 100% ;">

                </a>
              </div>
              </form>



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
