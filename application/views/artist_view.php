<div class="container">
	
	<div class="row">
		
		<div class="col-md-6">
					<div class="row">


		<div class="col-md-5 profile_description">

			<div class="wrapper" id="wrapper">
			<img class="img-responsive profile_picture profile_img" src="<?php echo base_url() . $artist_profile->profile_picture; ?>" 
			alt="placeholder+image">
			<?php if($can_edit){?> 

			<img class="edit_button" id="edit_button_profile_picture" 
			data-toggle="popover" data-placement="bottom" 
			src="<?php echo base_url(); ?>statics/img/tool.png"> 
			<div class="popover_content_wrapper" style="display: none">
  			<div class="pseudo-button" onclick="chooseFile(fileInput);"><p class="nomargin">CHANGE PROFILE PICTURE</p></div>
			</div>

				
			<?php }?>

			</div>

		</div>



		<div class="col-md-7 profile_description">

		<div class="profile_description_top">


			<?php if($can_edit){?> 

			<img class="edit_button" data-toggle="popover" 
			data-placement="bottom" id="edit_button_profile_description" 
			src="<?php echo base_url(); ?>statics/img/tool.png" >

			<div class="popover_content_wrapper" style="display: none">
  			<div data-toggle="modal" data-target="#modal_edit_info"><p class="nomargin">CHANGE INFO</p></div>
			</div>



			 <?php }?>

			<h3 class="artist_profile_name"><?php echo $artist_profile->first_name.' '.$artist_profile->last_name ?></h3>
				<?php 

					  if(!empty($artist_profile->city_id))
    				$artist_profile->city_id = $this->locations->get_city_by_id($artist_profile->city_id);


				 ?>
			<p><?php echo $artist_profile->city_id ?><br>
			<?php echo $artist_profile->phone ?><br>
			<?php echo $artist_profile->email ?></p>
			</div>

		<div class="profile_description_bottom">
			
			<div class="profile_social">

				<a href="<?php echo 'http://'.$artist_profile->facebook ?>" target="_blank">
				<img src="http://icons.iconarchive.com/icons/sicons/flat-shadow-social/256/facebook-icon.png" alt="">
				</a>
				<a href="<?php echo 'http://'.$artist_profile->instagram ?>" target="_blank">
				<img src="http://icons.iconarchive.com/icons/designbolts/free-instagram/256/Active-Instagram-3-icon.png" alt="">
				</a>
			</div>

			<div class="profile_styles text-center">

						<?php if($can_edit){?> <img src="<?php echo base_url(); ?>statics/img/tool.png" 
			class="edit_button" id="edit_button_styles"> <?php }?>

				<h6>TATTOO STYLES</h6>
				 <p><?php echo $artist_profile->styles ?></p>

			</div>

			</div>
		</div>
		</div>
		</div>

		<div class="col-md-6">
			<div class="row">
			<div class="col-md-5 col-md-offset-2">


		<div class="frame-wrapper" onclick="loadGallery('sketch_gallery')">
      <img class="img-with-frame img-responsive" src="<?php echo base_url().$artist_profile->sketch_cover;?>">
      <img class="sketch_frame" src="<?php echo base_url(); ?>statics/img/sketch.png">

 </div>




			</div>
			<div class="col-md-5">
							<div class="frame-wrapper" onclick="loadGallery('tattoo_gallery')">
     	<img class="img-with-frame img-responsive" src="<?php echo base_url().$artist_profile->tattoo_cover;?>">
      <img class="sketch_frame" src="<?php echo base_url(); ?>statics/img/tattoo.png">
 </div></div>

</div>
		</div>
		</div>

		<div class="row gallery top30">


			<?php

					$this->load->view('tattoo_gallery',$output2);

			 ?>
	</div>


<?php 

if($can_edit){
	$this->load->view('modals/modal_edit_info');
	$this->load->view('modals/modal_gallery_upload',$output);



?>
<div style="height:0px;overflow:hidden">

<?php echo form_open_multipart();?>
   <input type="file" id="fileInput" onchange="this.form.submit()" name="input_profile_picture" />
    <?php echo form_close(); ?>

<?php echo form_open_multipart();?>
   <input type="file" id="fileInputsketch" onchange="this.form.submit()" name="input_sketch_cover" />
    <?php echo form_close(); ?>

<?php echo form_open_multipart();?>
   <input type="file" id="fileInputattoo" onchange="this.form.submit()" name="input_tattoo_cover" />
    <?php echo form_close(); ?>
</div>


<?php
}
?>


