<?php $this->load->view('admin/inc/top');?>

<div class="col-md-6">
        <div class="btn-group">
            <a href="<?php echo base_url()?>add-question" class="btn sbold green"> Add New Question
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <div style="clear:both"></div>
    <div style="height:40px; visibility:hidden"></div>
<?php if($quiz->num_rows() > 0){ ?>
<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
  <thead>
    <tr>
      <th></th>
      <th>Question</th>
      <th>Category</th>
      <th>Level</th>
      <th>Alloted Time</th>
      <th>Background Color</th>
      <th>Template #</th>


      <th>Option</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($quiz->result() as $info):?>
    <tr class="odd gradeX delete-<?php echo $info->quizID?>">
      <td><?php echo $info->quizID?></td>
      <td><?php echo $info->question?></td>
      <td><?php echo $info->category_name?></td>
      <td><?php echo $info->level_name?></td>
      <td><?php echo $info->time?></td>
      <td><?php echo $info->background?></td>
      <td><?php echo $info->template_num?></td>



      <td>
      <!-- <a href=""><span class="fa fa-edit"></span></a> | -->
      <a href="<?php echo base_url()?>edit-quiz/<?php echo $info->quizID?>"><span class="fa fa-edit"></span></a> |
      <a href="javascript:;" class="delete_question" id="<?php echo $info->quizID?>"><span class="fa fa-trash"></span></a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<?php }else{
echo 'No question found...';
}?>

<?php $this->load->view('admin/inc/footer');?>
