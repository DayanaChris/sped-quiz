<?php $this->load->view('admin/inc/top');?>
<?php
$name = 'leveladd';
$value = '';
if($is_edit == true){
	if($level_details->num_rows() > 0){
		$lev = $level_details->row();
		$name = 'leveledit';
		$value = $lev->level_name;

	}
}
?>
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> New level</span>
        </div>

    </div>
    <div class="portlet-body form">
        <form role="form" method="post" action="<?php echo base_url()?>level/post">
            <div class="form-body">
                <div class="form-group form-md-line-input">
                    <input type="text" class="form-control" id="form_control_1" name="<?php echo $name?>" value="<?php echo $value?>">
                    <label for="form_control_1">level name</label>
                    <span class="help-block">Some help goes here...</span>
                </div>

            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Submit</button>
                <a href="<?php echo base_url()?>level" class="btn default">Cancel</a>
            </div>
            <?php if($is_edit == true){?>
            	<input type="hidden" name="levid" value="<?php echo $lev->id?>" />
            <?php }?>
        </form>
    </div>
</div>

<?php $this->load->view('admin/inc/footer');?>
