<div class="main-content">
<!-- page specific plugin styles -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorpicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorpicker.css" />
		<!-- fonts -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-skins.min.css" />
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
		<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {

				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#timepicker2').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null,
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

				//validate form
				$("#submit_form").validate({
		errorElement: 'div',
		errorClass: 'help-block',
					focusInvalid: false,
		
   
        // Specify the validation rules
        rules: {
            name: "required"
        },
        
        // Specify the validation error messages
        messages: {
			name: "Please enter Machine name."
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
							<li class="active">Manage shift</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								List of Shifts</h1>
						</div>
								<!-- PAGE CONTENT BEGINS -->
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
                                        elseif($this->session->flashdata('success_msg')){ echo '
                                        <div class="alert alert-block alert-success">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove"></i>
											</button>

											<p>'.$this->session->flashdata('success_msg').'
												
											</p>
										</div>'
										; }
										$this->session->unset_userdata('error_msg');
										$this->session->unset_userdata('success_msg');?>

								<div class="row">
									<div class="col-xs-12">
									<h4 class="pink">
									<i class="icon-download-alt"></i>
									<a href="#modal-form" role="button" class="blue" data-toggle="modal">Add New Shift</a>
								</h4>
										<div class="table-header">
											Shifts
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Name</th>
														<th>Start Time</th>
                                                          <th>End Time</th>
														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php $i=1; foreach($shift as $row): ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?php echo "Shift ".$i; ?>
														</td>
                 
                                                         <td>
															<?php echo $row->from; ?>
														</td>
														<td>
															<?php echo $row->to; ?>
														</td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" title="Edit" href="<?php echo base_url(); ?>index.php/staff/edit_shift_page/<?php echo $row->shift_id; ?>">
																	<i class="icon-edit bigger-130"></i>
																</a>
																<a onclick="if (confirm('Are You Sure To  Delete <?php echo "Shift ".$i; ?>? All Patients Placed in This Shift Will be Removed')){ return true;} else{return false;}" class="red" title="Delete" href="<?php echo base_url(); ?>index.php/staff/delete_shift/<?php echo $row->shift_id; ?>">
																	<i class="icon-trash bigger-130"></i>
																</a>
																													</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="<?php echo base_url(); ?>index.php/staff/edit_shift_page/<?php echo $row->shift_id; ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																				<span class="blue">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		<li>
																			<a onclick="if (confirm('Are You Sure To  Delete <?php echo "Shift ".$i ?>?')){ return true;} else{return false;}" href="<?php echo base_url(); ?>index.php/staff/delete_shift/<?php echo $row->shift_id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>																	</ul>
																</div>
															</div>
														</td>
													</tr>
                                                    <?php $i++; endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>


							</div><!-- /.col -->
						</div><!-- /.row -->

					
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
           

		                             
		</div><!-- /.main-container -->
		
		 <div id="modal-form" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
                                    <form method="post" id="submit_form" action="<?php echo base_url(); ?>index.php/staff/add_shift">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													New Shift
												</div>
											</div>

											<div align="right" class="modal-body overflow-visible">
                                            
												<div class="row">
                                                
													<div class="col-xs-12 col-sm-5">
                                                  <div class="form-group">
															<label class="col-sm-3 control-label">From: </label>

															<div>
															<span class="input-group bootstrap-timepicker">
																<input class="input-medium" type="text" name="start_time" id="timepicker1"/>
                                                               </span>
                                                                </div>
                                                                </div>
                                                                 
                                                            
                                                                 </div>
                                                            <div class="col-xs-12 col-sm-7">
                                                            
 <div class="form-group">
															<label class="col-sm-5 control-label">To:</label>

															<div>
															<span class="input-group bootstrap-timepicker">
																<input class="input-medium" type="text" name="end_time" id="timepicker2"/>
                                                               </span>
                                                                </div>
                                                                </div>                             
                                           </div>
													</div>
												</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="icon-remove"></i>
													Close
												</button>
                                                <button class="btn btn-sm btn-primary pull-left">
													<i class="icon-ok"></i>
													Add
												</button>

												
											</div>
										</div><!-- /.modal-content -->
                                        </form>
									</div><!-- /.modal-dialog -->
       
		
       

		
