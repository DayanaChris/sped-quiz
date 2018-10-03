<?php $this->load->view('admin/inc/top');?>

<!-- <div class="col-md-6">
        <div class="btn-group">
            <a href="<?php echo base_url()?>add-level" class="btn sbold green"> Add New Level
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div> -->
    <div style="clear:both"></div>
    <div style="height:40px; visibility:hidden"></div>
<?php if($level->num_rows() > 0){ ?>
<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
  <thead>
    <tr>
      <th></th>
      <th>Level Name</th>
      <th>Level Image</th>
      <th>Option</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($level->result() as $lev):?>
    <tr class="odd gradeX delete-<?php echo $lev->id?>">
      <td><?php echo $lev->id?></td>
      <td><?php echo $lev->level_name?></td>
      <td><?php echo $lev->level_image?>
        <img src="<?php echo base_url().'assets/uploads/level_image/'.$lev->level_image ?>" class="img-responsive" style="width:100px;">
      </td>


      <td>
      <a href="<?php echo base_url()?>edit-level/<?php echo $lev->id?>"><span class="fa fa-edit"></span></a> |
      <a href="javascript:;" class="delete_level" id="<?php echo $lev->id?>"><span class="fa fa-trash"></span></a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<?php }else{
echo 'No Level found...';
}?>

<?php $this->load->view('admin/inc/footer');?>
