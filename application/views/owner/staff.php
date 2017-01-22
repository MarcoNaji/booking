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
         <script src="<?php echo base_url(); ?>assets/js/fuelux/fuelux.wizard.min.js"></script>
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
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				
				$.mask.definitions['~']='[+-]';
				$('#ic').mask('999999999999');
			
				jQuery.validator.addMethod("ic", function (value, element) {
					return this.optional(element) || /^\d{12}( x\d{1,6})?$/.test(value);
				}, "Enter a valid IC format.");
				
				$('#phone').mask('(99) 9999-9999');
				
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{2}\) \d{4}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
			$('#mobile').mask('(999) 999-9999');
			
				
				//validate form
				$("#submit_form").validate({
		errorElement: 'div',
		errorClass: 'help-block',
					focusInvalid: false,
		
   
        // Specify the validation rules
        rules: {
            name: "required",
			ic: {
			required: true,
			ic: 'required'	
			},
			email: {
			required: true,
			email:true
			},
			phone: {
			required: true,
			phone: 'required'
						},
			role: 'required',
			center: 'required',
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
							<li class="active">Medical Staff</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Manage Medical Staff
							</h1>
						</div><!-- /.page-header -->
                       <!-- PAGE CONTENT BEGINS -->


								<div class="hr hr-18 dotted hr-double"></div>
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
									<a href="#modal-form" role="button" class="blue" data-toggle="modal">Insert New Staff</a>
								</h4>
										<div class="table-header">
											Medical Staff List
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
                                                        	<th>Role</th>
														<th class="hidden-480">Status</th>
                                                        <th>
															<i class="hidden-480"></i>
															Center
														</th>
                                                        <th class="hidden-480">Deleted</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php foreach($center as $row): 
												if($row->owner_id == $owner_id &&$row->deleted != 1){
													foreach($staff as $srow):
													if($row->center_id == $srow->center_id){
													?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?php echo $srow->name; ?>
														</td>
														
														
                                                        <td><?php echo $srow->role; ?></td>

														<td class="hidden-480">
															<?php if($srow->status=="Active"){ echo '<span class="label label-success arrowed">'.$srow->status.'</span>';}elseif($srow->status=="In Active"){echo '<span class="label label-danger arrowed">'.$srow->status.'</span>';}elseif($srow->status=="On Leave"){echo '<span class="label label-light arrowed">'.$srow->status.'</span>';} ?>
														</td>
                                                        <td><?php echo $row->name; ?></td>
                                                        <td class="hidden-480"><?php if($srow->deleted != 1){ echo "No";}else{ echo "Yes";} ?></td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" title="View" href="<?php echo base_url(); ?>index.php/owner/view_staff/<?php echo $srow->staff_id; ?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a class="green" title="Edit" href="<?php echo base_url(); ?>index.php/owner/edit_staff/<?php echo $srow->staff_id; ?>">
																	<i class="icon-pencil bigger-130"></i>
																</a>
                                                                <?php if($srow->deleted != 1){ ?>

																<a onclick="if (confirm('Are You Sure To  Delete <?php echo $srow->name; ?>?')){ return true;} else{return false;}" class="red" title="Delete" href="<?php echo base_url(); ?>index.php/owner/delete_staff/<?php echo $srow->staff_id; ?>">
																	<i class="icon-trash bigger-130"></i>
																</a>
                                                                <?php }else{ ?>
                                                                <a onclick="if (confirm('Are You Sure To  Un-Delete <?php echo $srow->name; ?>?')){ return true;} else{return false;}" class="red" title="Un-Delete" href="<?php echo base_url(); ?>index.php/owner/undelete_staff/<?php echo $srow->staff_id; ?>">
																	<i class="icon-undo bigger-130"></i>
																</a>
                                                                <?php } ?>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="<?php echo base_url(); ?>index.php/owner/view_staff/<?php echo $srow->staff_id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="<?php echo base_url(); ?>index.php/owner/edit_staff/<?php echo $srow->staff_id; ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>
                                                                      

																		<li>
                                                                          <?php if($srow->deleted != 1){ ?>
																			<a onclick="if (confirm('Are You Sure To  Delete <?php echo $srow->name; ?>?')){ return true;} else{return false;}" href="<?php echo base_url(); ?>index.php/owner/delete_staff/<?php echo $srow->staff_id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
                                                                            <?php }else{ ?>
                                                                            <a onclick="if (confirm('Are You Sure To  Un-Delete <?php echo $srow->name; ?>?')){ return true;} else{return false;}" href="<?php echo base_url(); ?>index.php/owner/undelete_staff/<?php echo $srow->staff_id; ?>" class="tooltip-error" data-rel="tooltip" title="Un-Delete">
																				<span class="red">
																					<i class="icon-undo bigger-120"></i>
																				</span>
																			</a>
                                                                            <?php } ?>
																		</li>
                                                                        
																	</ul>
																</div>
															</div>
														</td>
													</tr>
                                                    <?php } endforeach; }endforeach; ?>
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
         <div id="modal-form" class="modal" tabindex="-1">
									<div class="modal-dialog">
                                    <form id="submit_form" method="post" action="<?php echo base_url(); ?>index.php/owner/add_staff" novalidate="novalidate">
										<div class="modal-content">
                                        
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Please fill the following form fields</h4>
											</div>
                                            

											<div align="right" class="modal-body overflow-visible">
                                            
												<div class="row">
                                                
													<div class="col-xs-12 col-sm-5">
                                                  <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">Name</label>

															<div>
																<input class="input-medium" type="text" name="name" id="name" placeholder="Required"/>
                                                                </div>
                                                                </div>
                                                                 <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">Title</label>

                                                               
                                                                <div>
																<input class="input-medium" type="text" name="title" placeholder="Optional" />
															</div>
                                                            </div>
                                                             <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">Phone</label>

															<div>
																<input class="input-medium" type="text" name="phone" id="phone" placeholder="Required" />
                                                                </div>
                                                                </div>
                                                                 <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">E-mail</label>

                                                               
                                                                <div>
																<input class="input-medium" type="text" name="email" id="email" placeholder="Required" />
                                                       
															</div>
                                                            </div>
                                                            <div class="form-group">
															<label class="col-sm-3 control-label no-padding-right">Status</label>

                                                               
                                                                <div>
																<select class="input-medium" type="text" name="status" id="form-field-last">
                                                                <option>Active</option>
                                                                <option>On Leave</option>
                                                                <option>In Active</option></select>
															</div>
                                                            </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-7">
                                                             <div class="form-group">
															<label class="col-sm-5 control-label no-padding-right">IC</label>

															<div>
																<input class="input-medium" type="text" name="ic" id="ic" placeholder="Required"/>
                                                                </div>
                                                                </div>
                                                                <div class="form-group">
															<label class="col-sm-5 control-label no-padding-right">Role</label>

                                                               
                                                                <div>
																<Select class="input-medium" type="text" name="role" id="role">
                                                                <option value="">Choose</option>
                                                                <option value="clerk">Clerk</option>
                                                                <option value="nurse">Nurse</option>
                                                                <option value="medical_assistant">Medical Assistant</option></Select>
                                                       
															</div>
                                                            </div>
                                                                 <div class="form-group">
															<label class="col-sm-5 control-label no-padding-right">Center</label>

															<div>
																<Select class="input-medium" type="text" name="center" id="center">
                                                                <option value="">Choose</option>
                                                                <?php foreach($center as $row):
																if($row->owner_id == $owner_id && $row->deleted != 1){ ?>
                                                                <option value="<?php echo $row->center_id; ?>"><?php echo $row->name; ?></option>
                                                                <?php }endforeach; ?></Select>
                                                                </div>
                                                                </div>
                                                                  <div class="form-group">
															<label class="col-sm-5 control-label no-padding-right">Mobile</label>

                                                               
                                                                <div>
																<input class="input-medium" type="text" name="mobile" id="mobile" placeholder="Optional" />
															</div>
                                                            </div>
                                                             <div class="form-group">
															<label class="col-sm-5 control-label no-padding-right">Website</label>

                                                               
                                                                <div>
																<input class="input-medium" type="text" name="website" id="form-field-last" placeholder="Optional" />
															</div>
                                                            </div>
                                                                                                           </div>
														
													
														

														
													</div>
                                                    <div class="row">
                                                
													<div class="col-xs-12 col-sm-12">
                                                    
                                                    <div class="form-group">
															<label class="col-sm-2 control-label">Address</label>

                                                               
                                                                <div class="col-sm-10">
                                                                <textarea class="autosize-transition form-control" type="text" name="address" id="address" placeholder="Required"></textarea>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            <div class="space-8"></div>
                                                            <div class="row">
                                                            <div class="col-xs-12 col-sm-12">
                                                            
                                                            <div class="form-group">
															<label class="col-sm-2 control-label">Comment</label>

                                                               
                                                                <div class="col-sm-10">
                                                                <textarea class="autosize-transition form-control" type="text" name="comment" id="form-field-last" placeholder="Optional"></textarea>
                                                                </div>
                                                            </div>        
                                                    
                                                    
                                                    
                                                    </div>
                                                    </div>
							
                                                                
                                                    <div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="icon-remove"></i>
													Cancel
												</button>

												<button class="btn btn-sm btn-primary">
													<i class="icon-ok"></i>
													Save
												</button>
											</div>
                                            
												</div>
                                                
											</div>	
                                            </form>
        
        <!-- inline scripts related to this page -->

		                             
		</div><!-- /.main-container -->
       