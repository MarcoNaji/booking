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
			zip: 'required',
			machine: 'required',
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
								<a href="<?php echo base_url(); ?>index.php/owner">Home</a>
							</li>
                            <li>
								<i class=""></i>
								<a href="<?php echo base_url(); ?>index.php/owner/center">Dialysis Center</a>
							</li>
                            <li class="active">Edit Center</li>
						</ul><!-- .breadcrumb -->

						
					</div>
					<?php foreach($center as $row): ?>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
                            <form id="edit_form" class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/owner/save_edit_center/<?php echo $row->center_id; ?>" novalidate="novalidate">
								<div class="page-header">
									<h1>Center Info</h1>
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
										<div id="center-profile" class="center">
											
												<input type="file" name="imgInput"/>
											
											
											<div class="space-4"></div>
											
										</div>
										<div class="space-4"></div>
           
										<div class="col-sm-8 col-sm-offset-2">
                                        
									<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5>
													Center Logo
												</h5>
											</div>
                                            
											<div class="widget-body" align="center">
												<div id="center-logo" class="widget-main">
                                                <input type="file" name="logoInput"/>                                             
															
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div>
										</div>
                                        
                                        <div class="space-12"></div>

										<div class="row">
											<div class="space space-4"></div>
											<div class="col-xs-2"></div>
												<div class="center col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 ">

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
													<input type="text" class="form-control" name="name" placeholder="Required" value="<?php echo $row->name; ?>"/>
                                                    
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
															<input type="text" class="form-control" name="phone" id="phone" placeholder="Required" value="<?php echo $row->phone; ?>"/>
														</div>
													</div>
												</div>
								
												<div class="col-md-6  col-xs-12">
													<div class="form-group">
														<label class="col-sm-2 control-label" style="text-align: left;">Fax:</label>
														<div class="col-md-9 col-md-offset-1 col-sm-10" >
															<input type="text" class="form-control" name="fax" value="<?php echo $row->fax; ?>">
														</div>
													</div>
												</div>
											</div>
							
											<div class="row">
												<div class="col-md-6 col-xs-12">
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;">Email:</label>
														<div class="col-md-8 col-sm-10">
															<input type="text" class="form-control" name="email" placeholder="Required" value="<?php echo $row->email; ?>"/>
														</div>
													</div>
												</div>
								
												<div class="col-md-6 col-xs-12">
													<div class="form-group">
														<label class="col-sm-2 control-label" style="text-align: left;" >ZipCode:</label>
														<div class="col-md-9 col-md-offset-1 col-sm-10">
															<input type="text" class="form-control" name="zip" placeholder="Required" value="<?php echo $row->zip_code; ?>"/>
														</div>
													</div>
												</div>
											</div>
                                            <div class="row">
												<div class="col-md-6 col-xs-12">
													<div class="form-group">
														<label class=" col-md-4 col-sm-2 control-label" style="text-align: left;">Machine:</label>
														<div class="col-md-8 col-sm-10">
															<input type="text" class="form-control" name="machine" id="spinner1" value="<?php echo $machine = $row->machine; ?>"/>
														</div>
													</div>
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
				$('#center-profile')
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
				
				///////////////////////////////////////////
				$('#center-logo')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Click and Coose Logo',
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
				
				$('#spinner1').ace_spinner({value:<?php echo $machine; ?>,min:<?php echo $machine; ?>,max:50,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				
			});
		</script>

		</div><!-- /.main-container -->
       
       
		

