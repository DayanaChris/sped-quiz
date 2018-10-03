<?php
if($method == 'index'){
?>
<input type="hidden" value="<?php echo $id?>" class="click_input"/>
<div class="portlet-body">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab_1_1" data-toggle="tab" aria-expanded="true" class="gallery"> Gallery </a>
        </li>
        <li class="">
            <a href="#tab_1_2" data-toggle="tab" aria-expanded="false"> Upload </a>
        </li>   
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="tab_1_1">
        	<div class="col-md-9">
	           <div class="imglist"></div>
            </div>
            <div class="col-md-3">
            	<div class="iomgselct"></div>
                <a href="javascript:;" class="btn btn-default hide useimg" style="margin-top:20px">Use this Image</a>
                <input type="hidden" class="image_name" />
                <input type="hidden" class="image_id" />
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="tab-pane fade" id="tab_1_2">
           <div id="uploader">
                <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
            </div>
        </div>
    </div>
</div>
<?php 
}
if($method == 'img_list'){
	if($img_list->num_rows() > 0){
		foreach($img_list->result() as $img){
?>
<div class="plupload_dropbox plupload_view_thumbs" id="uploader_dropbox" style="width: 121px;float: left;">
  <ul class="plupload_filelist_content ui-sortable" id="uploader_filelist" unselectable="on">
    <li class="plupload_done ui-state-default plupload_file" style="height: 110px;">
      <div class="plupload_file_thumb plupload_thumb_embedded" style="width: 100px; height: 96px;">
        <img src="<?php echo base_url()?>assets/uploads/<?php echo $img->img_name?>" style="width:100%; cursor:pointer;" class="thsimsge" data-id="<?php echo $img->id?>" data-name="<?php echo $img->img_name?>" />
      </div>
    </li>    
  </ul>
  <div class="plupload_clearer">&nbsp;</div>
</div>
<?php 
		}
		echo '<div style="clear:both"></div>';
	}else{
		echo 'No images found...';
	}
}
?>