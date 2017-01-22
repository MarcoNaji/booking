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
				
				var oTable1 = $('#sample-table-3').dataTable( {
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
								<a href="<?php echo base_url(); ?>index.php/doc">Home</a>
							</li>
							<li class="active">Dialysis Centers</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Centers and Requests
							</h1>
						</div>
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
								<!-- PAGE CONTENT BEGINS -->


								<div class="hr hr-18 dotted hr-double"></div>
								<div class="row">
									<div class="col-xs-12">
										
										<div class="table-header">
											Supervision Requests
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
														<th>Contact Number</th>

														<th>
															<i class="hidden-480"></i>
															E-mail
														</th>
														<th class="hidden-480">Address</th>
                                                        	<th class="hidden-480">Request Status</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php  foreach($supervision as $row): if($row->status =="pending"){foreach($center as $crow): if($row->center_id == $crow->center_id){ ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?php echo $crow->name; ?>
														</td>
														<td><?php  echo $crow->phone; ?></td>
														<td><?php echo $crow->email; ?></td>

														<td class="hidden-480">
															<?php echo $crow->address; ?>
														</td>
                                                        <td class="hidden-480"><span class="label label-warning"><?php echo $row->status; ?></span></td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a title="View" class="blue" href="<?php echo base_url(); ?>index.php/doc/view_sup_request/<?php echo $row->id; ?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>
                                                            																<a title="Accept" class="green" href="<?php echo base_url(); ?>index.php/doc/accept_sup_request/<?php echo $row->id; ?>">
																	<i class="icon-ok bigger-130"></i>
																</a>
                                                            
<a title="Reject" class="red" href="<?php echo base_url(); ?>index.php/doc/reject_sup_request/<?php echo $row->id; ?>">
																	<i class="icon-remove bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="<?php echo base_url(); ?>index.php/doc/view_sup_request/<?php echo $row->id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		
                                                            
<li>
																			<a href="<?php echo base_url(); ?>index.php/doc/accept_sup_request/<?php echo $row->id; ?>" class="tooltip-success" data-rel="tooltip" title="Accept">
																				<span class="green">
																					<i class="icon-ok bigger-120"></i>
																				</span>
																			</a>
																		</li>

<li>
																			<a href="<?php echo base_url(); ?>index.php/doc/reject_sup_request/<?php echo $row->id; ?>" class="tooltip-red" data-rel="tooltip" title="Reject">
																				<span class="red">
																					<i class="icon-remove bigger-120"></i>
																				</span>
																			</a>
																		</li>                                                            
																	</ul>
																</div>
															</div>
														</td>
													</tr>
                                                    <?php }endforeach; }endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
                                <div class="space space-16"></div>	
                                
                                <div class="table-header">
											Your Centers
										</div>

										<div class="table-responsive">
											<table id="sample-table-3" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Name</th>
														<th>Contact Number</th>

														<th>
															<i class="hidden-480"></i>
															E-mail
														</th>
														<th class="hidden-480">Address</th>
                                                        	<th class="hidden-480">Zip Code</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
                                                <?php foreach($supervision as $row): if($row->status =="accepted"){foreach($center as $crow): if($row->center_id == $crow->center_id){ ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" disabled="disabled" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?php echo $crow->name; ?>
														</td>
														<td><?php  echo $crow->phone; ?></td>
														<td><?php echo $crow->email; ?></td>

														<td class="hidden-480">
															<?php echo $crow->address; ?>
														</td>
                                                        <td class="hidden-480"><?php echo $crow->zip_code; ?></td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a title="View" class="blue" href="<?php echo base_url(); ?>index.php/doc/view_center/<?php echo $row->id; ?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>
                                                            																<a onclick="if (confirm('Are You Sure To  Delete <?php echo $crow->name; ?> From your Supervision List?')){ return true;} else{return false;}" class="red" title="Delete" href="<?php echo base_url(); ?>index.php/doc/delete_center_sup/<?php echo $row->id; ?>">
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
																			<a href="<?php echo base_url(); ?>index.php/doc/view_center/<?php echo $row->id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

<li>
																			<a onclick="if (confirm('Are You Sure To  Delete <?php echo $crow->name; ?> From your Supervision List?')){ return true;} else{return false;}" href="<?php echo base_url(); ?>index.php/doc/delete_center_sup/<?php echo $row->id; ?>" class="tooltip-orange" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>                                                            
																	</ul>
																</div>
															</div>
														</td>
													</tr>
                                                    <?php }endforeach; } endforeach; ?>
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
           
        
        <!-- inline scripts related to this page -->

		                             
		</div><!-- /.main-container -->
       

		
