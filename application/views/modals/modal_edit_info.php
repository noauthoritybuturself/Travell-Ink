<div class="modal fade" id="modal_edit_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        		<form id="infoForm" method="post" class="form-horizontal" action="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Edit Info</h4>

            </div>
            <div class="modal-body">
            	
                    <div class="form-group">
                        <label class="col-xs-3 control-label">First name</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="firstname" 
                            value="<?php echo $artist_profile->first_name ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Last name</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="lastname" 
                            value="<?php echo $artist_profile->last_name ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">City</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="city" id="city"
                            value="<?php echo $artist_profile->city_id ?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Phone Number</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="phonenumber" 
                            value="<?php echo $artist_profile->phone ?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="email"
                            value="<?php echo $artist_profile->email ?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Facebook</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="facebook"
                            	value="<?php echo $artist_profile->facebook ?>"/>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Instagram</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="intagram"
                            	value="<?php echo $artist_profile->instagram ?>"/>

                        </div>
                    </div>

                    



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php $this->load->view('auth/geo_scripts'); ?>