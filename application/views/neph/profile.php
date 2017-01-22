<div class="main-content">
 <!-- basic scripts -->
 <script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
<!-- table specific plugin scripts -->

		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>
        <!-- form specific plugin scripts -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.knob.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-tag.min.js"></script>
       
		
		<script src="<?php echo base_url(); ?>assets/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.hotkeys.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/x-editable/bootstrap-editable.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/x-editable/ace-editable.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
		
        
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo base_url(); ?>index.php/neph">Home</a>
							</li>
                            <li class="active">Profile</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<div class="page-header">
									<h1>Profile Information</h1>
								</div><!-- /.page-header -->
                                <?php foreach($neph as $row): ?>
								<div class="row">
									<div class="col-md-4" >
                                    <?php if($row->image_name == ""){?>
										<div class="center">
											<span class="profile-picture">
												<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo base_url(); ?>assets/avatars/profile-pic.jpg"></img>
											</span>
											<?php } else{ ?>
                                            <div class="center">
											<span class="profile-picture">
												<img height="200" width="200" id="avatar" src="<?php echo base_url(); ?>img/neph/<?php echo $row->neph_id; ?>/<?php echo $row->image_name; ?>"></img>
											</span>
                                            <?php } ?>
                                            
                                            
                                            
											<div class="space-4"></div>
											
										</div>
										<div class="space-4"></div>

										<div class="col-sm-8 col-sm-offset-2">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5>
													Status
												</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="radio">
														<label>
															<input name="form-field-radio" type="radio" class="ace" disabled="disabled" <?php if($row->status=="Active") echo 'checked'; ?>>
															<span class="lbl"> Active</span>
														</label>
													</div>

													<div class="radio">
														<label>
															<input name="form-field-radio" type="radio" class="ace" disabled="disabled" <?php if($row->status=="On Leave") echo 'checked'; ?>>
															<span class="lbl">On Leave</span>
														</label>
													</div>

													<div class="radio">
														<label>
															<input name="form-field-radio" type="radio" class="ace" disabled="disabled" <?php if($row->status=="In Active") echo 'checked'; ?>>
															<span class="lbl">Inactive</span>
														</label>
													</div>
															
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div>
										</div>
										
										

										<div class="row">
											<div class="space space-4"></div>
											<div class="col-xs-2"></div>
												<div class="center col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 ">
													<a href="<?php echo base_url(); ?>index.php/neph/edit_profile" class="btn btn-sm btn-block btn-default">
														<i class="icon-edit bigger-120"></i>
														<span class="bigger-110">Edit</span>
													</a>
												<div class="space space-4"></div>	
											</div>
										</div>
									</div><!-- /.col -->

									<div class="col-md-8">
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Name:</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" readonly="readonly" value="<?php echo $row->name; ?>">
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Title:</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" readonly="readonly" value="<?php echo $row->title; ?>" >
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">IC:</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" readonly="readonly" value="<?php echo $row->neph_ic; ?>" >
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Address:</label>
												<div class="col-sm-10">
													<textarea class="form-control" rows="3" readonly="readonly"><?php echo $row->address; ?></textarea>
												</div>
											</div>
							
											<div class="row">
												<div class="col-md-6 col-xs-12" >
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;">Phone:</label>
														<div class="col-md-8 col-sm-10">
															<input type="text" class="form-control" readonly="readonly" value="<?php echo $row->phone; ?>">
														</div>
													</div>
												</div>
								
												<div class="col-md-6  col-xs-12">
													<div class="form-group">
														<label class="col-sm-2 control-label" style="text-align: left;">Mobile:</label>
														<div class="col-md-9 col-md-offset-1 col-sm-10" >
															<input type="text" class="form-control" readonly="readonly" value="<?php echo $row->mobile; ?>">
														</div>
													</div>
												</div>
											</div>
							
											<div class="row">
												<div class="col-md-6 col-xs-12">
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;">Email:</label>
														<div class="col-md-8 col-sm-10">
															<input type="text" class="form-control" readonly="readonly" value="<?php echo $row->email; ?>">
														</div>
													</div>
												</div>
								
												<div class="col-md-6 col-xs-12">
													<div class="form-group">
														<label class="col-sm-2 control-label" style="text-align: left;" >Website:</label>
														<div class="col-md-9 col-md-offset-1 col-sm-10">
															<input type="text" class="form-control" readonly="readonly" value="<?php echo $row->website; ?>">
														</div>
													</div>
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Comment:</label>
												<div class="col-sm-10">
													<textarea class="form-control" rows="3" readonly="readonly"><?php echo $row->comment; ?></textarea>
												</div>
											</div>
					
										</form>
									</div><!-- /.col -->
                                    <?php endforeach; ?>

								</div><!-- /.row -->
							</div>
						</div>

					
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					

					<div class="ace-settings-box" id="ace-settings-box">
						

						
						

						

						

						
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
           
        
    