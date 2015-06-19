<h1><?php echo lang('create_style_heading');?></h1>
<p><?php echo lang('create_style_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_style");?>

      <p>
            <?php echo lang('create_style_name_label', 'style_name');?> <br />
            <?php echo form_input($style_name);?>
      </p>


      <p><?php echo form_submit('submit', lang('create_style_submit_btn'));?></p>

<?php echo form_close();?>