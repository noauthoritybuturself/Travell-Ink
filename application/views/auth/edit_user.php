<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

        <p>
            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            <?php echo lang('edit_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

        <p>
            <?php echo 'Email: (if changing email)';?> <br />
            <?php echo form_input($email);?>
      </p>


      <p>
            <?php echo lang('edit_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm);?>
      </p>

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>

<?php echo form_close();?>

<h3>Artist profiles</h3>
<p>Bellow is a list of artist profiles associated to this user</p>

<table cellpadding=0 cellspacing=10>
  <tr>
    <th><?php echo lang('index_fname_th');?></th>
    <th><?php echo lang('index_lname_th');?></th>
    <th><?php echo lang('index_email_th');?></th>
    <th>Phone</th>
    <th>City</th>
    <th>Facebook</th>
    <th>Instagram</th>
    <th>Studio</th>
    <th><?php echo lang('index_action_th');?></th>
  </tr>
  <?php foreach ($profiles as $profile):

  if(!empty($profile->city_id))
    $profile->city_id = $this->locations->get_city_by_id($profile->city_id);

  ?>
    <tr>
      <td><?php echo htmlspecialchars($profile->first_name,ENT_QUOTES,'UTF-8');?></td>
      <td><?php echo htmlspecialchars($profile->last_name,ENT_QUOTES,'UTF-8');?></td>
      <td><?php echo htmlspecialchars($profile->email,ENT_QUOTES,'UTF-8');?></td>
      <td><?php echo htmlspecialchars($profile->phone,ENT_QUOTES,'UTF-8');?></td>
      <td><?php echo htmlspecialchars(($profile->city_id),ENT_QUOTES,'UTF-8');?></td>
      <td><?php echo htmlspecialchars($profile->facebook,ENT_QUOTES,'UTF-8');?></td>
      <td><?php echo htmlspecialchars($profile->instagram,ENT_QUOTES,'UTF-8');?></td>
      <td><?php echo htmlspecialchars($profile->studio_profile_id,ENT_QUOTES,'UTF-8');?></td>
      <td><?php echo anchor("auth/edit_artist_profile/".$profile->id, 'Edit') ;?></td>
    </tr>
  <?php endforeach;?>
</table>


<?php echo anchor('auth/create_artist_profile/'.$user->id, 'Create new artist profile')?>