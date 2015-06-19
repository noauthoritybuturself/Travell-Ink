
	<div class="col-md-3">
		
		<div class="frame-wrapper gallery_cover_wrapper">
      <img class="img-with-frame img-responsive" src="<?php echo base_url().$artist_profile->sketch_cover;?>">
      <img class="sketch_frame" src="<?php echo base_url(); ?>statics/img/sketch.png">



			<?php if($can_edit){ ?>
      <img class="edit_button edit_button_gallery" id="edit_button_gallery_cover" 
			data-toggle="popover" data-placement="bottom" 
			src="<?php echo base_url(); ?>statics/img/tool.png">
						<div class="popover_content_wrapper" style="display: none">
  			<div>
  				<p onclick="chooseFile(fileInputsketch);" class="nomargin">CHANGE COVER PHOTO</p>
  				<div data-toggle="modal" data-target="#modal_gallery_upload"><p class="nomargin top5">EDIT ALBUM</p></div>

  			</div>
			
		</div>
 		<?php } ?>
 </div>


	</div>

	<div class="col-md-9">

	<div class="sort_button">
		
	<button>Most Recent</button>

	<button>By Style</button>

	</div>

	<div class="gallery-box">

		<div>
		<?php echo $output2->output; ?>
    </div>
					

		

	</div>

	</div>
		


  
