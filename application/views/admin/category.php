<?php $this->load->view('admin/inc/top');?>

<div class="col-md-6">
        <div class="btn-group">
            <a href="<?php echo base_url()?>add-category" class="btn sbold green"> Add New Category
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <div style="clear:both"></div>
    <div style="height:40px; visibility:hidden"></div>
<?php if($category->num_rows() > 0){ ?>
<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
  <thead>
    <tr>
      <th></th>
      <th>Category Name</th>
      <th>Category Image</th>
      <th>Category Submenu Title</th>
      <th>Template #</th>


      <th>Option</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($category->result() as $cat):?>
    <tr class="odd gradeX delete-<?php echo $cat->id?>">
      <td><?php echo $cat->id?></td>
      <td><?php echo $cat->category_name?></td>
      <td><?php echo $cat->category_image?>
        <img src="<?php echo base_url().'assets/uploads/'.$cat->category_image ?>" class="img-responsive" style="width:100px;">

      </td>
      <td><?php echo $cat->category_image_title?>
        <img src="<?php echo base_url().'assets/uploads/'.$cat->category_image_title ?>" class="img-responsive" style="width:100px;">

      </td>
      <td><?php echo $cat->template_num?></td>


      <td>
      <a href="<?php echo base_url()?>edit-category/<?php echo $cat->id?>"><span class="fa fa-edit"></span></a> |
      <a href="javascript:;" class="delete_category" id="<?php echo $cat->id?>"><span class="fa fa-trash"></span></a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<?php }else{
echo 'No category found...';
}?>

<?php $this->load->view('admin/inc/footer');?>
