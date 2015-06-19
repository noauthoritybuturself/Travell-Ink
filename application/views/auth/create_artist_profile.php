<h1><?php echo 'Create Artist Profile'?></h1>
<p><?php echo 'Please enter the artist profile information below';?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_artist_profile");?>

      <p>
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>
      <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo form_label('Phone:', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo form_label('City:', 'city');?> <br />
            <?php echo form_input($city);?>
      </p>

      <p>
            <?php echo form_label('Facebook:', 'facebook');?> <br />
            <?php echo form_input($facebook);?>
      </p>

      <p>
            <?php echo form_label('Instagram:', 'instagram');?> <br />
            <?php echo form_input($instagram);?>
      </p>

      <p>
            <?php echo form_label('Studio', 'studio');?> <br />
            <?php echo form_input($studio);?>
      </p>

       <?php echo form_hidden($id);?>


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

<?php echo form_close();?>
