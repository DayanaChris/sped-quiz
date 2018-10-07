<?php $this->load->view('templates/temp_alphabets');  ?>
<?php
  // $this->load->view('templates/header');
  $this->load->view('templates/nav');  ?>

<body class="tally_bg" style="padding:0">

<style >
.table-fixed thead {
  width: 97%;
}
.table-fixed tbody {
  height: 530px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
}



.table-fixed{
  width: 100%;
  background-color: #f3f3f3;
  tbody{
    height:200px;
    overflow-y:auto;
    width: 100%;
    }

  tbody{
    td{
      float:left;
    }
  }
  thead {
    tr{
      th{
        float:left;
       background-color: #f39c12;
       border-color:#e67e22;
      }
    }
  }
}

</style>

<div class="container-fluid" >


  <div class="container " style="margin-top: 50px">
    <img src="<?php echo base_url()?>assets/images/SPEDEMY/tally/board_results2.png" style="width: 100% ; margin-top: 30px ">
  </div>

  <!--score guide  -->
  <div class="container  " style="">
    <div class="row">
        <div class="col">
            <div class="btn-group">
                  <img class="clickLevel" src="<?php echo base_url()?>assets/images/SPEDEMY/tally/board3.png" style="width: 300px ;  " level-number="1">
            </div>
        </div>
        <div class="col">

          <div class="btn-group">
                <img class="clickLevel" src="<?php echo base_url()?>assets/images/SPEDEMY/tally/board3.png" style="width: 300px ;  " level-number="2">
          </div>
      </div>
      <div class="col">
        <div class="btn-group">
              <img class="clickLevel" src="<?php echo base_url()?>assets/images/SPEDEMY/tally/board3.png" style="width: 300px ;  "  level-number="3">
        </div>
      </div>
    </div>
  </div>
  <!--table  -->

  <div class="container result_div" style="display:none;   ">


    <div class=" ">
      <div class="panel-heading ">
        <h1 style="background:white">
          EASY LEVEL
        </h1>
      </div>
        <?php if($result->num_rows() > 0){ ?>

        <table class="table table-fixed table-light">
          <!-- <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1"> -->

          <thead class="thead-dark">
            <tr class="text-center ">
                <th class="col-xs-1">#</th>
                <th class="col-xs-1">User</th>
                <th class="col-xs-1">Level</th>
                <th class="col-xs-1">Category</th>
                <th class="col-xs-2">Score</th>
                <th class="col-xs-2">Total Time Used</th>
                <th class="col-xs-2">Average Speed</th>
                <th class="col-xs-1">Accuracy</th>
                <th class="col-xs-1">Attempts</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result->result() as $info):?>
            <tr class="odd gradeX delete-<?php echo $info->resultID?>">
                  <td class="col-xs-1"><?php echo $info->resultID?></td>
                  <td class="col-xs-1"><?php echo $info->user_id?></td>
                  <td class="col-xs-1"><?php echo $info->level_name?></td>
                  <td class="col-xs-1"><?php echo $info->category_name?></td>
                  <td class="col-xs-2"><?php echo $info->score?></td>
                  <td class="col-xs-2"><?php echo $info->total_time?></td>
                  <td class="col-xs-2"><?php echo $info->average_speed?></td>
                  <td class="col-xs-1"><?php echo $info->accuracy?></td>
                  <td class="col-xs-1"><?php echo $info->attempts?></td>
            </tr>
          <?php endforeach;?>

          </tbody>
        </table>
      <?php }else{
    echo 'No results found...';
    }?>
      </div>

    </div>

    <div class="container mod_div" style="display:none;   ">


      <div class=" ">
        <div class="panel-heading ">
          <h1 style="background:white">
            MODERATE LEVEL
          </h1>
        </div>
        <?php if($result_mod->num_rows() > 0){ ?>

        <table class="table table-fixed table-light">
          <!-- <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1"> -->

          <thead class="thead-dark">
            <tr class="text-center ">
                <th class="col-xs-1">#</th>
                <th class="col-xs-1">User</th>
                <th class="col-xs-1">Level</th>
                <th class="col-xs-1">Category</th>
                <th class="col-xs-2">Score</th>
                <th class="col-xs-2">Total Time Used</th>
                <th class="col-xs-2">Average Speed</th>
                <th class="col-xs-1">Accuracy</th>
                <th class="col-xs-1">Attempts</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result_mod->result() as $info):?>
            <tr class="odd gradeX delete-<?php echo $info->resultID?>">
                  <td class="col-xs-1"><?php echo $info->resultID?></td>
                  <td class="col-xs-1"><?php echo $info->user_id?></td>
                  <td class="col-xs-1"><?php echo $info->level_name?></td>
                  <td class="col-xs-1"><?php echo $info->category_name?></td>
                  <td class="col-xs-2"><?php echo $info->score?></td>
                  <td class="col-xs-2"><?php echo $info->total_time?></td>
                  <td class="col-xs-2"><?php echo $info->average_speed?></td>
                  <td class="col-xs-1"><?php echo $info->accuracy?></td>
                  <td class="col-xs-1"><?php echo $info->attempts?></td>
            </tr>
          <?php endforeach;?>

          </tbody>
        </table>
      <?php }else{
      echo 'No results found...';
      }?>
      </div>
    </div>


    <div class="container dif_div" style="display:none;  ">


      <div class=" ">
        <div class="panel-heading ">
          <h1 style="background:white">
            DIFFICULT LEVEL
          </h1>
        </div>
        <?php if($result_dif->num_rows() > 0){ ?>

        <table class="table table-fixed table-light">
          <!-- <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1"> -->

          <thead class="thead-dark">
            <tr class="text-center ">
                <th class="col-xs-1">#</th>
                <th class="col-xs-1">User</th>
                <th class="col-xs-1">Level</th>
                <th class="col-xs-1">Category</th>
                <th class="col-xs-2">Score</th>
                <th class="col-xs-2">Total Time Used</th>
                <th class="col-xs-2">Average Speed</th>
                <th class="col-xs-1">Accuracy</th>
                <th class="col-xs-1">Attempts</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result_dif->result() as $info):?>
            <tr class="odd gradeX delete-<?php echo $info->resultID?>">
                  <td class="col-xs-1"><?php echo $info->resultID?></td>
                  <td class="col-xs-1"><?php echo $info->user_id?></td>
                  <td class="col-xs-1"><?php echo $info->level_name?></td>
                  <td class="col-xs-1"><?php echo $info->category_name?></td>
                  <td class="col-xs-2"><?php echo $info->score?></td>
                  <td class="col-xs-2"><?php echo $info->total_time?></td>
                  <td class="col-xs-2"><?php echo $info->average_speed?></td>
                  <td class="col-xs-1"><?php echo $info->accuracy?></td>
                  <td class="col-xs-1"><?php echo $info->attempts?></td>
            </tr>
          <?php endforeach;?>

          </tbody>
        </table>
      <?php }else{
      echo 'No results found...';
      }?>
      </div>

    </div>





        <!-- <div class="form-group row">
          <div class="col">
            <input type="hidden" class="form-control-plaintext" name="category_id"  value="<?php echo $category_id?>"  >
          </div>
        </div> -->



  <!--score guide  -->
  <div class="container " style="">
    <img src="<?php echo base_url()?>assets/images/SPEDEMY/tally/board3.png" style="width: 100% ; margin-top: 10px ">
  </div>

</div>







<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
 <script src="<?php echo base_url(); ?>assets/apps/scripts/sweetalert.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
</body>
</html>
