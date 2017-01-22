<div class="main-content" id="user-profile-3">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-editable.css" />
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
        <script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.wizard.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
        
       
		
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
		<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
       
		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
				
				$.mask.definitions['~']='[+-]';
				
				$('#phone').mask('(99) 9999-9999');
				
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{2}\) \d{4}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
			$('#mobile').mask('(999) 999-9999');
			
				
				//validate form
				$("#edit_form").validate({
		errorElement: 'div',
		errorClass: 'help-block',
					focusInvalid: false,
		
   
        // Specify the validation rules
        rules: {
            name: "required",
			email: {
			required: true,
			email:true
			},
			phone: {
			required: true,
			phone: 'required'
						},
			address: "required"
        },
        
        // Specify the validation error messages
        messages: {
			email: {
			email: "Please enter a valid email.",
			},
        },
		
		invalidHandler: function (event, validator) { //display error alert on form submit   
						$('.alert-danger', $('.login-form')).show();
					},
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error').addClass('has-info');
						$(e).remove();
					},
        
        submitHandler: function(form) {
            form.submit();
        }
    });
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
			
			
		</script>
        
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="<?php echo base_url(); ?>index.php/staff">Home</a>
							</li>
                            <li class="active">Profile</li>
						</ul><!-- .breadcrumb -->

						
					</div>
					<?php foreach($staff as $row): ?>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
                            <form id="edit_form" class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/staff/save_edit_profile" novalidate="novalidate">
								<div class="page-header">
									<h1>Profile Information</h1>
								</div><!-- /.page-header -->
                                  <?php if($this->session->flashdata('error_msg')){ echo '<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove"></i>
											</button>

											<strong>
												<i class="icon-remove"></i>
												Error!
											</strong>'.$this->session->flashdata('error_msg').'
											<br />
										</div>'; }
										$this->session->unset_userdata('success_msg');
                                       ?>
								<div class="row">
									<div class="col-md-4" >
										<div class="center">
											
												<input type="file" name="fileInput"/>
											
											
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
															<input name="status" type="radio" class="ace" value="Active" <?php if($row->status=="Active") echo 'checked'; ?>>
															<span class="lbl"> Active</span>
														</label>
													</div>

													<div class="radio">
														<label>
															<input name="status" type="radio" class="ace" value="On Leave" <?php if($row->status=="On Leave") echo 'checked'; ?>>
															<span class="lbl">On Leave</span>
														</label>
													</div>

													<div class="radio">
														<label>
															<input name="status" type="radio" class="ace" value="In Active" <?php if($row->status=="In Active") echo 'checked'; ?>>
															<span class="lbl">Inactive</span>
														</label>
													</div>
															
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div>
										</div>
                                        
                                        <div class="space-4"></div>

										<div class="col-sm-8 col-sm-offset-2">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5>
													Role
												</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="radio">
														<label>
															<input name="form-field-radio2" type="radio" class="ace" disabled="disabled" <?php if($row->role=="clerk") echo 'checked'; ?>>
															<span class="lbl">Clerk</span>
														</label>
													</div>
                                                    
                                                    <div class="radio">
														<label>
															<input name="form-field-radio2" type="radio" class="ace" disabled="disabled" <?php if($row->role=="nurse") echo 'checked'; ?>>
															<span class="lbl">Nurse</span>
														</label>
													</div>

													<div class="radio">
														<label>
															<input name="form-field-radio2" type="radio" class="ace" disabled="disabled" <?php if($row->role=="medical_assistant") echo 'checked'; ?>>
															<span class="lbl">Medical Assistant</span>
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
													</a>

													<button type="submit" class="btn btn-sm btn-block btn-success">
														<i class="icon-save bigger-120"></i>
														<span class="bigger-110">Save</span>
													</button>
                                                    <button type="reset" class="btn btn-sm btn-block btn-default">
														<i class="icon-undo bigger-120"></i>
														<span class="bigger-110">Reset</span>
													</button>
												
												<div class="space space-4"></div>	
										</div>	
										</div>
									</div><!-- /.col -->

									<div class="col-md-8">
										
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Name:</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="name" placeholder="Required" value="<?php echo $row->name; ?>">
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Title:</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="title" value="<?php echo $row->title; ?>" >
												</div>
											</div>
							
											 <div class="row">
												<div class="col-md-6 col-xs-12" >
                            
											<div class="form-group">
												<label class="col-md-4 col-sm-2 control-label" style="text-align: left;">IC:</label>
												<div class="col-md-8 col-sm-10">
													<input name="ic" type="text" title="If Incorrect, Contact Adminstration" class="form-control" readonly="readonly" value="<?php echo $row->staff_ic; ?>" >
												</div>
											</div>
                                            </div>
                                            <div class="col-md-6 col-xs-12" >
                                            		<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Center:</label>
												<div class="col-md-9 col-md-offset-1 col-sm-10">
													<input type="text" class="form-control" readonly="readonly" value="<?php echo $center_name; ?>">
                                                  
												</div>
											</div>
                                            </div>
                                            </div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Address:</label>
												<div class="col-sm-10">
													<textarea class="form-control" rows="3" name="address" placeholder="Required"><?php echo $row->address; ?></textarea>
												</div>
											</div>
							
											<div class="row">
												<div class="col-md-6 col-xs-12" >
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;">Phone:</label>
														<div class="col-md-8 col-sm-10">
															<input type="text" class="form-control" name="phone" id="phone" placeholder="Required" value="<?php echo $row->phone; ?>">
														</div>
													</div>
												</div>
								
												<div class="col-md-6  col-xs-12">
													<div class="form-group">
														<label class="col-sm-2 control-label" style="text-align: left;">Mobile:</label>
														<div class="col-md-9 col-md-offset-1 col-sm-10" >
															<input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $row->mobile; ?>">
														</div>
													</div>
												</div>
											</div>
							
											<div class="row">
												<div class="col-md-6 col-xs-12">
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;">Email:</label>
														<div class="col-md-8 col-sm-10">
															<input type="text" class="form-control" name="email" placeholder="Required" value="<?php echo $row->email; ?>">
														</div>
													</div>
												</div>
								
												<div class="col-md-6 col-xs-12">
													<div class="form-group">
														<label class="col-sm-2 control-label" style="text-align: left;" >Website:</label>
														<div class="col-md-9 col-md-offset-1 col-sm-10">
															<input type="text" class="form-control" name="website" value="<?php echo $row->website; ?>">
														</div>
													</div>
												</div>
											</div>
							
											<div class="form-group">
												<label class="col-sm-2 control-label" style="text-align: left;">Comment:</label>
												<div class="col-sm-10">
													<textarea class="form-control" rows="3" name="comment"><?php echo $row->comment; ?></textarea>
												</div>
											</div>
					
										
									</div><!-- /.col -->
                                    
                                    <?php endforeach; ?>

								</div><!-- /.row -->
                                </form>
                                
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
           
        
      
        
     	<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
			
				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Click and Coose Image',
					btn_change:null,
					no_icon:'icon-picture',
					thumbnail:'large',
					droppable:true,
					before_change: function(files, dropped) {
						var file = files[0];
						if(typeof file === "string") {//files is just a file name here (in browsers that don't support FileReader API)
							if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
						}
						else {//file is a File object
							var type = $.trim(file.type);
							if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
									|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
								) return false;
			
							if( file.size > 1100000 ) {//~1000Kb
								return false;
							}
						}
			
						return files;
					}
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				
			
			
				////////////////////
				
			});
		</script>

		</div><!-- /.main-container -->
       
       
		

