<?php $this->load->view('admin/inc/top');?>
 <form role="form" method="post" action="<?php echo base_url()?>quiz/post">
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> New Question</span>
        </div>

    </div>
    <div class="portlet-body form">

            <div class="form-body">
            <div class="col-md-8">
                <div class="form-group form-md-line-input">
                    <input type="text" class="form-control" id="form_control_1" name="question" value="<?php //echo $value?>">
                    <label for="form_control_1">Question</label>
                    <span class="help-block">Some help goes here...</span>
                </div>
             </div>


             <!-- category dropdown -->
             <div class="col-md-4">
                <div class="form-group form-md-line-input">
                    <select name="category_id" class="form-control">
                    	<?php
          						if($category->num_rows() > 0){
          							foreach($category->result() as $cat){
          						?>
                                  	<option value="<?php echo $cat->id?>"><?php echo $cat->category_name?></option>
                                  <?php
          							}
          						}
          						?>
                    </select>
                    <label for="form_control_1">Category</label>
                    <span class="help-block">Some help goes here...</span>
                </div>
             </div>
             <!-- end category dropdown -->



             <!--LEVEL dropdown  -->
              <div class="col-md-4">
                 <div class="form-group form-md-line-input">
                     <select name="level_id" class="form-control">
                      <?php
                        if($level->num_rows() > 0){
                          foreach($level->result() as $lev){
                        ?>
                                      <option value="<?php echo $lev->id?>"><?php echo $lev->level_name?></option>
                                     <?php
                          }
                        }
                        ?>
                     </select>
                     <label for="form_control_1">LEVEL</label>
                     <span class="help-block">Some help goes here...</span>
                 </div>
              </div>
              <!--END LEVEL dropdown  -->






             <div class="col-md-4">
                 <div class="form-group form-md-line-input">
                    <select name="timepic" class="form-control">
                    	<?php
						for ($i = 0; $i <= 59; $i+=5) {
							if($i < 9){
								$zero = 0;
							}else{
								$zero = '';
							}
						?>
	                    	<option>00:<?php echo $zero.$i?>:00</option>
                        <?php
					 	}
						?>
                    </select>
                    <label for="form_control_1">Time</label>
                    <span class="help-block">Some help goes here...</span>
                </div>
            </div>
            <div style="clear:both"></div>
		</div>
       </div>
</div>

<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> Answer</span>
        </div>
         <div class="actions">
            <?php /*?>
			//remove sa kay makakutaw nga part :D
			<div class="btn-group">
                <a class="btn btn-sm green" href="javascript:;" id="add-more"> Add more answer
                    <i class="fa fa-plus"></i>
                </a>
            </div>
			<?php */?>
        </div>
    </div>
    <div class="portlet-body form">
        <div class="col-xs-12">
            <div class="col-md-12" >

                <div  class="form-horizontal" id="field">
                    <div id="field0" class="form-body">
                        <!-- Text input-->
                        <?php
						$count = 0;
						for ($char = 'A'; $char <= 'C'; $char++) {

						?>
                        <div class="form-group">
                            <div class="mt-radio-list col-md-1">
                                <label class="mt-radio"> <?php echo $char?>
                                    <input <?php if($char == 'A'){?>checked<?php }?> type="radio" value="<?php echo strtolower($char)?>" name="answer[]" />
                                    <span></span>
                                </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control input-inline input-medium img<?php echo $count?>" name="img[]">
                                <input type="hidden" class="imgId<?php echo $count?>" name="imgid[]" />
                                <span class="help-inline"><a class="select_img" id="<?php echo $count?>"  data-toggle="modal" href="#static">Upload or select image.</a></span>
                            </div>
                        </div>
                        <?php
						$count++;
							}
						?>
                    </div>
                </div>
                <div style="clear:both"></div>
                <!-- Button -->

            </div>
        </div>
          <div style="clear:both"></div>
	</div>
</div>
<div class="form-actions noborder">
    <button type="submit" class="btn blue">Submit</button>
    <a href="<?php echo base_url()?>quiz" class="btn default">Cancel</a>
</div>

 </form>

 <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" style="width:80%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                    <button type="button" data-dismiss="modal" class="btn green">Continue Task</button>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('admin/inc/footer');?>
