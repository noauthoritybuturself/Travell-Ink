<h1>Edit Artist Profile</h1>
<p>Please enter the artist profile information below</p>

<div id="infoMessage"><?php echo $message;?></div>

<?php 
$attributes = array('id' => 'edit_artist');
echo form_open(uri_string(),$attributes);?>

      <p>
            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>
      <p>
            <?php echo lang('edit_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo form_label('Phone:', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo form_label('City:', 'city');?> <br />
            <?php 
            $data = array(
              'name'        => 'city',
              'id'          => 'city');
            echo form_input($data);

            ?>
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

      <?php echo form_hidden('id', $id);?>
      <?php echo form_input(array('name' => 'cityid', 'type'=>'hidden', 'id' =>'cityid'));?>
      <?php echo form_input(array('name' => 'country', 'type'=>'hidden', 'id' =>'country'));?>
          <div id="addressDetails" class="hide">
        <input name="lat" type="hidden" class="form-control" />
        <input name="lng" type="hidden" class="form-control" />
    </div>

<div class="geo-details" style="">
  <input  data-geo="place_id" value="" id="setting_place_id" name="cityid">
  <input  data-geo="country" value="" id="setting_country" name="country">
</div>


      <p><?php echo form_submit('submit', 'Save Profile');?></p>

<?php 

echo form_close();

//Loading geolocation scripts

$this->load->view('auth/geo_scripts'); ?>
