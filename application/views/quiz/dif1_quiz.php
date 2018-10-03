<?php $this->load->view('templates/temp_alphabets');  ?>
<body class="letter_A run-animation">

      <?php
      if($question->num_rows() > 0){
        $que = $question->row();
        $get_answer = $this->query->get_answer($que->quizID);


      ?>
      <div class="container" style=" margin-top:100px">

              <div class="centered_text">
                      <h1 class="font-weight-bold"> <big>  <h1><?php echo $que->question?></h1> </big> </h1>
              </div>
      </div>
      <div class="container " >
        <div class="row">
          <div class="col  " style=" margin-top:50px">

              <img class="mx-auto d-block"  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lesson/Alphabets/Moderate/A/apple_v.png" style="width:20%; margin-top:2%">
            </div>


        </div>

      </div>

      <div class="container-fluid " >
        <div class="row">
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
          }else{
            echo 'No question found...';
          }
          ?>


        </div>

      </div>




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
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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
