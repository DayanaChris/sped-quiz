<?php $this->load->view('admin/inc/top');?>

<div class="col-md-6">
        <div class="btn-group">
            <a href="<?php echo base_url()?>add-lesson" class="btn sbold green"> Add New Lesson
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <div style="clear:both"></div>
    <div style="height:40px; visibility:hidden"></div>

    <?php if($lesson->num_rows() > 0){ ?>
    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
      <thead>
        <tr>
          <th></th>
          <th>Category Name</th>
          <th>Lesson Name</th>
          <th>Template #</th>


          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($lesson->result() as $info):?>
        <tr class="odd gradeX delete-<?php echo $info->lessonID?>">
          <td><?php echo $info->lessonID?></td>

          <td><?php echo $info->category_name?></td>
          <td><?php echo $info->lesson_name?></td>
          <td><?php echo $info->template_num?></td>



          <td>
          <!-- <a href=""><span class="fa fa-edit"></span></a> | -->
          <a href="<?php echo base_url()?>edit-lesson/<?php echo $info->lessonID?>"><span class="fa fa-edit"></span></a> |
          <a href="javascript:;" class="delete_lesson" id="<?php echo $info->lessonID?>"><span class="fa fa-trash"></span></a></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    <?php }else{
    echo 'No Lesson found...';
    }?>

<?php $this->load->view('admin/inc/footer');?>
