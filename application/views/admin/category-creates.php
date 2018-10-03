<?php $this->load->view('admin/inc/top');?>
<?php
$name = 'categoryadd';
$value = '';
if($is_edit == true){
	if($category_details->num_rows() > 0){
		$cat = $category_details->row();
		$name = 'categoryedit';
		$value = $cat->category_name;

	}
}
?>
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> New Category</span>
        </div>

    </div>
    <div class="portlet-body form">
        <form role="form" method="post" action="<?php echo base_url()?>category/post">
            <div class="form-body">
                <div class="form-group form-md-line-input">
                    <input type="text" class="form-control" id="form_control_1" name="<?php echo $name?>" value="<?php echo $value?>">
                    <label for="form_control_1">Category name</label>
                    <span class="help-block">Some help goes here...</span>
                </div>

            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Submit</button>
                <a href="<?php echo base_url()?>category" class="btn default">Cancel</a>
            </div>
            <?php if($is_edit == true){?>
            	<input type="hidden" name="catid" value="<?php echo $cat->id?>" />
            <?php }?>
        </form>
    </div>
</div>

<?php $this->load->view('admin/inc/footer');?>
