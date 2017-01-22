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
		<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
        
<!-- ace settings handler -->

		<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null,null,
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
							<li class="active">Manage Machine</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								List of Machines</h1>
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
									<a href="#modal-form" role="button" class="blue" data-toggle="modal">Insert New Machine</a>
								</h4>
										<div class="table-header">
											Machine 
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
														<th>Status</th>
                                                          <th>Risk</th>
                                                          <th>Comment</th>
														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php foreach($machine as $row): ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?php echo $row->name; ?>
														</td>
                                                       
														<td><?php if($row->status != 0){echo "ON";}else{echo "OFF";} ?></td>
                                                         <td>
															<?php echo $row->risk; ?>
														</td>
														<td>
															<?php echo $row->comment; ?>
														</td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" title="Edit" href="<?php echo base_url(); ?>index.php/staff/edit_machine_page/<?php echo $row->machine_id; ?>">
																	<i class="icon-edit bigger-130"></i>
																</a>
																<a class="green" title="Usage History" href="<?php echo base_url(); ?>index.php/staff/machine_usage/<?php echo $row->machine_id; ?>">
																	<i class="icon-desktop bigger-130"></i>
																</a>
																													</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="<?php echo base_url(); ?>index.php/staff/edit_machine_page/<?php echo $row->machine_id; ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																				<span class="blue">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		<li>
																			<a href="<?php echo base_url(); ?>index.php/staff/machine_usage/<?php echo $row->machine_id; ?>" class="tooltip-info" data-rel="tooltip" title="Usage History">
																				<span class="blue">
																					<i class="icon-desktop bigger-120"></i>
																				</span>
																			</a>
																		</li>																	</ul>
																</div>
															</div>
														</td>
													</tr>
                                                    <?php endforeach; ?>
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
                                    <form method="post" id="submit_form" action="<?php echo base_url(); ?>index.php/staff/add_machine">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													New Machine
												</div>
											</div>

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
													<tr >
														<th></th>
														<th></th>     
													</tr>
												</thead>

												<tbody>
                                                    <tr>
                                                    <td class="center">Name:</td>
														<td><input name="name" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="center">Status:</td>
														<td><label>
														<input name="status" value="1" class="ace ace-switch ace-switch-3" type="checkbox" />
														<span class="lbl"></span>
													</label></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="center">Risk:</td>
                                                        
														<td><select name="risk" type="text" class="form-control"><option>Low</option><option>High</option></select></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="center">Comment:</td>
														<td><textarea name="comment" type="text" class="form-control"></textarea></td>
                                                        </tr>
												</tbody>
												</table>
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
       
		
       

		
